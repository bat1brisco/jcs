@extends('layouts.app') 
@section('title', 'Page Title')

@section('content')
@component('components.add')
@slot('title') Materials @endslot
@slot('icon') shopping-basket @endslot
@slot('btn_title') Add Product @endslot
@slot('btn_icon') plus @endslot
@slot('btn_link') {{ "#" }} @endslot
@slot('btn_icon2') fas fa-search @endslot
@endcomponent

<h1>Hello</h1>
@endsection