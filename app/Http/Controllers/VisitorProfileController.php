<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorProfileController extends Controller
{
    public function index()
    {
        return view('visitor.profile.index');
    }

    public function comment()
    {
        return view('visitor.comment.index');
    }

    public function changePassword()
    {
        return view('visitor.change-password.index');
    }
}
