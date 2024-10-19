<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnController extends Controller
{
    //CREATE FUNCTIONS
    public function createAnn()
    {
        return view('announcements.create-ann');
    }

//     public function storeAnn(Request $request)
//    {
//        $validatedData = $request->validate(
//             ['title' => 'required|string|max:55',
//            'post_content' => 'required|string|max:255',],
//         );

//         Announcement::insert([
//             // 'title' =>$request->title,
//             // 'post_content' =>$request->post_content,
//             // 'user_id' => Auth::user()->id,
//             // 'created_at' => Carbon::now(),
//         ]);
    
//         return redirect()->route('announcements')->with('success', 'Announcement created successfully.');
//     }

//     //READ FUNCTIONS
//     public function showAnn($id)
//     {
//        $ann = Announcement::find($id);
//        return view('announcements.show-ann', compact('ann'));
//     }

//     //UPDATE FUNCTIONS
//     public function editAnn($id)
//     {
//         $ann = Announcement::findOrFail($id);
//         return view('announcements.edit-ann', compact('ann'));
//     }

//     public function updateAnn(Request $request, $id)
//    {
//        $ann = Announcement::findOrFail($id);
//        $validatedData = $request->validate([
//         //    'title' => 'required|string|max:55',
//         //    'post_content' => 'required|string|max:255',
//        ]);

//        $ann::update([
//         // 'title' =>$request->title,
//         // 'post_content' =>$request->post_content,
//         // 'user_id' => Auth::user()->id,
//         // 'created_at' => Carbon::now(),
//         ]);

//        return redirect()->route('announcements')->with('success', 'Announcement updated successfully.');
//    }

//    //DELETE FUNCTIONS
//    public function destroyAnn($id)
//    {
//        $ann = Announcement::findOrFail($id);
//        $ann->delete();
//        return redirect()->route('announcements')->with('success', 'Announcement deleted successfully.');
//    }

}
