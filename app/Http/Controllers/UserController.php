<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // index
    public function index()
    {
        $allUsers = User::all();
        return $allUsers;
    }
}
