<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except('abs','calisthenics','bulking','getfit','powerlifting','women','shredding');
    }

    function abs(){

        $program = Program::where('category', 'abs')->orderBy('id', 'desc')->paginate(20);
        return view('abs', compact('program')); 
    }

    
    function calisthenics(){
        $program = Program::where('category', 'calisthenics')->orderBy('id', 'desc')->paginate(20);

        return view('calisthenics', compact('program')); 
    }

    
    function bulking(){
        $program = Program::where('category', 'bulking')->orderBy('id', 'desc')->paginate(20);

        return view('bulking', compact('program')); 
    }

    
    function getfit(){
        $program = Program::where('category', 'getfit')->orderBy('id', 'desc')->paginate(20);

        return view('getfit', compact('program')); 
    }

    
    function powerlifting(){
        $program = Program::where('category', 'powerlifting')->orderBy('id', 'desc')->paginate(20);

        return view('powerlifting', compact('program')); 
    }

    
    function women(){
        $program = Program::where('category', 'women')->orderBy('id', 'desc')->paginate(20);

        return view('women', compact('program')); 
    }

    
    function shredding(){
        $program = Program::where('category', 'shredding')->orderBy('id', 'desc')->paginate(20);

        return view('shredding', compact('program')); 
    }



    function addprogram(){


        return view('addprogram');

    }


    //store

    function storeprogram(Request $request){

        if($request->hasFile('coverImage')){
            $file = $request->file('coverImage');
            $ext = $file->getClientOriginalExtension();
            $filename = 'cover_image' . '_' . time() . '_' . $ext; 
            $file->storeAs('public/coverImage', $filename);
  
          } else {
            $filename = 'defaultimg.png';
          }
    $program = new Program();

    $program->title = $request->title;        
    $program->category = $request->category;
    $program->img = $filename;
    $program->pdf = $request->pdf;

    $program->save();


    return redirect('/programs')->with('status', 'Program has been added');

    }



    

    public function delete($id){

        $program = Program::find($id);
        $program->delete();

        return redirect('/programs')->with('status', 'Program has been deleted');

      }
}
