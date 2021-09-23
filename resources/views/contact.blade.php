@extends('layout/master')

@section('title','contact-me')
 
@section('content')
    <div class="container">
        this is text from me
    </div>
    
@endsection

@section('sidebar')
    this is second sidebar
    @parent
    {{--  3shan ytb3 el sidebar ely fel parent el hwa master brdo --}}
@endsection