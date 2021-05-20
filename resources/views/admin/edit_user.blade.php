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
              <li class="breadcrumb-item active"> {{__('admin.edituser')}}
</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div style="padding-top:10px; padding-left:208px;" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-3">
                <div style="width: 200px;" class="row">
                <form method="POST" action="{{route('users.update',$user)}}" enctype="multipart/form-data">
                @csrf
                     @method("put")                        <div style="width: 600px;" class="form-group">
                            <label for="first_name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required
                            value="{{$user['name']}}">
                            <label class="text-danger"> {{$errors->first("name")}}</label>

                            
                        </div>

                     

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email" required
                            value="{{$user['email']}}"
                            >
                            <label class="text-danger"> {{$errors->first("email")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" 
                            
                          required
                         
                          >
                          <label class="text-danger"> {{$errors->first("password")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="password_confirm">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Password Confirmation" required>
                            <label class="text-danger"> {{$errors->first("password_confirmation")}}</label>

                        </div>

                     
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
     
        </div>
    </div>


    @endsection('content')