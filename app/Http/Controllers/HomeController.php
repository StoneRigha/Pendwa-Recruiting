<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Team;
use App\Models\Application;

class HomeController extends Controller
{
    //redirect function
    public function redirect(){
        if (Auth::id()){
            $team = Team::all();
            if (Auth::user()->usertype=='0'){
                return view('user.home', compact('team'));
            }
            else{
                return view('admin.home');
            }
        } 
        else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{

        $team = Team::all();
        return view('user.home', compact('team'));
         }
    }

    //upload application
    public function application(Request $request){
        $data = new Application;

        $image =$request->file;
        $imagename = time(). '.' . $image->getClientoriginalExtension();
        $request->file->move('applicationimage',$imagename);
        $data->image=$imagename;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->position=$request->position;
        $data->number=$request->number;
        $data->message=$request->message;
        $data->status= 'In progress';

        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message', 'Application sent successfully... We will contact you soon');
    }
}
