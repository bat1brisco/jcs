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
                            <th scope="col">Name</th>
                            <th scope="col">Price Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Length</th>
                            <th scope="col">Width</th>
                            <th scope="col">Height</th>
                            <th scope="col">Weight</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $material)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkboxInput" id="customCheck"
                                            name="check_box[]" value="1">
                                        <label class="custom-control-label" for="customCheck"></label>
                                    </div>
                                </td>
                                <td scope="row">{{ $material->id}}</td>
                                <td scope="row" class="slug-width">{{ $material->name }}</td>

                                <td><span class="badge badge-pill badge-secondary">{{ $material->price_type}}</span></td>
                                <td>{{ $material->price }}</td>
                                <td>{{ $material->length ? $material->length : "None" }}</td>
                                <td>{{ $material->width ? $material->width : "None"  }}</td>
                                <td>{{ $material->height ? $material->height : "None"  }}</td>
                                <td>{{ $material->weight ? $material->weight : "None"  }}</td>
                            </tr>
                        @endforeach         

                    </tbody>
                </table>
                {{-- {{ $products->links('sbadmin.common.pagination') }} --}}
        </div>
    </div>
    @endsection