<?php

namespace App\Http\Controllers;
use LaravelLocalization;
use App\Models\Categories;
use App\Models\categories_ar;
use App\Models\categories_en;
use App\Models\posts_ar;
 use App\Models\posts_en;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $categories= Categories::all();

        $posts_ar=posts_ar::select("*")->where("id","<",10)->get();
        $posts_en=posts_en::select("*")->where("id","<",10)->get();
        $category_en= categories_en::select(
            'id',
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
            ); 
            $url=substr(url()->current(),22,2);
           
            $category_ar= categories_ar::select(
             'id',
           'name_' .LaravelLocalization::getCurrentLocale() . ' as name');
       
           $img=[];
           foreach($categories as $cat){
          $img[]=$cat['image'];
           }
   //dd($img);
           return view('front.index',["categories"=>$categories, "categories_en"=>$category_en,"categories_ar"=>$category_ar ,'url'=>$url,'img'=>$img]);       

    }
}
