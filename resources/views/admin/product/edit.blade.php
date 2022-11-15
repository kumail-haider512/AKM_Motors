@extends('layouts.admin')
@section('title', 'Edit')
@section('nav-title', 'Edit')
@section('css')
<style>
    .form-control {
    position: inherit !important;
    top: -5px;
}
</style> 
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.product.save', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">edit</i>
                        </div>
                        <h5 class="card-title">Edit Product</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-md-3">
                    			<div class="form-group">
                    				<label for="name">Name</label>
                    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$product->name) }}" autocomplete="off">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror
                    			</div>
                    		</div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price',$product->price) }}" autocomplete="off">
                                    @error('price')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="make_id">Select Make</label>
                                    <select type="text" name="make_id" id="make_id" class="form-control @error('make_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($make as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->make->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="location_id">Select Location</label>
                                    <select type="text" name="location_id" id="location_id" class="form-control @error('location_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($location as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->location->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('location_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="carmodel_id">Select Model</label>
                                    <select type="text" name="carmodel_id" id="carmodel_id" class="form-control @error('carmodel_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($carmodel as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->carmodel->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="engine_id">Select Engine</label>
                                    <select type="text" name="engine_id" id="engine_id" class="form-control @error('engine_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($engine as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->engine->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="interiorcolor_id">Select Interior Color</label>
                                    <select type="text" name="interiorcolor_id" id="interiorcolor_id" class="form-control @error('interiorcolor_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($interior as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->interiorcolor->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                           
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exteriorcolor_id">Select Exterior Color</label>
                                    <select type="text" name="exteriorcolor_id" id="exteriorcolor_id" class="form-control @error('exteriorcolor_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($exterior as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->exteriorcolor->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fuel_id">Select Fuel Type</label>
                                    <select type="text" name="fuel_id" id="fuel_id" class="form-control @error('fuel_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($fuel as $item)
                                        <option value="{{$item->id}}" {{$item->id == $product->fuel->id ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('fuel_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="vin_number">Vin Number</label>
                                    <input type="text" name="vin_number" id="vin_number" class="form-control @error('vin_number') is-invalid @enderror" autocomplete="off" placeholder="Enter Vin Number" required>
                                    @error('vin_number')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="mileage">Mileage</label>
                                    <input type="number" name="mileage" id="mileage" class="form-control @error('mileage') is-invalid @enderror" value="{{ old('mileage',$product->mileage) }}" autocomplete="off" placeholder="Enter Mileage">
                                    @error('mileage')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="transmission">Transmission</label>
                                    <select type="text" name="transmission" id="transmission" class="form-control @error('transmission') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        <option value="Automatic" {{$product->transmission == "Automatic" ? 'selected' : ''}}>Automatic</option>
                                        <option value="Manual" {{$product->transmission == "Manual" ? 'selected' : ''}}>Manual</option>
                                    </select>
                                    @error('transmission')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="equipment">Equipment</label>
                                    <textarea name="equipment" id="equipment" rows="5" class="form-control @error('name') is-invalid @enderror" autocomplete="off">{{ old('equipment',$product->equipment) }}</textarea>
                                    @error('equipment')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="add-car-title">
                                        <label for="photos">Pictures</label>
                                    </div>
                                    <input type="hidden" name="removeimage" id="removeimage">
                                    <div class="has-search item-images mt-4 input-field">
                                        <div class="row main-item-images">
                                            @foreach($product->productimage as $item)
                                            <div class="col-md-3">
                                                <input type="file" name="photos[]"  class="dropify" multiple data-default-file="{{asset($item->image)}}"
                                                       data-allowed-file-extensions="jpeg jpg png">

                                                <span class="remove-image-box btn btn-danger w-100 py-0" data-image="{{$item->id}}" >x</span>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary px-4  add-new-item-image" type="button" title="add new image">+</button>
                            </div>
                    	</div>
                    </div>
                    <div class="card-footer mt-4">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    CKEDITOR.replace('equipment');
    $(document).on('click', '.remove-image-box', function(e) {
        e.preventDefault();
        if (this.hasAttribute('data-image'))
        {
            $('#removeimage').val($('#removeimage').val()+""+$(this).data('image')+",");
        }
        $(this).closest('div').remove();
    });
    $(document).ready(function(){
        

        $('.add-new-item-image').on('click', function(e) {
            e.preventDefault();
            $basket_length = $('.main-item-images input').length;
            if ($basket_length >= 20) {
                $(".add-new-item-image").hide();
                return;
            }
            $('.main-item-images').append('<div class="col-md-3 text-center"><input type="file" name="photos[]" class="dropify" multiple data-default-file="" data-allowed-file-extensions="jpeg jpg png"><span class="remove-image-box btn btn-danger w-100 py-0">x</span></div>');
            $('.dropify').dropify();
        });
        $(document).on('click', '.remove-image-box', function(e) {
            e.preventDefault();
            $(this).closest('div').remove();
        });
    })
</script>
@endsection