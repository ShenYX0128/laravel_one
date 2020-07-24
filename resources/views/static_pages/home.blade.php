@extends('layout/default')
@section('title','微博首页')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user' => Auth::user()])
                </section>
            </aside>
        </div>
        @else
        <a class="btn btn-lg btn-success" role="button" href="{{ route('signup') }}">注册</a>
    @endif

@stop

