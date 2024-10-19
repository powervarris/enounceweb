<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Notification;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function analytics()
    {
        return view('analytics');
    }

    public function announcements()
    {
        // $ann = Announcement::all();
        // return view('announcements', compact('ann'));
        return view('announcements');

    }

    public function notifications()
    {
        // $notif = Notification::all();
        // return view('notifications', compact('notif'));
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

    public function login()
    {
        return view('login');
    }

}