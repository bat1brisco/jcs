<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputCategoryname">Material Name</label>
                    <input type="text" name="name" class="form-control" id="InputCategoryname" required placeholder="Material Name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputType">Size</label>
                    <select class="form-control" name="size">
                            <option selected value="0"> Select Size </option>
                        @foreach($size as $val)
                        <option
                            {{ old('type', optional( isset($material) ? $material : null )->type) === $val ? 'selected' : '' }}>
                            {{ $val }}</option>
                            
                        @endforeach        
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputType">Pricing Type</label>
                    <select class="form-control" name="price_type" required>
                        {{-- @foreach($materials as $val)
                        <option
                            {{ old('type', optional( isset($material) ? $material : null )->type) === $val ? 'selected' : '' }}>
                            {{ $val }}</option>
                        @endforeach --}}
                        <option selected> Select Pricing Type  </option>
                        @foreach($price_type as $val)
                        <option value="{{ $val }}">{{ $val }}</option>
                        @endforeach


                        {{-- <option value="Per Kilo">Per Weight</option>
                        <option value="Per Length">Per Length</option>
                        <option value="Per Dozen">Per Dozen</option>
                        <option value="Each">Each</option> --}}

                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputType">Unit Type</label>
                    <select class="form-control" name="unit_type" required>
                        <option selected> Select Unit Type  </option>
                        @foreach($unit_type as $val)
                            <option value="{{ $val }}">{{ $val }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-6">
        <div class="form-group">
            
        </div>
    </div> --}}
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Price</label>
            <input type="text" name="price" class="form-control" id="InputCategoryname" required placeholder="eg. 200.00" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Length</label>
            <input type="text" name="length" class="form-control" id="InputCategoryname" placeholder="eg. 24.00" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Width</label>
            <input type="text" name="width" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Height</label>
            <input type="text" name="height" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Weight</label>
            <input type="text" name="weight" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
