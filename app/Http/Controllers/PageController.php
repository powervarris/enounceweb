<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function analytics()
    {
        return view('analytics');
    }

    public function announcements()
    {
        return view('announcements');
    }

    public function notifications()
    {
        return view('notifications');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function logs()
    {
        return view('logs');
    }
    
    public function createann()
    {
        return view('createann');
    }

    public function login()
    {
        return view('login');
    }

}