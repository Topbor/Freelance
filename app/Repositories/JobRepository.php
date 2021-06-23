<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\Contracts\JobRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class JobRepository implements JobRepositoryInterface
{

    public function index(): Collection
    {
        return Job::get();
    }


    public function findById(int $id): ?Job
    {
        return Job::where('id', $id)->first();
    }

    public function create(array $attributes): Job
    {   //dd($attributes);
        return Job::create($attributes);
    }

    public function update(Job $job, array $attributes): Job
    {
        $job->update($attributes);

        return $job;
    }

    public function delete(Job $job): bool
    {
        return $job->delete();
    }
}
