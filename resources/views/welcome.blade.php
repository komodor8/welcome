@extends('layouts.header')

@section('content')
<div class="image-wrap">
    <img class="bg-w100-max-height" src="/images/bg-pencils.jpg">
    <span class="text-white centered-text">DEVELOPPEUR WEB FULL STACK</span>
</div>
    
@endsection

@extends('layouts.footer')

<style type="text/css">
    .image-wrap {
        position: absolute;
        top:76;
        left:0;
        text-align: center;
        color: white;
    }
    .bg-w100-max-height {
        width:100%;
    }
    .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        text-shadow: -1.5px 0 black, 0 1.5px black, 1.5px 0 black, 0 -1.5px black;
    }
</style>