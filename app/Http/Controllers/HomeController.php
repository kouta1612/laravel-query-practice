<?php

namespace App\Http\Controllers;

use App\Repository\UserInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(UserInterface $UserRepository)
    {
        $users = $UserRepository->fetchUser();
        return view('home', ['users' => $users]);
    }
}
