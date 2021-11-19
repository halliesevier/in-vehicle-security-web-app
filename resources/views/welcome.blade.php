@extends('layouts.layouts')

@section('content')
<style>
    .column {
        float: left;
    }

    .left,
    .right {
        width: 25%;
        margin-top: 100px;
    }

    .middle {
        width: 50%;
    }

    .mssg {
        color: green;
        font-size: large;
    }
</style>
<div class="content">

    <h1>Welcome to In-Vehicle Security Testbed Portal</h1>
    <p class="mssg">{{session('mssg')}}</p>
    <div class="row">
        <div class="column left">
            <img src="/img/tntechlogo.png" class="tntech" width="200" height="200">
        </div>
        <div class="column middle">
            <img src="/img/XiveNet.png" class="tntech" height="400">
        </div>
        <div class="column right">
            <img src="/img/nsalogo.png" class="nsa" width="200" height="200">
        </div>
    </div>
</div>
@endsection