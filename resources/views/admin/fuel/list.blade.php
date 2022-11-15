@extends('layouts.admin')
@section('title', 'Fuel Type')
@section('nav-title', 'Fuel Type')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Fuel Type List</h5>
                </div>
                <div class="card-body">
                	<div class="row">
			            <div class="col-md-12">
			                <div class="toolbar text-right">
			                	<a class="btn btn-success add-btn">+ Add Fuel Type</a>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{$item->id}}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                	<td>{{$item->name}}</td>
                                    <td>
                                        <a href="" rel="tooltip" data-id="{{$item->id}}" class="btn btn-success btn-round edit-btn" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.fuel.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
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

<div class="modal fade" id="add-model" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Fuel Type</h5>
            </div>
            <div class="modal-body">
                <form class="validate-form" action="{{ route('admin.fuel.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="render">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).on('click','.add-btn',function(){
        $.ajax({
            type: "GET",
            url: "{{route('admin.fuel.load')}}",
            success: function(response) {
                $(".render").html(response);
                $(".render").find('.form-group').removeAttr('class','bmd-form-group');
                $('.modal-title').text('Add Fuel Type');
                $('#add-model').modal('show');
            }
        });
    })
    $(document).on('click','.edit-btn',function(e){
        e.preventDefault();
        var id=$(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "{{route('admin.fuel.load')}}",
            data: {
                id: id
            },
            success: function(response) {
                $(".render").html(response);
                $(".render").find('.form-group').removeAttr('class','bmd-form-group');
                $('.modal-title').text('Edit Fuel Type');
                $('#add-model').modal('show');
            }
        });
    })
    $(document).on('click','.close',function(){
        $('#add-model').modal('hide');
    })
</script>
@endsection