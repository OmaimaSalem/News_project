<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Categories_ar;
use App\Models\Categories_en;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
            $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Categories::all();
        $categories_en= Categories::all();
        $categories_ar= Categories::all();
        return view('admin.all_categeries',["categories"=>$categories,"categories_en"=>$categories_en,"categories_ar"=>$categories_ar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_categeries');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $categories=new  Categories;
        $categories_ar=new categories_ar;
        $categories_en=new categories_en;

        $categories->setConnection('mysql');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categoryimg/'), $filename);
            $filename='categoryimg/'.$filename;
        }
        $categories->image=$filename;
        $categories->save();
        $categories_en->setConnection('mysql1');
        $categories->categories_en()->create([
            "name"=>$request["nameEN"],

        ]);

        $categories_ar->setConnection('mysql2');
        $categories->categories_ar()->create([
            "name"=>$request["nameAR"],

        ]);

      //  return redirect(route("categories.create"));

       return redirect(route("categories.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        //dd($category);
        $category_ar=new Categories_ar();
        $categories_ar=$category_ar->find($category->id);
        //dd($categories_ar);
        $category_en=new Categories_en();
        $categories_en=$category_en->find($category->id);
        return view("admin.viewcateg",["category"=>$category,"categories_ar"=>$categories_ar,"categories_en"=>$categories_en]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category )

    {
       //dd($category);
        $category_ar=new Categories_ar();
        $categories_ar=$category_ar->find($category->id);
        //dd($categories_ar);
        $category_en=new Categories_en();
        $categories_en=$category_en->find($category->id);
        return view("admin.edit_categeries",["category"=>$category,"categories_ar"=>$categories_ar,"categories_en"=>$categories_en]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {

        $category->setConnection('mysql');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categoryimg/'), $filename);
            $filename='categoryimg/'.$filename;

        }
        $category->update([

        "image"=>$filename

        ]);

        $category->categories_en()->update([
            "name"=>$request["nameEN"],

        ]);


        $category->categories_ar()->update([
            "name"=>$request["nameAR"],

        ]);


        return redirect(route("categories.index",["category"=>$category]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect(route("categories.index"));
    }
}
