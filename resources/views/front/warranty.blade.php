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
    padding-top: 130px !important;
    padding-bottom:  115px !important;
}
.red{
    color: red;
}
.btn-primary{
    background-color: red !important;
}
</style>
@endsection

@section('content')

<div class="tour-title not-fixed shortcodes" style="background-color: #1a467b;">
    <!-- <img class="w-100 h-100" src="assets/images/shortcodes.jpg" alt="image"> -->
    <div class="center-text">
        <h1 class="white text-center front shadow-text">Warranty</h1>   
        <!-- <h3 class="white shadow-text text-center ">Images with Columns</h3> -->
    </div>
    <!-- <img class="curve2 front" src="assets/svgs/curve.svg" alt="image"> -->
</div>
<section id="section3">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <img src="{{asset('images/Warranty4.jpg')}}" class="img-fluid  w-100 mr-0 " alt="">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('images/Warranty3.jpg')}}" class="img-fluid  w-100 mr-0 " alt="">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-left " style="background-color: #f1f1f4;">
                <h3 class="black bold front mb-2 mt-2 ">Have peace of mind with the FREE</h3>
                <h3 class="red bold front mb-2 mt-2 ">AKM Motors Limited Powertrain Warranty</h3>
                <div class="separator "></div>     
                <!-- <h5 class="primary-color section-title mb-3">Turbino is not just another Travel Agency</h5> -->
                <p class=" text-block  ">Purchasing a used vehicle can be disconcerting for many. For others, purchasing a used vehicle with a branded title is a first-time & unfamiliar experience. At AKM Motors, we want our customers to purchase with peace of mind. We believe in what we do here & have spent more than 15 years perfecting our process, that includes an experienced team of nationwide buyers who put every car purchased through a 151-point inspection.</p>
                <p class=" text-block bold  ">We are proud to offer a FREE 3-month / 3,000 mile limited warranty on your vehicle purchase. When you purchase from AKM Motors, you can drive away knowing we’ve got your back.</p>
                <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">View All Inventory</button>    
                <p></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8 text-left " style="background-color: #f1f1f4;">
                <h3 class="black bold front mb-2 mt-2 ">Duration</h3>
                <div class="separator "></div>     
                <h5 class="primary-color section-title mb-3"><p>This is a complimentary limited powertrain warranty for a period of 3 months from the date of the original sale or 3,000 miles from the mileage at the time of the original sale, whichever occurs first, for repairs which are required as a result of defects due to material and/or workmanship to the powertrain components as listed below:</p>
                <p></p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/Warranty1.jpg')}}" class="img-fluid  w-100 mr-0 " alt="">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12" style="background-color: #f1f1f4;">
                <h3 class="black bold front mb-2 mt-2 ">What's Covered?</h3>
                <div class="separator "></div>     
                <h5 class="primary-color section-title mb-3">Engine:</h5>
                <p class=" text-block  ">All internally lubricated parts including: pistons, piston rings, piston pins, crankshaft and main bearings, connecting rods and bearings, camshaft and bearings, timing chain or belt, timing gears, intake and exhaust valves, valve springs, valve guides, oil pump, push rods, rocker arms, rocker arm shafts, hydraulic and solid lifters. The engine block and heads are also covered if damage is caused by a failure of any of the above covered</p>
                <h5 class="primary-color section-title mb-3">Transmission:</h5>
                <p class=" text-block  ">All internal parts, torque converter, vacuum modulator, and mounts. The case is covered if damage is caused by a failure of any of the above covered items. Does not include clutch assembly, pressure plate, flywheel, throw out bearing, worn synchronizers, cables, or electrical items./p>
                <h5 class="primary-color section-title mb-3">Drive Axle:</h5>
                <p class=" text-block  ">
                All lubricated internal parts contained within the housings. Axle shafts, differential housing, transaxle housing, and final drive housing.</p>
                <h5 class="primary-color section-title mb-3">Transfer Unit:</h5>
                <p class=" text-block  ">
                4×4 internal parts including: bearings, bushings, sprockets, chains, sleeves, and gears. The transfer case is also covered if damage is caused by a failure of any of the above covered components. Excludes electrical items.</p>
                <h5 class="primary-color section-title mb-3">Seals & Gaskets:</h5>
                <p class=" text-block  ">Seals and gaskets are replaced only as part of repair or replacement of the above covered components. Leaking gaskets or seals are not covered.</p>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color: #f1f1f4;">
                <h3 class="black bold front mb-2 mt-2 ">The Fine Print</h3>
                <div class="separator "></div>     
                <p class=" text-block  ">All the above items are not covered for damage due to accident, misuse, alteration, insufficient or improper maintenance, contaminated or poor-quality fuel. In the event the warranty is applicable, the dealer is not responsible for any incidental or consequential damages caused by or resulting from the defect, malfunction or failure. Dealer is not responsible to provide alternate transportation prior to or during applicable warranty repairs being performed.</p>
                <h5 class="primary-color section-title mb-3">Deductible:</h5>
                <p class=" text-block  ">
                A $100 deductible paid by the consumer is required for each claim filed.
                </p>
                <h5 class="primary-color section-title mb-3">Duties of Warrantor:</h5>
                <p class=" text-block  ">
                Upon inspection of the vehicle, if it is determined that the warranty is applicable, the dealer will repair the vehicle. At the dealer’s discretion, repairs may be performed utilizing new, remanufactured or recycled components.
                </p>
                <h5 class="primary-color section-title mb-3">Duties of Consumer:</h5>
                <p class=" text-block  ">In the event of a defect, malfunction or failure that occurs during the warranty period, the consumer must return the vehicle to the selling dealer only and authorize an inspection by the dealer to determine applicability of the warranty. If the warranty is applicable the consumer must give the dealer a reasonable amount of time to perform the necessary repairs. If the warranty is not applicable, then the consumer will remove the vehicle from the dealership within a reasonable amount of time.
                </p>
                <h5 class="primary-color section-title mb-3">Non-Transferability:</h5>
                <p class=" text-block  ">
                This warranty is limited to the original purchaser of the vehicle only and is not transferable to subsequent purchasers.
                </p>
                <h5 class="primary-color section-title mb-3">No Consequential Damages:</h5>
                <p class=" text-block  ">
                In no event shall the dealer be liable for any incidental or consequential damages including, but not limited to, loss related to property other than the vehicle, loss of use, loss of time, inconvenience, or any other economic loss.
                </p>
                <h5 class="primary-color section-title mb-3">Additional Info:</h5>
                <p class=" text-block  ">
                Additional information regarding this warranty can be obtained by contacting our Customer Service Team at <a href="">823 209 6909</a>
                </p>
                <p></p>
            </div>
        </div>
    </div>
</section>
@endsection