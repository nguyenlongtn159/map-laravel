@extends('layouts.default')
@section('title', '404')

@section('content')
    <style type="text/css">

        body{
            overflow: hidden;
        }
        .right-select{
            visibility: hidden;
        }
    </style>
<div class="error"><img src="{{ URL::asset('/public/images/404_moon.png') }}" align="center" />
  <h1>Oopss!</h1>
<h3>{!! Tran('check-in-wrong-place') !!}</h3>
    <br />
    <button class="button" onclick="goBack()">{!! Tran('go-back') !!}</button>
</div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
