
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Tasks')</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body{
                    margin-top:20px;
                }

                .panel {
                margin-bottom: 19px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow:  0 2px 5px 0 rgba(0,0,0,.26);
                box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);
                }

                .text-thin {
                font-weight: 100!important;
                }

                .mt, .mv {
                margin-top: 10px!important;
                }

                .h2, h2 {
                font-size: 27px;
                }

                .m0 {
                margin: 0!important;
                }

                .list-inline>li {
                display: inline-block;
                padding-left: 5px;
                padding-right: 5px;
                }
                .p0 {
                padding: 0!important;
                }
                .thumb24 {
                width: 24px!important;
                height: 24px!important;
                line-height: 24px!important;
                }

                .bg-primary a {
                color: #c5cae9;
                }
                .v-middle, [slider], slider {
                vertical-align: middle;
                }

        </style>
        @livewireStyles
