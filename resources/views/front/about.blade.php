@extends('layouts.master')

@section('css')
<style>
	.ul {
    list-style-type: disc;
}
.service{
    padding: 45px;
}
.col-sm-12{
    max-width: 27%;
}
.my{
    margin-top: -4.5rem !important;
}
.videohome2 {
    background-color: #F2F3F9;
    background-image: url(../images/schservice.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
}
#sectionvideo{
    height: 490px !important;
}
#section3{
    padding-top: 19px !important;
}


</style>
@endsection

@section('content')
<div class="tour-title not-fixed shortcodes" style="background-color: #1a467b;">
    <!-- <img class="w-100 h-100" src="assets/images/shortcodes.jpg" alt="image"> -->
    <div class="center-text">
        <h1 class="white text-center front shadow-text">About Us</h1>   
        <!-- <h3 class="white shadow-text text-center ">Images with Columns</h3> -->
    </div>
    <!-- <img class="curve2 front" src="assets/svgs/curve.svg" alt="image"> -->
</div>

<section id="section3" >
    <div class="container">
        <div class="row">
            <div class="col-md-8  ">   
                <div class="tour-schedule">
                    <h2 class="black bold mt-5 mb-3">Dealership in Houston, TX</h2>
                    <p>Very few competitors can match the selection of pre-owned high-line vehicles offered at AKM Motors. From our Houston location, we can serve a wide area, including San Antonio, Austin, Beaumont, Lake Charles and the surrounding area. While local business is a big part of what we do, AKM Motors has a reach that extends well beyond this area, reaching throughout the country. Our high volume of business means we can offer excellent cars at excellent prices.
                    </p>
                    <p>
                    AKM Motors draws our inventory from new dealerships that received high-quality trade-ins. We then take these cars, inspect them and then add them to our inventory. The result of this process is our impressive inventory of pre-owned high-line vehicles. We offer cars from many of the top luxury and performance brands, including Mercedes-Benz. The cars we offer deliver impressive performance capabilities paired with excellent comfort and luxury features.
                    </p>
                    <p>
                    Once you take home one of our high-line models, AKM Motors can help you take care of it. We offer a service center that can take top care of your luxury car. Our service team specializes in the highline models we sell. We can take care of your car with a practiced hand.
                    </p>
                    <p>
                    Here on the AKM Motors website, you can learn more about everything we have to offer. View our new and used inventories, schedule a test drive or service appointment and find out how to get in touch with one of our team members. We look forward to helping you get behind the wheel of a capable luxury car.</p>                   
                     <a class="btn col-sm-12 my btn-primary" href="{{route('inventory')}}">View All Inventory</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="more-info mx-auto my-4">
                    <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                    <div class="pb-2">                      
                        <a href="tel:823 209 6909"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>823 209 6909</h5></a>  
                        <a href="mailto:akmmotorz@gmail.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>akmmotorz@gmail.com</h5></a>                        
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</section>
@endsection