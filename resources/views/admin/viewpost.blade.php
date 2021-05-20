@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3><span class="fa fa-users"></span>{{__('admin.viewpost')}}</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{__('admin.home')}}</a></li>
          
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div style="padding-top:10px; padding-left:50px ;" class="container-fluid">
            <div class="row">
            
                <div class="col-xs-12 sub">
                    <div class="row">
                        <div class="col-xs-12">
                        
                      
                        </div>
                        <div class="col-xs-12 col-sm-6 ">
                            <div class="form-group p-t-20">
                              
                            </div>
                        </div>
         
                         
                        <table class="table">
                        <tbody>
                        
                            <tr>
                                <th>post title EN:</th>
                                <td>{{$post['posts_en']["title"]}}</td>
                            </tr>
                            <tr>
                                <th>post title AR:</th>
                                <td>{{$post['posts_ar']["title"]}}</td>
                            </tr>
                            <tr>
                                <th>post content EN:</th>
                                <td>{{$post['posts_en']["content"]}}</td>
                            </tr>
                            <tr>
                                <th>post content AR:</th>
                                <td>{{$post['posts_ar']["content"]}}</td>
                            </tr>
                            <tr>
                             <th>post image</th>
                             <td> <img src="../../../../{{ $post['image'] }}" class="rounded-circle" width="60" height="50" /></td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <div class="col-xs-12">
                           
                        </div>
                    </div>
                </div>            
            </div>
        </div>

        @endsection('content')