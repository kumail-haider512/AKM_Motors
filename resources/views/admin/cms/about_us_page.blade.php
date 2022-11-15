@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Intro Section</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="about_us_image">Image</label>
                    				<input type="file" name="about_us_image" id="about_us_image" class="dropify" data-default-file="{{ asset(setting('about_us_image')) }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                    			</div>
                    		</div>
                    		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="about_us_heading_text">Heading Text</label>
                    				<input type="text" name="about_us_heading_text" id="about_us_heading_text" class="form-control" value="{{ setting('about_us_heading_text') }}" autocomplete="off">
                    			</div>
                                <div class="form-group">
                    				<label for="about_us_text">Text</label>
                    				<textarea name="about_us_text" id="about_us_text" rows="5" class="form-control">{{ setting('about_us_text') }}</textarea>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
