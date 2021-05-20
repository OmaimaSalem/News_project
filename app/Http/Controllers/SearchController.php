<?php

namespace App\Http\Controllers;
use App\Models\posts_ar;
use App\Models\posts_en;
use App\Models\Posts;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(){
       $url=substr(url()->current(),22,2);
       $serchtxt=$_GET['query'];
       $posts= Posts::all();
       $img=[];
       foreach($posts as $post){
       $img[]=$post['image'];
       }
       $posts_ar=posts_ar::where('title','LIKE','%'. $serchtxt.'%')->get();
     
        $posts_en=posts_en::where('title','LIKE','%'. $serchtxt.'%')->get();
      
      
   // dd($posts_ar);
     return view('front.search',["dataE"=>$posts_en,"dataA"=>$posts_ar,"img"=>$img,"url"=>$url]);
      
    }
}
