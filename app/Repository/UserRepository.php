<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserInterface
{
    public function fetchUser()
    {
        return User::select('users.id as user_id', 'users.name', 'users.email', 'roles.id as role_id', 'roles.name as role_name')
            ->leftJoin('user_roles', 'user_roles.user_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'user_roles.role_id')
            ->get();
    }
}
