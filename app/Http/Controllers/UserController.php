<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Users\UserUpdateRequest;
use App\Http\Requests\Web\pivots\PivotStoreRequest;
use App\Models\User;
use App\Models\Job;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(Request $request, UserRepositoryInterface $repository)
    {
        parent::__construct($request);

        $this->userRepository = $repository;
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(User $user, UserUpdateRequest $request)
    {
        //dd($request->getSanitized());
        $user = $this->userRepository->update($user, $request->getSanitized());

        return redirect('home');
    }
    public function showJobs(User $user)
    {
        //dd($user);
        $jobs = $this->userRepository->showJobs($user)->jobs;
        return view('user.jobs',['jobs'=>$jobs]);
    }
    public function makeSuggestion(PivotStoreRequest $request)
    {
        //dd($request->getSanitized());
        $pivots = $request->getSanitized();
        $user = Auth::user();
        $this->userRepository->MakeSug($user,$pivots);
        return redirect('jobs');
    }
    public function suggestion()
    {
        //dd($request->getSanitized());
        $id = Auth::id();
        $pivots = $this->userRepository->getPivot($id);
        //dd($pivots);
        return view('user.suggestions',['pivots'=>$pivots]);
    }
}
