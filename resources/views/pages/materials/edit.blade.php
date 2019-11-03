@extends('layouts.app') 
@section('title', 'Page Title')

@section('content')

    <div class="card-body">
        <form action="{{ route('materials.update', $material->id) }}" method="POST">
            @csrf
            @method("PATCH")
            @include('pages.materials.forms')
        </form>
        {{-- @if (isset($categories->media->first->filename['filename'] ))
            <img src="{{ $categories->media->first->filename['filename'] }}" style="width:100%; height:100%" alt="">
        @endif --}}
    </div>
{{-- <h1 onclick="<script>alert('I love you so much!')</script>" >Hello! I love you therese!</h1> --}}
@endsection