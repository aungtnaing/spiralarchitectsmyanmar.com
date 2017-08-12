@extends('layouts.default')
@section('content')

    <section class="body-bg">
        <div class="second-page-container">
            <div class="block">
                <div class="container">
                    <div class="header-for-light">
                        <h1 class="wow fadeInRight animated" data-wow-duration="1s">Create new <span>Account</span></h1>
                    </div>
                    <div class="row">
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                <h3><i class="fa fa-user"></i>Personal Information</h3>

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
                                <hr>
                                <form class="form-horizontal" role="form" method="POST" action="{{ route("profiles.store") }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                    <div class="form-group">
                                        <label for="inputFirstName" class="col-sm-3 control-label">Name:<span class="text-error">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label">E-Mail:<span class="text-error">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-3 control-label">Phone:<span class="text-error">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="ph1" value="{{ old('phone') }}" placeholder="Enter Your phone" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-sm-3 control-label">Address:</label>
                                        <div class="col-sm-9">
                                             <textarea name="address" placeholder="Enter your address" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <h3><i class="fa fa-lock"></i>Password</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:<span class="text-error">*</span></label>
                                        <div class="col-md-9">
                                            <input id="password1" type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm Password:<span class="text-error">*</span></label>
                                        <div class="col-md-9">
                                            <input id="password2" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">  I'v read and agreed on <a href="#">Condations</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn-default-1">Register</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </article>
                     
                    </div>
                </div>
            </div>
        </div> 
    </section>

   

@stop
