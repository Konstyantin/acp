@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('labels.frontend.passwords.reset_password_box_title'))

@section('content')
    <div id="app" class="l-app u-scroll" v-cloak>
        <div class="l-app__center">
            <div class="c-sign">
                @if(session('status'))
                    <alert type="success" :closeable="true">{{session('status')}}</alert>
                @endif

                <div class="c-sign__body">
                    <h1 class="c-sign__title u-fs-24">Reset Password</h1>

                    {{ html()->form('POST', route('frontend.auth.password.reset'))->class('u-mt-30')->open() }}

                    {{ html()->hidden('token', $token) }}

                    <div class="form-group u-mb-30">
                        <div class="form-control has-icon">
                            <i class="icon-envelop3 form-icon"></i>

                            <input type="email" name="email"
                                   class="form-input {{$errors->has('email') ? 'is-danger' : ''}}"
                                   placeholder="Your Email address">
                        </div>

                        @if($errors->has('email'))
                            <span class="form-help u-color-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group u-mb-30">
                        <div class="form-control has-icon">
                            <i class="icon-lock form-icon"></i>

                            <input type="password" name="password"
                                   class="form-input {{$errors->has('password') ? 'is-danger' : ''}}"
                                   placeholder="New password">
                        </div>

                        @if($errors->has('password'))
                            <span class="form-help u-color-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <div class="form-group u-mb-30">
                        <div class="form-control has-icon">
                            <i class="icon-lock form-icon"></i>

                            <input type="password" name="password_confirmation"
                                   class="form-input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}"
                                   placeholder="Password confirmation">
                        </div>

                        @if($errors->has('password_confirmation'))
                            <span class="form-help u-color-danger">{{$errors->first('password_confirmation')}}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn--danger btn--block">Reset Password</button>

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
