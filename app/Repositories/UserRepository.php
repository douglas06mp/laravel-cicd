<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Get all users.
     *
     * @return \Illuminate\Database\Eloquent\Collection<User>
     */
    public function getAllUsers()
    {
        return User::all();
    }

    /**
     * Find a user by ID.
     *
     * @param  int  $id
     * @return \App\Models\User|null
     */
    public function findUserById($id)
    {
        return User::find($id);
    }

    /**
     * Create a new user.
     *
     * @return \App\Models\User
     */
    public function createUser(array $data)
    {
        return User::create($data);
    }
}
