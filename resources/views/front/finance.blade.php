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
.color{
    color: white !important;
}
.btn-secondary:hover{
    background-color: #fff !important;
}
.red{
    color: #d00000 !important;
}
.form-control{
    border: 0.5px solid !important;
}
.form-control:focus{
    border: 1px solid !important;
}
</style>
@endsection

@section('content')

<div class="tour-title not-fixed shortcodes" style="background-color: #1a467b;">
    <div class="center-text">
        <h1 class="white text-center front shadow-text">Finance</h1> 
    </div>  
</div>
<section id="section3">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-left " style="background-color: #f1f1f4;">
                <h3 class="black bold front mb-2 mt-2 ">Get Financed</h3>
                <div class="separator "></div> 
                <p class=" text-block  ">AKM Motors has helped more people get financing on their salvage or branded vehicle purchase than any other dealership in the country. With an impeccable track record of over 60,000 vehicle transactions, AutoSavvy has established contractual business-to-business relationships with several of the nation’s largest lending institutions to provide full financing options for our valued customers.
                </p>
                <p>Getting preferred financing for your branded title vehicle or rebuilt title vehicle from AutoSavvy has never been easier or more affordable. Click on any of our simple tools above and start the process for getting the car of your dreams at a price you can afford!
                </p>
                <a  class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3 cal-btn color" >Payment Calculator</a>      
                <p></p>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="calculator">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1a467b;">
                <h4 class="modal-title color" id="staticBackdropLabel">Calculator</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Vehicle Price $</label>
                    <input type="number" name="price" class="form-control price">
                </div>
                <div class="form-group">
                    <label>Months</label>
                    <select class="form-control mon">
                        <option class="selected disabled ">Select Months</option>
                        <option value="6">6 Months</option>
                        <option value="12">12 Months</option>
                        <option value="24">24 Months</option>
                        <option value="36">36 Months</option>
                        <option value="72">72 Months</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vehicle Instalment per month $</label>
                    <input type="number" name="emi" disabled="disabled" class="form-control emi">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close red" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).on('click','.cal-btn',function(){
        $('#calculator').modal('show');
    })
    $(document).on('click','.close',function(){
        $('#calculator').modal('hide');
    })
    $(document).on('change','.mon', function(){
        var price = $('.price').val();    
        var mon = $('.mon').val(); 
        $('.emi').val(price / mon);
        
    })
</script>


@endsection