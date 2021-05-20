<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\posts_ar;
use App\Models\posts_en;
use App\Models\category_post_en;
use App\Models\category_post_ar;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryPostController extends Controller
{
    function DisplayPosts($id){
     //  
      $url=substr(url()->current(),22,2);
      $posts= Posts::all();
      $img=[];
      foreach($posts as $pt){
       $img[]=$pt['image'];
      }

  //return $id;
      $posts_en= posts_en::where('id', function($query)use ($id){
        $query->select('post_id')
        ->from(with(new category_post_en)->getTable())
        ->where('category_id',$id);
    })->get();
 //return  $post_en;

$posts_ar= posts_ar::where('id', function($query)use ($id){
  $query->select('post_id')
  ->from(with(new category_post_ar)->getTable())
  ->where('category_id',$id);
})->get();
//return  $post_ar;
 
return view('front.categorypost',["posts_en"=>$posts_en,"posts_ar"=>$posts_ar,"url"=>$url,'img'=>$img]);
       }

          function Post($id){
           // return $id;
            $url=substr(url()->current(),22,2);
           
            $posts_en=new posts_en;
            $posts_en=$posts_en->findorfail($id);
            $post_en=$posts_en['posts_id'];
           
            $posts_ar=new posts_ar;
            $posts_ar=$posts_ar->findorfail($id);
        
           $posts = Posts::all();
           foreach ($posts as $post) {
                 if ($post->id == $post_en) {
                 $post_img =$post['image'];    
                 }
            
         }
//dd($post_img);


            $feedback = new Feedback;
            $feedbacks=DB::table('feedback')
            ->where('post_id', '=', $id)
            ->get();
   
          //dd($feedbacks);
         return view('front.singlepost',["posts_en"=>$posts_en,"post_img" => $post_img,"posts_ar"=>$posts_ar,"feedbacks"=>$feedbacks,"url"=>$url]);
         }
   
       
}
