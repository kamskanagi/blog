<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    //

    public function submit(Request $request, Message $message ){

        $validatedata = request()->validate([  
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
         ]);
 
     /*    $message = Message:: create([
             'name' => $request->name,
             'email' => $request->email,
             'subject' => $request->subject,
             'message' => $request->message,
 
         ]);
*/
         $message = new Message();
         $message->name = $request->input('name');
         $message->email = $request->input('email');
         $message->subject = $request->input('subject');
         $message->message = $request->input('message');
         $message->save();

         return redirect('/contact')->with('status', "Sent Successfully");
    }

    public function getMessages(){

        $messages = Message::all();

       //dd($messages);
       return view('messages',['messages' => $messages] );
    }
}
