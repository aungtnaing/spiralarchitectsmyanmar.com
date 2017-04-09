@extends('layouts.default')
@section('content')
     <section class="body-bg">
        <div class="second-page-container">
            <div class="block">
                <div class="container">
                    <div class="header-for-light">
                        <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Login</span> or <span>Register</span></h1>
                    </div>
                    <div class="row">
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                <h3><i class="fa fa-unlock"></i>Login</h3>
                                <p>Please login using your existing account</p>
                                <!-- <form action="#" method="post"> -->
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('/auth/login') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <input type="text" class="form-control" placeholder="Username"> -->
                                            <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <!-- <input type="text" class="form-control" placplaceholder="Username" eholder="Password"> -->
                                            <input type="password" class="form-control" placeholder="password" name="password">
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                            <hr>
                                            <input type="submit"  value="Login"  class="btn-default-1">
                                            <!-- <input type="reset" value="Reset password" class="btn-default-1"> -->
                                            <!-- <button type="submit" class="btn btn-primary">Login</button> -->

                                            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <h3><i class="fa fa-pencil"></i>Create new account</h3>
                                <p>Registration allows you to admain.</p>
                                <hr>
                                <a href="{{ url('/auth/register') }}" class="btn-default-1">Register</a>
                            </div>
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <h3><i class="fa fa-bookmark-o"></i>Checkout as Guest</h3>
                                <p>Checkout as a guest instead!</p>
                                <hr>
                                <a href="/" class="btn-default-1">As Guest</a>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div> 
    </section>






@stop

