@extends('users.layout')

@section('content')

<div class="row">
    <div class="col lg-12 margin-tb">
        <div class="pull-left">
            <h2>User details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('users.index')}}">Back</a>
        </div>
    </div>
</div>

<form action="{{route('users.update', $user->id)}}" method="POST">
@csrf
<div class="form-group">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
                <label>Name:</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Enter your name"/>
                <span style="color:red">@error('name'){{$message}}@enderror</span>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

                <label>Email:</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Enter your email id"/>
                <span style="color:red">@error('email'){{$message}}@enderror</span>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

                <label>Phone No:</label>
                <input type="tel" name="phone" value="{{$user->phone}}" class="form-control" id="phone" placeholder="Enter your phone number"/>
                <span style="color:red">@error('phone'){{$message}}@enderror</span>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

                <label>Password:</label>
                <input type="password" name="password" value="{{$user->password}}" class="form-control" id="password" placeholder="Enter your password"/>
                <span style="color:red">@error('password'){{$message}}@enderror</span>

        </div>
    </div>
    </div>
</form>
@endsection