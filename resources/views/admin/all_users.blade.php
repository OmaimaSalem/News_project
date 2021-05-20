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
              <li class="breadcrumb-item active"> {{__('admin.user')}}
</li>
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
                            <h3><span class="fa fa-users"></span>  {{__('admin.user')}}
 <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span> <a style="text-decoration: none ; color: white;" href="{{route('users.create')}}"> {{__('admin.adduser')}}
</a></button></h3>
                            
                        </div>
                   
                        <div class="col-xs-12 col-sm-6">
                           
                        </div>
                        <div class="col-xs-12">
                        <table class="table table-bordered table-striped bg-dark" style="color:white; border:none">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Name</th>
                                        
                                        <th>email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="color:black; font:blod; background:#ffff">
                                    <tr>
                                      @foreach($users as $user)
                                        <!-- <td>1</td> -->
                                        <td> {{$user["name"]}}</td>
                                        
                                        <td> {{$user["email"]}}</td>
                                       
                                        <td>
                                    
                  
                                            <a class="text-success m-l-5" href="{{route('users.show',$user)}}"><span class="fa fa-eye"></span></a>
                                            <a href="{{route('users.edit',$user)}}"><span class="fa fa-edit"></span></a>
                                            <form action="{{route('users.destroy',$user)}}" method="Post" style="display:inline-block;">
                      @csrf
                      @method("delete")
                      <button type="submit" value="Delete"
                              class="fa fa-trash"></button> 
                              <!-- <a ><input type="submit" class="fa fa-trash-alt"><span class="fa fa-trash-alt"></span></a> -->
</form>
                                        </td>
</tr>
                                        @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="container">  
                       
                        </div> 
                        </div>
                    </div>
                </div>            
            </div>
        </div>

        @endsection('content')