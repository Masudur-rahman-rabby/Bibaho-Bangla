<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiodataModel;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
// Validate the form data
$validatedData = $request->validate([
    'name' => 'required',
    'age' => 'required',
    'gender' =>'required|in:male,female,others',
    'phone' =>'required',
    'religion' => 'required|in:hindu,muslim,christian,buddhist,other',
    'cast' => 'required|in:syed,sheikh,pathan,ansari,sunni,sia,lama,shepra,tamang,rai,bhramin,rajput,jat,panjabi,baniya,smith,brown,padri',
    'interested_in' => 'required|in:male,female,others',
    'age_preference' => 'required|in:18-25,26-35,36-45,46+',
    'religion_preference' => 'required|in:hindu,muslim,christian,buddhist,other',
    'cast_preference' => 'required|in:syed,sheikh,pathan,ansari,sunni,sia,lama,shepra,tamang,rai,bhramin,rajput,jat,panjabi,baniya,smith,brown,padri',
    'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
]);



// Create a new user instance
$user = new BiodataModel; // Replace 'App\Models\BiodataModel' with the correct model namespace
$user->name = $request->input('name');
$user->age = $request->input('age');
$user->gender =$request->input('gender');
$user->phone =$request->input('phone');
$user->religion = $request->input('religion');
$user->cast = $request->input('cast');
$user->interested_in = $request->input('interested_in');
$user->age_preference = $request->input('age_preference');
$user->religion_preference = $request->input('religion_preference');
$user->cast_preference = $request->input('cast_preference');

if($request->hasfile('profile_picture')){
    $file=$request->file('profile_picture');
    $extention= $file->getClientOriginalExtension();
    $filename= time().'.'.$extention;
    $file->move('uploads/bd/',$filename);
    $user->profile_picture = $filename;
}
$user->save();

// Redirect or do something else
return redirect()->back()->with('status', 'Biodata added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){

            $biodata= BiodataModel::where('name','LIKE',"%$search%")->
            orwhere('gender','LIKE',$search)->
            orwhere('age','LIKE',$search)->get();

        }else{
            $biodata = BiodataModel::all();

        }
        
        $data = compact('biodata','search');
        return view('dashboard')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BiodataModel $model)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
