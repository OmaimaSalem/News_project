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
              <li class="breadcrumb-item active"> {{__('admin.category')}}
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div style="padding-top:10px; padding-left:100px ;" class="container-fluid">
            <div class="row">
            
                <div class="col-xs-12 sub">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3><span class="fa fa-users"></span>  {{__('admin.category')}}
 <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span><a style="text-decoration: none ; color: white;" href="{{route('categories.create')}}"> {{__('admin.addcat')}}
</a></button></h3>
        
                        </div>
                        <div  class="col-xs-12 col-sm-6 ">
                            <div class="form-group p-t-20">
                                <select class="form-control">
                                    <option selected disabled>Amount</option>
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" >
                        <table style="width: 900px;" class="table table-bordered table-striped bg-dark" style="color:white; border:none">
                                <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>categery name </th>
                                        <th class="text-right">اسم الفئه</th>
                                        <th>Image</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody style="color:black; font:blod; background:#ffff">
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category["id"]}}</td>
                                        <td>{{$category["categories_en"]["name"]}}</td> 
                                        <td class="text-right">{{$category["categories_ar"]["name"]}}</td>
                                        <td>
                                    
                                    <img src="{{ asset($category['image']) }}" class="rounded-circle" width="60" height="50" /></td>
                                    </td>
                                        <td>
                                            <a href="{{route('categories.edit',$category)}}"><span class="fa fa-edit"></span></a>
                                            <a class="text-success m-l-5" href="{{route('categories.show',$category)}}"><span class="fa fa-eye"></span></a>
                                            <form action="{{route('categories.destroy',$category)}}" method="Post" enctype="multipart/form-data" style="display:inline-block;">
                      @csrf
                      @method("delete")
                     
                      <button type="submit"  value="Delete"
                      class="fa fa-trash"
                              > </button>
                             
                       </form>
                                        </td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            <div class="container">  
                       
                        </div> 
                        </div>
                        <div class="col-xs-12">
                           
                        </div>
                    </div>
                </div>            
            </div>
        </div>

        @endsection('content')