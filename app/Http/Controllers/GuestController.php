<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function login() {
        return view('pages.auth.login');
    }

    public function register() {
        return view('pages.auth.register');
    }

}
