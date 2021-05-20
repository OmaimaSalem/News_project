@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Feedback</li>
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
                        <div class="col-xs-12 col-sm-6">
                           
                        </div>

                      
                        <div class="col-xs-12">
                            <table class="table table-responsive table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>post Id</th>
                                        <th>comments</th>
                                        
                                    
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{$feedback['id']}}</td>
                                        <td>{{$feedback['name']}}</td>
                                        <td>{{$feedback['email']}}</td>
                                        <td>{{$feedback['post_id']}}</td>
                                        <td>{{$feedback['comments']}}</td>
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