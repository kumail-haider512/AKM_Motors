@if(count($list)>0)
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
@else
<div class="col-md-12 text-center" style="margin: auto;">
    <h5>No records were found right now!</h5>
</div>
@endif