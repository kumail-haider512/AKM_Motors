@extends('layouts.master')

@section('css')
<style>
	ul {
    list-style-type: disc;
}
#section3
{
    padding-top: 70px !important;
}
</style>
@endsection

@section('content')
<div class="tour-title not-fixed shortcodes" style="background-color: #1a467b;">
    <!-- <img class="w-100 h-100" src="assets/images/shortcodes.jpg" alt="image"> -->
    <div class="center-text">
        <h1 class="white text-center front shadow-text">{{$item->name}}</h1>   
        <!-- <h3 class="white shadow-text text-center ">Images with Columns</h3> -->
    </div>
    <!-- <img class="curve2 front" src="assets/svgs/curve.svg" alt="image"> -->
</div>
<section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
    <div class="container">
        <div class="row">
            <div class="col-md-6 single-tour">
                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($item->productimage as $key => $images)
                            <div class="carousel-item  @if($loop->first) active @endif" data-slide-number="{{ $key }}">
                                <img class="d-block img-fluid" src="{{asset($images->image)}}">
                            </div>
                        @endforeach    
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row mx-0">
                                @foreach($item->productimage as $key => $images)
                                    <div id="carousel-selector-{{ $key }}" class="thumb col-4 col-sm-3 px-1 py-2 @if($loop->first) selected @endif" data-target="#myCarousel" data-slide-to="{{ $key }}">
                                        <img src="{{ asset($images->image) }}" class="img-fluid img-thumbnail" style="height:80px;width: 90%;" alt="...">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-info">
                <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Overview About {{$item->name}}</h6>
                <div class="pb-2">                      
            
                   <ul class="single-tour-container">
                        <li>
                            <div class="tour-item-title list-font">Price:</div>
                            <div class="tour-item-description list-font">{{$item->price}} $</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Make:</div>
                            <div class="tour-item-description list-font">{{$item->make->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Location:</div>
                            <div class="tour-item-description list-font">{{$item->location->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Model: </div>
                            <div class="tour-item-description list-font">{{$item->carmodel->name}}</div>
                        </li>
                        
                        <li>
                            <div class="tour-item-title list-font">Engine: </div>
                            <div class="tour-item-description list-font">{{$item->engine->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Exterior:  </div>
                            <div class="tour-item-description list-font">{{$item->exteriorcolor->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Interior: </div>
                            <div class="tour-item-description list-font">{{$item->interiorcolor->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Fuel Type: </div>
                            <div class="tour-item-description list-font">{{$item->fuel->name}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">VIN Number: </div>
                            <div class="tour-item-description list-font">{{$item->vin_number}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Mileage </div>
                            <div class="tour-item-description list-font">{{$item->mileage}}</div>
                        </li>
                        <li>
                            <div class="tour-item-title list-font">Transmission: </div>
                            <div class="tour-item-description list-font">{{$item->transmission}}</div>
                        </li>
                    </ul>                        
                </div>
            </div>
            <div class="container mb-3">
            	<div class="row">
            	<div class="mr-lg-5">    
                    <div class="tour-schedule">
                        <h2 class="black bold mt-5 mb-3">Description</h2>
                        <div >
                        	<ul>
                                {!!$item->equipment!!}
                        	</ul>
                        </div>

                    </div>    
                </div>
            </div> 	
            </div>
                
        </div>
    </div>
</section>
@endsection