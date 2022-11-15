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
    max-width: 24%;
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
        <h1 class="white text-center front shadow-text">Our Services</h1>   
        <!-- <h3 class="white shadow-text text-center ">Images with Columns</h3> -->
    </div>
    <!-- <img class="curve2 front" src="assets/svgs/curve.svg" alt="image"> -->
</div>

<section id="section3" >
    <div class="container">
        <div class="row">
            <div class="col-md-8  ">   
                <div class="tour-schedule">
                    <h2 class="black bold mt-5 mb-3">Services</h2>
                    <p>Servicing your vehicle is important in order to ensure that your car stays in top condition. ABZ Motors offers an extensive and capable service department that luxury car owners in the Houston area can take advantage of. Our highly trained team of professionals specializes in the highline, luxury and performance cars we sell. Our team is ready to help make sure your car never lets you down.</p>
                    <h6>Come to us for</h6>
                    <div class="service" >
                        <ul class="ul">
                            <li>Lube, Oil & Filter Change</li>
                            <li>Front End Alignment</li>
                            <li>Maintenance (Wipers, Headlights, Etc)</li>  
                            <li>Replace / Adjust Brakes</li>  
                            <li>Service Package</li>
                            <li>Transmission Flush</li>
                            <li>Tire Rotatio</li>
                            <li>Filter Replacement</li>
                            <li>Tire Balance</li>
                            <li><b>Much More!</b></li>
                        </ul>
                    </div>
                    <button type="submit" class="btn col-sm-12 my btn-primary">Schedule Service</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="more-info mx-auto my-4">
                    <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                    <div class="pb-2">                      
                        <a href="823 209 6909"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>823 209 6909</h5></a>  
                        <a href="mailto:akmmotorz@gmail.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>akmmotorz@gmail.com</h5></a>                        
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</section>
<div id="sectionvideo" class=" container-fluid img-fluid w-100 ">
            
    <div class="row ">
        <div class="col-md-4 videohome2"></div>
        <div class="col-md-8  ">
            <div class="block-transform  py-5 px-4">
                <h4 class="black mx-2  text-left d-block">Schedule your car service</h4>  
                <p class="black text-block  text-justify ">Motors is a family-owned dealership that provides car shoppers in the Houston area with an impressive selection of pre-owned high-line vehicles to choose from. Our inventory is stocked with models from Mercedes-Benz and many other luxury and performance brands. Our large volume of business ensures we can offer our customers the best prices. ABZ Motors only buys the best cars, and carefully inspects them once they arrive. This ensures we only offer our customers the best vehicles.</p>
                    <button type="submit" class="btn btn-primary">Schedule Service</button>

            </div>
        </div>

    </div>

</div>
@endsection