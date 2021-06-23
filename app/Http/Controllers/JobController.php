<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Jobs\JobStoreRequest;
use App\Http\Requests\Web\Jobs\JobUpdateRequest;
use App\Models\Job;
use App\Repositories\Contracts\JobRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class JobController extends Controller
{
    protected JobRepositoryInterface $jobRepository;

    public function __construct(Request $request, JobRepositoryInterface $repository)
    {
        parent::__construct($request);

        $this->jobRepository = $repository;
    }

    public function index()
    {
        $jobs = $this->jobRepository->index();

        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.new');
    }

    public function store(JobStoreRequest $request)
    {
        //dd($request->getSanitized());
        $job = $request->getSanitized();
        $user_id = Auth::id();
        $pushArr= array("user_id" => $user_id);
        $DataArr = array_merge($job,$pushArr);
        //dd($DataArr);
        $this->jobRepository->create($DataArr);
        return redirect('jobs');
    }

    public function show(Job $job)
    {
        //dd($job);
        return view('jobs.job', compact('job'));
    }

    public function edit(Job $job)
    {
        //$job=$this->jobRepository->findById($id);
        return view('jobs.edit', compact('job'));
    }

    public function update(Job $job, JobUpdateRequest $request)
    {
        //dd($job);
        $job = $this->jobRepository->update($job, $request->getSanitized());

        return redirect('jobs');
    }

    public function destroy(Job $job)
    {

        $this->jobRepository->delete($job);

        return redirect('jobs');
    }
}
