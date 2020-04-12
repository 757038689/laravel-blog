@extends('layouts.default')
@section('title', '主页')

@section('content')
    <div class="jumbotron">
        <h1>你好，今天是:{{date('Y-m-d')}}</h1>
        <p class="lead">
            你现在所看到的是 Boegoby个人微博 主页。
        </p>
        <p>
            精彩，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="#" role="button">现在注册</a>
        </p>
    </div>
@stop
