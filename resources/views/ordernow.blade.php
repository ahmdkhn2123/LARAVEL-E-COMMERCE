@extends("master")
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>

    <form action="orderplace" method="POST">
        @csrf
        <div class="form-group">
            <textarea type="text" name="address" placeholder="Enter Your Address" class="form-control"></textarea>
        </div>
        <div class="form-group" style="margin-left: 10px">
            <label for="pwd"><h3>Payment Method</h3></label><br>
            <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br>
            <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br>
            <input type="radio" value="cash" name="payment"> <span>COD Payment</span><br>

        </div>
        <button type="submit" class="btn btn-default">Payment Now</button>
    </form>
        </div>
@endsection
