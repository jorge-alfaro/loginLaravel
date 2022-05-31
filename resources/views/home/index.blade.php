@extends('layouts.app-master')

@section('content')
    <h1 class="text-center">Home</h1>
    @auth
    <p >Welcome <b>{{auth()->user()->name ?? auth()->user()->username}}</b>, you are authenticated in the page</p>

    <img src="{{url('assets/images/signal.jpg')}}" alt="si">
    @endauth
    @guest
    <p class="text-center">For see the content  <a href="/login">log in</a></p>
    @endguest

@endsection

