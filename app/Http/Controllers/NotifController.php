<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    //CREATE FUNCTIONS
    public function createNotif()
    {
        return view('notifications.create-notif');
    }

//     public function storeNotif(Request $request)
//    {
//        $validatedData = $request->validate(
//             ['title' => 'required|string|max:55',
//            'post_content' => 'required|string|max:255',],
//         );

//         Notification::insert([
//             // 'title' =>$request->title,
//             // 'post_content' =>$request->post_content,
//             // 'user_id' => Auth::user()->id,
//             // 'created_at' => Carbon::now(),
//         ]);
    
//         return redirect()->route('notifications')->with('success', 'Push Notification created successfully.');
//     }

//     //READ FUNCTIONS
//     // public function showNotif($id)
//     // {
//     //    $notif = Notification::find($id);
//     //    return view('notifications.show-notif', compact('notif'));
//     // }

//     //UPDATE FUNCTIONS
//     public function editNotif($id)
//     {
//         $notif = Notification::findOrFail($id);
//         return view('notifications.edit-notif', compact('notif'));
//     }

//     public function updateNotif(Request $request, $id)
//    {
//        $notif = Notification::findOrFail($id);
//        $validatedData = $request->validate([
//         //    'title' => 'required|string|max:55',
//         //    'post_content' => 'required|string|max:255',
//        ]);

//        $notif::update([
//         // 'title' =>$request->title,
//         // 'post_content' =>$request->post_content,
//         // 'user_id' => Auth::user()->id,
//         // 'created_at' => Carbon::now(),
//         ]);

//        return redirect()->route('notifications')->with('success', 'Push Notification updated successfully.');
//    }

//    //DELETE FUNCTIONS
//    public function destroyNotif($id)
//    {
//        $notif = Notification::findOrFail($id);
//        $notif->delete();
//        return redirect()->route('notifications')->with('success', 'Push Notification deleted successfully.');
//    }
}
