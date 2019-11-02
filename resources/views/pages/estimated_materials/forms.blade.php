<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="InputCategoryname">Material Name</label>
            <input type="text" name="name" class="form-control" id="InputCategoryname" placeholder="Enter brand name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="InputType">Material</label>
            <select class="form-control" name="type">
                @foreach($materials as $val)
                <option
                    {{ old('type', optional( isset($material) ? $material : null )->type) === $val ? 'selected' : '' }}>
                    {{ $val }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Brand Name</label>
            <input type="text" name="name" class="form-control" id="InputCategoryname" placeholder="Enter brand name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Brand Name</label>
            <input type="text" name="name" class="form-control" id="InputCategoryname" placeholder="Enter brand name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Brand Name</label>
            <input type="text" name="name" class="form-control" id="InputCategoryname" placeholder="Enter brand name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="InputCategoryname">Brand Name</label>
            <input type="text" name="name" class="form-control" id="InputCategoryname" placeholder="Enter brand name" value="{{ old('name', optional( isset($brand) ? $brand : null )->name) }}">
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
