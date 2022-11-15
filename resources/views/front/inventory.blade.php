@extends('layouts.master')

@section('css')
<style>
    .sort{
        max-width: 100% !important;
        border: 1px solid !important;
        border-radius: 0px !important;
    }
    .mb {
        margin-bottom: -1.5rem!important;
    }
    .render
    {
        width: 100%;
        display: flex;
    }
</style>
@endsection
@section('content')

<div class="tour-title not-fixed shortcodes" style="background-color: #1a467b;">
    <!-- <img class="w-100 h-100" src="assets/images/shortcodes.jpg" alt="image"> -->
    <div class="center-text">
        <h1 class="white text-center front shadow-text">Inventory</h1>   
        <!-- <h3 class="white shadow-text text-center ">Images with Columns</h3> -->
    </div>
    <!-- <img class="curve2 front" src="assets/svgs/curve.svg" alt="image"> -->
</div>
<section id="section3">
    <div class="container formhome2 text-center justify-content-center align-items-center pb-4">
        <h4 class="black mx-2 mb-3 mt-0 pt-4 text-center bold  d-block">Find the best Car for</h4>  
        <form class="form-inline text-center justify-content-center align-items-center pb-0">
            <input type="text" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2" id="inlineFormInputName1" placeholder="Search Car"> 
            <span class="fas fa-search iconform"></span>

            <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search</button>

        </form>
    </div>
</section>
<section id="section3 " class="mt-5">
    <div class="container sort formhome2  justify-content-center align-items-center pb-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <h4 class="black mx-2 mb-3 mt-0 pt-4  bold  d-block">{{count($list)}} Cars are list for Sale</h4>
            </div>
            <div class="col-md-2">
                <select class="form-control sort form-control-inline2 mb mr-lg-2 mx-md-0 mx-4 py-2 sorting_2">
                    <option selected disabled value="">Price (low to high)</option>
                    <option value="small">Lowest Price</option>
                    <option value="large">Largest Price</option>
                    <option value="latest">Latest Post</option>
                    <option value="oldest">Oldest Post</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control sort form-control-inline2 mb mr-lg-2 mx-md-0 mx-4 py-2 sorting_2">
                    <option selected disabled value="">Mileage (low to high)</option>
                    <option value="small">0k-1k</option>
                    <option value="large">1k-2k</option>
                    <option value="latest">2k-3k</option>
                    <option value="oldest">3k-4k</option>
                </select>
            </div>
        </div>
          
    </div>
</section>

<section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3  ">
                <div class="form-container py-3">
                    <h4 class="black bold mt-3 px-4 pb-2 text-center">Refine Result</h4>
                    <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4">  
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Make</option>
                                        @foreach($makes as $item)
                                        <option value="{{$item->id}}" data-name="make">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Location</option>
                                        @foreach($locations as $item)
                                        <option value="{{$item->id}}" data-name="location">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Model</option>
                                        @foreach($models as $item)
                                        <option value="{{$item->id}}" data-name="model">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Exterior Color</option>
                                        @foreach($exteriors as $item)
                                        <option value="{{$item->id}}" data-name="exterior">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Interior Color</option>
                                        @foreach($interiors as $item)
                                        <option value="{{$item->id}}" data-name="interior">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Engine</option>
                                        @foreach($engines as $item)
                                        <option value="{{$item->id}}" data-name="engine">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Fuel Type</option>
                                        @foreach($fuels as $item)
                                        <option value="{{$item->id}}" data-name="fuel">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                        {{--<div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Body Type</option>
                                        @foreach($bodys as $item)
                                        <option value="{{$item->id}}" data-name="body">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>--}}
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control sorting" id="inlineFormInputName1">
                                        <option selected disabled value="">Transmission</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                                        <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>                                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row render">
                    @foreach($list as $item)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <a class="img-card" href="{{route('detail',$item->id)}}">
                                <div class="bottom-tour-background"></div>                         
                                <img src="{{asset($item->productimage->first()->image)}}" alt="" />
                            </a>
                            <div class="card-content"> 
                                <div class="row align-items-center">  
                                    <div class="col-7">                         
                                        <h6 class="black mb-2"><a href="{{route('detail',$item->id)}}" target="_blank">{{$item->name}}</a></h6>
                                    </div>  
                                    <div class="col-5 align-middle">                         
                                        <h6 class="primary-color text-right ">${{$item->price}}</h6>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary px-3 ml-3 mr-1 my-1 btn-sm float-left" href="{{route('detail',$item->id)}}" role="button">Detail</a>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>  
        </div>
    </div>
</section>

@endsection
@section('js')
    <script>
        $(document).on('change','.sorting',function(e){
            e.preventDefault();
            var id=$(this).val();
            var sort=$(this).find('option:selected').attr('data-name');
            let url='{{ route('searchSort')}}';
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id,
                    sort: sort
                },
                success: function(response) {
                    console.log(response.html);
                    $('.render').val('');
                    $('.render').html(response.html);
                },
            });
        })
        $(document).on('change','.sorting_2',function(e){
            e.preventDefault();
            var sort=$(this).val();
            let url='{{ route('productSort')}}';
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    sort: sort
                },
                success: function(response) {
                    console.log(response.html);
                    $('.render').val('');
                    $('.render').html(response.html);
                },
            });
        })
    </script>
@endsection