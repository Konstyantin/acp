@extends('frontend.layouts.app')

@section('title', app_name() . ' | Not Found')

@section('content')
    <div class="l-app__center">
        <div class="c-message">
            <div class="c-message__media">
                <h1 class="u-fs-128">404</h1>
            </div>

            <p class="c-message__title">OOPS!</p>

            <p class="c-message__content">
                Sorry! The page you are looking for doesn't exist.
            </p>

            <a href="{{URL::previous()}}" class="btn btn--lg btn--smart btn--primary">Go Back!</a>
        </div>
    </div>
@endsection
