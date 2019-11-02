@extends('layouts.app') 
@section('title', 'Page Title')

@section('content')
{{-- @component('components.add')
@slot('title') Estimated Materials @endslot
@slot('icon') shopping-basket @endslot
@slot('btn_title') Add Product @endslot
@slot('btn_icon') plus @endslot
@slot('btn_link') {{ route("estimated_materials/create"); }} @endslot
@slot('btn_icon2') fas fa-search @endslot
@endcomponent --}}
    <div class="card-body">
        <form action="{{ route('materials.store') }}" method="POST">
            @csrf
            @include('pages.materials.forms')
        </form>
        {{-- @if (isset($categories->media->first->filename['filename'] ))
            <img src="{{ $categories->media->first->filename['filename'] }}" style="width:100%; height:100%" alt="">
        @endif --}}
    </div>
{{-- <h1 onclick="<script>alert('I love you so much!')</script>" >Hello! I love you therese!</h1> --}}
@endsection