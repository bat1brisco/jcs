@extends('layouts.app') 
@section('title', 'Page Title')

@section('content')
@component('components.add')
@slot('title') Estimated Materials @endslot
@slot('icon') shopping-basket @endslot
@slot('btn_title') Create Project @endslot
@slot('btn_icon') plus @endslot
@slot('btn_link') {{ route("estimated-materials.create") }} @endslot
@slot('btn_icon2') fas fa-search @endslot
@endcomponent
<div class="card shadow borderless">
    <div class="card-header bg-white borderless">
        <div class="row">
            <div class="col-md-4 offset-md-8">
                <form action="#" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control borderless" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
            <table class="table borderless">
                <thead>
                    <tr>
                        <th scope="col">
                            <form action="#" method="POST">
                                @csrf
                                <input type="hidden" id="inputIds" name="ids" value="">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                            </form>
                        </th>
                        <th scope="col">ID</th>
                        <th scope="col">Material</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($estimated_materials as $material)
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input checkboxInput" id="customCheck"
                                        name="check_box[]" value="1">
                                    <label class="custom-control-label" for="customCheck"></label>
                                </div>
                            </td>
                            <td scope="row">{{ $material->id}}</td>
                            <td scope="row" class="slug-width">Material Name</td>
                            <td>{{ $material->price_estimation }}</td>
                            <td>{{ $material->quantity }}</td>
                            {{-- <td><span class="badge badge-pill badge-secondary">{{ $material->price_estimation}}</span></td> --}}

                        </tr>
                    @endforeach         

                </tbody>
            </table>
            {{-- {{ $products->links('sbadmin.common.pagination') }} --}}
    </div>
</div>
@endsection