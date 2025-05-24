 
@extends('layouts.app')
@section('content')
    <h1>Welcome to the Home Page</h1>   

 @isset($name)
    <h1>Hello, {{ $name }}</h1>   
 @endisset  

 @endsection