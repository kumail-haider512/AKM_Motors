@extends('layouts.master')

@section('css')
<style>
	.bg
	{
		color: #fff !important;

		margin-top: 60px !important;
		margin-bottom:  60px !important;
	}
	.bg img{
		border-radius:5px;
	    height:100%;
	    width:100%;
	    object-fit: cover;
	}
	.bg h2{
    	font-weight: 700;
    	color: #15467e ;
    	font-size: 50px;
	}
</style>
@endsection

@section('content')
<section id="sectioncarousel">
    <div id="carouselExampleIndicators" class="carousel carousel-home2  slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner " role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{asset('images/banner (3).jpg')}}" alt="First slide">
                <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                    <div class="toggleCaption">
                        <h1 class="white shadow-text  align-middle"></h1>
                    </div>
                    <div class="toggleButton">
                        <h4 class="white shadow-text align-middle" ></h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/banner (4).jpg')}}" alt="Second slide">
                <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                    <div class="toggleCaption">
                        <h1 class="white shadow-text  align-middle" ></h1>
                    </div>
                    <div class="toggleButton">
                        <h4 class="white shadow-text align-middle" ></h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/banner (1).jpg')}}" alt="Third slide">
                <div class="carousel-caption justify-content-center  mb-lg-4 mb-0 align-items-center text-center">
                    <div class="toggleCaption">
                        <h1 class="white shadow-text align-middle"  ></h1>
                    </div>
                    <div class="toggleButton">
                        <h4 class="white shadow-text align-middle"  ></h4>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>              
</section>
<section id="section3">
    <div class="container formhome2 text-center justify-content-center align-items-center pb-4">
        <h4 class="black mx-2 mb-3 mt-0 pt-4 text-center bold  d-block">Find the best Car for you</h4>  
        <form class="form-inline text-center justify-content-center align-items-center pb-0">
            <input type="text" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2" id="inlineFormInputName1" placeholder="Search Car"> 
            <span class="fas fa-search iconform"></span>

            <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search</button>

        </form>
    </div>
</section>
<section id=" " class="bg">
    <div class="container">					
		<div class="row">
			<div class="col-md-3 travel-left">
                <div class="single-travel media mb-4">
                    <a href="{{route('inventory')}}"><img class="img-fluid justify-content-center align-items-center mr-sm-3 " src="{{asset('images/cta_inventory_n.png')}}" alt=""></a>
                </div>				
                <div>
                    <h2 class="text-center">Inventory</h2>
                	
                </div>										
			</div>
			<div class="col-md-3 travel-right">
				<div class="single-travel media mb-4">
                    <a href=""><img class="img-fluid d-flex  mr-3" src="{{asset('images/cta-get-approved_n.png')}}" alt=""></a>
                    
				</div>	
				<div>
                    <h2 class="text-center">Finance</h2>
                	
                </div>							
            </div>
            <div class="col-md-3 travel-right">
				<div class="single-travel media mb-4">
                    <a href="{{route('about')}}"><img class="img-fluid d-flex  mr-3" src="{{asset('images/cta-service_n.png')}}" alt=""></a>
                    
				</div>	
				<div>
                    <h2 class="text-center">Service</h2>
                	
                </div>							
            </div>
            <div class="col-md-3 travel-right">
				<div class="single-travel media mb-4">
                    <a href=""><img class="img-fluid d-flex  mr-3" src="{{asset('images/cta-trade-in_n.png')}}" alt=""></a>
                    
				</div>	
				<div>
                    <h2 class="text-center">Trade</h2>
                	
                </div>							
            </div>
            
		</div>
	</div>	
</section>
<section id="section4">
    <div class="container">					
		<div class="row">
			@foreach($brand as $brands)
			<div class="col-md-3 travel-left">
                <div class="single-travel media mb-4">
                    <img class="img-fluid justify-content-center align-items-center mr-sm-3 " src="{{asset($brands->image)}}" alt="">
                    
                </div>														
			</div>
			@endforeach
		</div>
	</div>	
</section>
<section id="section5">
    <div class="container testimonials">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-10 offset-1">
                <h3 class="text-center  mb-4 black"><strong>Experts Reviews</strong></h3>
                <img class="svgcenter quotesicon" src="{{asset('svgs/quotes.svg')}}" alt="image">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner mt-0">
                    <div class="carousel-item text-center active">                        
                        <h5 class="m-0 pt-3 px-4  black">We have been in the market long enough to see the tour industry change, We are convinced this is a company that have been up to the standards</h5>
                        <h6 class="mt-4 mb-0"><strong class="primary-color">Paul Mitchel</strong></h6>
                        <p class=" m-0 subheading black">Turbino CEO</p>
                    </div>
                    <div class="carousel-item text-center">                        
                        <h5 class="m-0 pt-3 black">We're delighted that many come back to travel on our escorted historical tours and small group cruises again and again. </h5>
                        <h6 class="mt-4 mb-0"><strong class="primary-color">Ryan Sherlock </strong></h6>
                        <p class=" m-0 subheading black">Turbino Travel Agent</p>
                    </div>
                    <div class="carousel-item text-center">                        
                        <h5 class="m-0 pt-3 black">All in all, it was the trip of my dreams and I would happily use your services again in the future! I loved every minute of our trip and can't wait to plan another in the future. Please extend my thanks to Yolande as well.
                            </h5>
                        <h6 class="mt-4 mb-0"><strong class="primary-color">Monica</strong></h6>
                        <p class=" m-0 subheading black">Client</p>
                    </div>
                </div>
                <ol class="carousel-indicators mt-5">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="action-color"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="action-color"></li>
                </ol>
                </div>
            </div>            
        </div>
    </div>
</section>
<div id="sectionvideo" class="videohome2 container img-fluid w-100 text-center justify-content-center align-items-center">
            
    <div class="row ">

        <div class="col-md-12  ">
            <div class="block-transform  py-5 px-4">
                <h4 class="black mx-2  text-center d-block">About Us</h4>  
                <p class="black text-block px-sm-5 text-justify px-3">Motors is a family-owned dealership that provides car shoppers in the Houston area with an impressive selection of pre-owned high-line vehicles to choose from. Our inventory is stocked with models from Mercedes-Benz and many other luxury and performance brands. Our large volume of business ensures we can offer our customers the best prices. ABZ Motors only buys the best cars, and carefully inspects them once they arrive. This ensures we only offer our customers the best vehicles.</p>
            </div>
        </div>

    </div>

</div>

@endsection