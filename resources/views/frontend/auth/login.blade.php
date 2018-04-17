@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('labels.frontend.auth.login_box_title'))

@section('content')
    <div class="l-app__center">
        <div class="c-sign">
            <div class="c-sign__body">
                <h1 class="c-sign__title">ACP</h1>

                <p class="c-sign__text">Sign in with your Administrator Account</p>

                {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}

                <div class="form-group">
                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email')->class('form-label') }}

                    {{ html()->email('email')
                    ->class(['form-input', 'is-danger' => $errors->has('email')])
                    ->attribute('maxlength', 191) }}

                    @if($errors->has('email'))
                        <span class="form-help u-color-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password')->class('form-label') }}

                    {{ html()->password('password')
                    ->class(['form-input', 'is-danger' => $errors->has('password')]) }}

                    @if($errors->has('password'))
                        <span class="form-help u-color-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>

                <div class="form-group u-clearfix">
                    <label class="form-checkbox u-floatLeft">
                        <input type="checkbox" checked="checked" name="remember" value="1">

                        <span class="form-checkbox__indicator"></span>

                        <span class="form-checkbox__text">Remember me ?</span>
                    </label>

                    <a href="{{ route('frontend.auth.password.reset') }}" class="u-floatRight">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn--primary btn--block">Sign in</button>

                {{ html()->form()->close() }}
            </div>
        </div>
    </div>
@endsection
