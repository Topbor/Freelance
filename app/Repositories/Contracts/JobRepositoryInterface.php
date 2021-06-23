<?php

namespace App\Repositories\Contracts;

use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;

interface JobRepositoryInterface
{

    public function index(): Collection;

    public function findById(int $id): ?Job;

    public function create(array $attributes): Job;

    public function update(Job $job, array $attributes): Job;

    public function delete(Job $job): bool;
}
