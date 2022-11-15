<input type="hidden" name="id" value="{{$req->id}}">
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $make->name ?? '' }}" autocomplete="off">
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="dropify" data-default-file="{{ asset($make->image) ?? '' }}" accept=".png, .jpg, .jpeg, .gif, .svg">
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>
</div>