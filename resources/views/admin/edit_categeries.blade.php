@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> {{__('admin.home')}}
</a></li>
              <li class="breadcrumb-item active"> {{__('admin.editcat')}}
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div style="padding-top:10px; padding-left:208px ;" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-3">
                <div style="width: 200px;" class="row">
                <form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                
                    @csrf
                  
                     <div class="row">
<div class="col-6">
<div  style="width: 300px;"  class="form-group">
                            <label for="first_name">Categery name En</label>
                            <input type="text" class="form-control" value="{{$category['categories_en']['name']}}" name="nameEN" placeholder="Enter Categery Name English">
                            <label class="text-danger"> {{$errors->first("name")}}</label>
                          </div>
</div>
<div class="col-6">
<div  style="width: 300px;"  class="form-group">
<div class="text-right">
                            <label >اسم الفئه </label>
</div>
                            <input type="text" class="form-control text-right" value="{{$category['categories_ar']['name']}}" name="nameAR" placeholder="أدخل اسم الفئة">
                            <label class="text-danger"> {{$errors->first("name")}}</label>
                          </div>
</div>
</div>
                          <div  style="width: 600px;"  class="form-group">
                            <label>Categery image</label>
                            <input type="file" class="form-control"  name="image"  >
                            <label class="text-danger"> {{$errors->first("image")}}</label>
                          </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
<br><br><br><br>

                    </form>
                </div>
            </div>
     
        </div>
    </div>


    @endsection('content')