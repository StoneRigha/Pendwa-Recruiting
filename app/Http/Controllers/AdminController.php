<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Team;

class AdminController extends Controller
{
    //add recruitment team view
    public function addview(){

        return view('admin.add_team');
    }

    //upload reecruitment team members
    public function upload(Request $request){
        $team = new Team;

        $image =$request->file;
        $imagename = time(). '.' . $image->getClientoriginalExtension();
        $request->file->move('teamimage',$imagename);
        $team->image=$imagename;

        $team->name=$request->name;
        $team->phone=$request->phone;
        $team->speciality=$request->speciality;

        $team->save();
        return redirect()->back()->with('message', 'uploaded successfully!');
        
    }

    //show applications
    public function showapplications(){
        $data = Application::all();
        return view ('admin.showapplications', compact('data'));
    }

    //delete application
    public function deleteapplication($id){
        $data = Application::find($id);
        
        $data->delete();

        return redirect()->back();
    }
    //update application view
    public function updateapplication($id){

        $data = Application::find($id);
        return view('admin.update_application', compact('data'));
    }

    //update application
    public function editapplication(Request $request, $id){
        $data = Application::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->position=$request->position;
        $data->number=$request->number;
        $data->message=$request->message;

        $image=$request->file;

        if($image){
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('applicationimage', $imagename);
        $data->image=$imagename;

     }

        $data->save();

        return redirect()->back()->with('message', 'Application updated successfully...');
    }
}
