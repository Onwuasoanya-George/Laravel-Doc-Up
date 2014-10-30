<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Doctor's Update</title>

    <!-- Core CSS - Include with every page -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('font-awesome/css/font-awesome.css') }}

    <!-- SB Admin CSS - Include with every page -->
   {{ HTML::style('css/sb-admin.css') }}

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                   <h4 align="center"> <button class="btn btn-primary">  Doctor's News Update Platform</button> </h4>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('url'=>'index')) }}
                        
                            <fieldset>
                                <br />
                                <div class="form-group">
                                   {{ Form::email('email', '', array(

                                   'class' => 'form-control',
                                   'placeholder' => 'E-mail',
                                   'required' => 'required'

                                   ))

                                    }} 
                                </div>
                                <div class="form-group">
                                   {{ Form::password('password', array(

                                   'class' => 'form-control',
                                   'placeholder' => 'Password',
                                   'required' => 'required'

                                   ))

                                    }}  
                                </div>
                                <br />
                                <!-- Change this to a button or input when using this as a form -->
                                {{ Form::submit( 'Login', array(

                                   'class' => 'btn btn-lg btn-success btn-block'
                                  ))

                                    }} 
                               
                                <br />
                            </fieldset>
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
   

</body>

</html>
