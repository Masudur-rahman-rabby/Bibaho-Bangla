<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryModel;

class StoryController extends Controller
{
    public function create_story()
    {
        return view('submit_story');
    }
    public function store(Request $request){


        $validatedData = $request->validate([
            'title' => 'required',
            'story' => 'required',
            'groom_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'bride_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
        
        
        
        // Create a new user instance
        $user = new StoryModel; // Replace 'App\Models\BiodataModel' with the correct model namespace
        $user->title = $request->input('title');
        $user->story = $request->input('story');
        
   
            $file1=$request->file('groom_picture');
            $extention1= $file1->getClientOriginalExtension();
            $filename1= time().'.'.$extention1;
            $file1->move('uploads/bd/',$filename1);
            $user->groom_picture = $filename1;

            $file2=$request->file('bride_picture');
            $extention2= $file2->getClientOriginalExtension();
            $filename2= time().'.'.$extention2;
            $file2->move('uploads/bd/',$filename2);
            $user->bride_picture = $filename2;

        $user->save();
        
        // Redirect or do something else
        return redirect('/stories')->with('status', 'Story added successfully');
        
    }

    public function view()
    {
        $story = StoryModel::all();
        $data = compact('story');
        return view('stories')->with($data);
    }
}
