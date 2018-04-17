<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Cover">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'ACP')">
    <meta name="author" content="@yield('meta_author', 'Oleksiy Petlyuk')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{style(asset('coverui/css/cover.css'))}}
    {{style(asset('coverui/css/icomoon.css'))}}
    <link rel="apple-touch-icon" href="{{asset('coverui/images/app-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('coverui/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('coverui/images/favicon.ico')}}" type="image/x-icon" />

    @stack('after-styles')

    <script src="{{asset('coverui/vendor/vue/vue.min.js')}}"></script>
    <script src="{{asset('coverui/cover.js')}}"></script>
</head>

<body>
    <div id="app" class="l-app" v-cloak>
        @yield('content')
    </div>

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')

    <script>
      new Vue({
        el: '#app'
      })
    </script>
</body>
</html>
