<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Job;
use App\Repositories\Contracts\UserRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function update(User $user, array $attributes): User
    {
        $user->update($attributes);

        return $user;
    }
    public function showJobs(User $user): User
    {
        //dd($user);
        return $user;
    }
    public function MakeSug(User $user, array $attributes)
    {
        //dd($attributes);
        $user->jobs()->sync($attributes);
    }

    public function getPivot($id)
    {   
        return Job::where('user_id',$id)->with('users')->whereHas('users')->get();
    }

}
