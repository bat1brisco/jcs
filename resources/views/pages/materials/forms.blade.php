<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputCategoryname">Material Name</label>
                    <input type="text" name="name" class="form-control" id="InputCategoryname" required placeholder="Material Name" value="{{ old('name', optional( isset($material) ? $material : null )->name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputType">Size</label>
                    <select class="form-control" name="size">
                            <option selected> Select Size </option>
                        @foreach($size as $val)
                        <option
                            {{ old('size', optional( isset($material) ? $material : null )->size) === $val ? 'selected' : '' }} >
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
                        <option {{ old('size', optional( isset($material) ? $material : null )->price_type) === $val ? 'selected' : '' }} > {{ $val }}</option>
                        @endforeach


                        {{-- <option value="Per Kilo">Per Weight</option>
                        <option value="Per Lewngth">Per Length</option>
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
                            <option {{ old('size', optional( isset($material) ? $material : null )->unit_type) === $val ? 'selected' : '' }} >{{ $val }}</option>
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
            <input type="text" name="price" class="form-control" id="InputCategoryname" required placeholder="eg. 200.00" value="{{ old('price', optional( isset($material) ? $material : null )->price) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Length</label>
            <input type="text" name="length" class="form-control" id="InputCategoryname" placeholder="eg. 24.00" value="{{ old('length', optional( isset($material) ? $material : null )->length) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Width</label>
            <input type="text" name="width" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('width', optional( isset($material) ? $material : null )->width) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Height</label>
            <input type="text" name="height" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('height', optional( isset($material) ? $material : null )->height) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Weight</label>
            <input type="text" name="weight" class="form-control" id="InputCategoryname" placeholder="eg. 24.00"  value="{{ old('weight', optional( isset($material) ? $material : null )->weight) }}">
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
