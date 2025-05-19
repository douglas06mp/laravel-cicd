<?php

use Tests\TestCase;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(TestCase::class, RefreshDatabase::class);

beforeEach(function () {
    $this->userRepository = new UserRepository;
});

it('can get all users', function () {
    $users = $this->userRepository->getAllUsers();

    expect($users)->toBeInstanceOf(\Illuminate\Database\Eloquent\Collection::class);
});
