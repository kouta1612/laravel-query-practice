<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserInterface
{
    public function fetchUser()
    {
        return User::select('users.name', 'roles.name as role_name')
            ->leftJoin('user_roles', 'user_roles.user_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'user_roles.role_id')
            ->get();
    }
}
