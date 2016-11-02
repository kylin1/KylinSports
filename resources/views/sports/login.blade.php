@extends('sports.log-common')

@section('title','login')

@section('content')

    <div class="content">

        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">email</i>
            </span>
            <input type="text" class="form-control" placeholder="账户">
        </div>

        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">lock_outline</i>
            </span>
            <input type="password" placeholder="密码" class="form-control" />
        </div>
    </div>

@stop