<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    //display messages

    function display(){
        $messages = Message::orderBy('id', 'desc')->paginate(10);
        
        
        return view('messages', compact('messages'));
      }

      //show single page

      function show($id){

        $message = Message::find($id);

        return view('/showMessage' , compact('message'));

      }


      //store message

      public function store(Request $request){

        // $request->validate(){[

        //     'name' => 'required|max:20',
        //     'email' => 'required|max:30',
        //     'subject' => 'required|max:30',
        //     'message' => 'required|max:255',

        // ]};


        $message = new Message();



        $message->name = $request->name;        
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();


        return redirect('/contactus')->with('status', 'Message has been sent!');
      }


      public function delete($id){

        $message = Message::find($id);
        $message->delete();

        return redirect('/messages')->with('status', 'Message has been deleted');

      }
}
