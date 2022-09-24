@extends('master');
@section('content');
<div class="custom-product">
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3 style="text-decoration: line-through">My Orders</h3>
            @foreach($order as $data)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-4">
                        <a href="detail/{{$data->id}}">
                            <img class="trending-image" src="{{$data->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$data->id}}">
                            <div class="">
                                <h2>Name : {{$data->name}}</h2>
                                <h5>Delivery Status : {{$data->status}}</h5>
                                <h5>Address : {{$data->address}}</h5>
                                <h5>Payment Status : {{$data->payment_status}}</h5>
                                <h5>Payment Method : {{$data->payment_method}}</h5>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>


</div>




@endsection
