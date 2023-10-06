<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MailNotif;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::latest()->limit(3)->get();
        return view('index', [
            'posts' => $posts
        ]);
    }

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        if($this->isOnline()){
            $mailData = [
                'recipient' => 'nobleworks@gmail.com', // Corrected typo in recipient
                'name' => $request->email,
                'email' => $request->name,
                'subject' => $request->subject,
                'body' => $request->message, // Changed 'body' to 'message'
    
            ];
            Mail::to('nobleworks8@gmail.com')->send(new MailNotif($mailData));
            Contact::create($mailData);
            return redirect('/home#contact')->with('success', 'Email berhasil dikirim');
        }else{
            return redirect()->back()->withInput()->with('error', 'Check your internet connection'); // Corrected message text
        }
    }
    
    public function isOnline($site = 'https://youtube.com/'){
        if(@fopen($site, 'r')){
            return true;
        }else{
            return false;
        }
    }
}
