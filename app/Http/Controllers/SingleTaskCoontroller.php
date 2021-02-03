<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SingleTaskCoontroller extends Controller
{
    //
    public function __invoke(User $user)
    {
        return $user;
    }
}
