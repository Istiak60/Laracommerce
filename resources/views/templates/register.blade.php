@extends('layout.master')
@section('title')
Register</title>
@endsection
@section('breadcrumb')
<li>Register</li>
@endsection
@section('content')
    <!--header area start-->
    <!--Offcanvas menu area start-->
   
   
    <!--Offcanvas menu area end-->
    
    
    <!--header area end-->

    <!--breadcrumbs area start-->
   
    <!--breadcrumbs area end-->

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Register now</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique deleniti pariatur enim cumque eum</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">

                                       {!! Form::open(['url' => '/register','method'=>'post','class'=>'single-acc-field boxes']) !!}
                                       
                                       {!! Form::label('name', 'Name*');!!}
                                       {!! Form::text('name','',['id'=>'name','placeholder'=>'Enter your Name']); !!}
                                       
                                     
                                       {!! Form::label('email', 'Email*');!!}
                                       {!! Form::email('email','',['id'=>'email','placeholder'=>'Enter your email']); !!}

                                      
                                       {!! Form::label('password', 'Password*');!!}
                                       {!! Form::password('password',['id'=>'password','placeholder'=>'Enter your email']); !!}

                                      
                                       {!! Form::checkbox('check','',false,['id'=>'checkbox']); !!}
                                       {!! Form::label('checkbox', 'I am not a Robot');!!}
                                       {!!Form::button('Register');!!}


                                       {!! Form::close() !!}
                                
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
    <!--footer area start-->
