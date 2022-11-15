@extends('layouts.admin')
@section('title', 'Product')
@section('nav-title', 'Product')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Product List</h5>
                </div>
                <div class="card-body">
                	<div class="row">
			            <div class="col-md-12">
			                <div class="toolbar text-right">
			                	<a class="btn btn-success " href="{{ route('admin.product.add') }}">+ Add Product</a>
			                </div>
			            </div>
                	</div>
                	<div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Make</th>
                                    <th>Location</th>
                                    <th>Model</th>
                                    <th>Engine</th>
                                    <th>Interior Color</th>
                                    <th>Exterior Color</th>
                                    <th>Fuel Type</th>
                                    <th>Vin Number</th>
                                    <th>Mileage</th>
                                    <th>Transmission</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Equipment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{$loop->iteration}}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->make->name}}</td>
                                    <td>{{$item->location->name}}</td>
                                    <td>{{$item->carmodel->name}}</td>
                                    <td>{{$item->engine->name}}</td>
                                    <td>{{$item->interiorcolor->name}}</td>
                                    <td>{{$item->exteriorcolor->name}}</td>
                                    <td>{{$item->fuel->name}}</td>
                                    <td>{{$item->vin_number}}</td>
                                    <td>{{$item->mileage}}</td>
                                    <td>{{$item->transmission}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>
                                        @foreach($item->productimage as $image)
                                            <a href="{{ asset($image->image) ?? '' }}" target="_blank"><img src="{{ asset($image->image) ?? '' }}" height="40px" width="40px"></a>
                                        @endforeach
                                    </td>
                                    <td>{!! Str::limit($item->equipment,200)!!}</td>
                                    <td>
                                		<a href="{{ route('admin.product.edit', $item->id) }}" rel="tooltip" data-id="{{$item->id}}" class="btn btn-success btn-round edit" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.product.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach		
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection