@extends("master")
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="mb-5">
                    <label><b>Email address</b></label>
                    <input name="email" type="email" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="mb-5">
                    <label><b>Password</b></label>
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="mb-5">
                <button type="submit" class="btn btn-success">login</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
