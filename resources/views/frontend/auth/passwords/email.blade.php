@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('labels.frontend.passwords.reset_password_box_title'))

@section('content')
    <div class="l-app__center">
        <div class="c-sign">
            @if(session('status'))
                <alert type="success" :closeable="true">{{session('status')}}</alert>
            @endif
            
            <div class="c-sign__body">
                <h1 class="c-sign__title u-fs-24">Forgot Your Password ?</h1>

                <p class="c-sign__text">Input your registered email to reset your password</p>

                {{ html()->form('POST', route('frontend.auth.password.email.post'))->class('u-mt-30')->open() }}

                <div class="form-group u-mb-30">
                    <div class="form-control has-icon">
                        <i class="icon-envelop3 form-icon"></i>

                        <input type="email" class="form-input {{$errors->has('email') ? 'is-danger' : ''}}"
                               placeholder="Your Email address" name="email">

                    </div>

                    @if($errors->has('email'))
                        <span class="form-help u-color-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn--danger btn--block">Send Reset Link</button>

                {{ html()->form()->close() }}
            </div>
        </div>
    </div>
@endsection
