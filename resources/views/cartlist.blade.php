@extends('master');
@section('content');
    <div class="custom-product">
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Results For product</h4>
                <a class="btn btn-success" href="ordernow">Order Now</a>
                @foreach($products as $data)
                    <div class="row searched-item cart-list-divider">
                        <div class="col-sm-4">
                            <a href="detail/{{$data->id}}">
                                <img class="trending-image" src="{{$data->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="detail/{{$data->id}}">
                                <div class="">
                                    <h2>{{$data->name}}</h2>
                                    <h5>{{$data->description}}</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="delete/{{$data->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


        </div>




@endsection
