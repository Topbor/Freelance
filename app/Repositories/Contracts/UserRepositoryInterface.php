<?php

namespace App\Repositories\Contracts;

use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function update(User $user, array $attributes): User;

    public function showJobs(User $user): User;

    public function MakeSug(User $user,array $attributes);

    public function getPivot($id);
}
