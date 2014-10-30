@extends('layout.main')  
         
@section('content')
        <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-12">
                   <br />
                    @if($condition == "good")
                    <div class="alert alert-success alert-dismissable">
                        
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  {{ $message }}
                                {{--  <a href="#" class="alert-link">Alert Link</a>. --}}
                    </div>

                     
                         
                    @elseif($condition == "bad")
                    <br />
                    <div class="alert alert-danger alert-dismissable">
                     
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ $message }}
                                {{--  <a href="#" class="alert-link">Alert Link</a>. --}}
                            </div>
                    @else


                    @endif
                </div>
                <div class="col-lg-12">
                    <h1 class="page-header">Update </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill in the update's details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                 {{ Form::open(array('url'=>'forms', 'files' => true)) }}   
                                        
                                        <div class="form-group">
                                            <label>Update Title</label>
                                            {{ Form::text('title','', array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Enter title',
                                                'required' => 'required'
                                            )) }}

                                       {{--  <input class="form-control" placeholder="Enter title" required> --}}    
                                        </div>
                                        <div class="form-group">
                                            <label>Your email</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Picture input</label>
                                            {{ Form::file('picture', array('accept' => 'image/*' )) }}
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            {{ Form::textarea('details','', array(
                                                'class' => 'form-control',
                                                'required' => 'required'
                                            )) }}
                                           
                                        </div>
                                       
                                       {{ Form::submit('Submit', array('class'=>'btn btn-default')) }}
                                       {{ Form::reset('Reset', array('class'=>'btn btn-default')) }}
                                        
                                      {{ Form::close()}}
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop
