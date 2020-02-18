@extends('layouts.app')
@section('title')

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/admin') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
            <div class="flexslider" id="flexslider-basic">
                @foreach($data as $key =>$value)
                <ul class="slides">

                        <li>
                            <img src="{{asset('uploads/'.$value->image)}}" alt=""/>
                        </li>
                </ul>
                @endforeach

            </div>

    </div>

</div>
<script src="{{asset('js/jquery.easing.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
</body>
</html>
{{--<div class="content">--}}

{{--</div>--}}




