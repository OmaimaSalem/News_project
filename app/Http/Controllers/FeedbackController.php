<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\posts_en;
use App\Models\posts_ar;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class FeedbackController extends Controller
{
  public function __construct(){
           
    $this->middleware("auth");
}
    function feedback(){
        $feedback = new Feedback;
        $feedbacks=$feedback->all();
        return view('admin.feedbacks',["feedbacks"=>$feedbacks]); 
      
    }
   
    function contact($id){
       // dd($id);
     $post=new Posts;
     $post=$post->find($id);
   // dd($post);
     $feedback = new Feedback;
     $user_name=Auth::user()->name;
     $user_email=Auth::user()->email;
     // dd($user_email);
     $feedback->name=$user_name;
     $feedback->email=$user_email;
     $feedback->post_id=$id;
    $feedback->comments=request("comments");
   // dd($feedback);
    $feedback->save();
    return redirect()->back()->with('message', 'Thanks for your Feedback!');
      
    }
}
