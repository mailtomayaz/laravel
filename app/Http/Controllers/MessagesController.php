<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//include message model
use App\Message;

class MessagesController extends Controller
{
    //get submited data from the contact form and save into database
    public function submit(Request $request){
        $this->validate($request,[
            'username'=> 'required',
            'useremail'=>'required'
        ]);
        //return "Success";
        //use message model to get reqest data
        $message = new Message;
        $message->username = $request->input('username');
        $message->useremail = $request->input('useremail');
        $message->usermessage = $request->input('usermessage');
        //save message
        $message->save();
        //redirect to home page
        return redirect('/')->with('status','Message Sent');
        
    }
    //get data from the database 
    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages',$messages);
    }
      //get data from the database 
    public function getMessage($id){
        $message = Message::find($id);
        //dd($message);
        return view('show')->with('message',$message);
    }
}
