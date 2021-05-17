@extends('users.layout')

@section('content')

<div class="row">
    <div class="col lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new users</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('users.index')}}">Back</a>
        </div>
    </div>
</div>

<form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data"> 
@csrf
                    
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"/>
                            <span style="color:red">@error('name'){{$message}}@enderror</span>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email id"/>
                            <span style="color:red">@error('email'){{$message}}@enderror</span>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                            <label>Phone No:</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number"/>
                            <span style="color:red">@error('phone'){{$message}}@enderror</span>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password"/>
                            <span style="color:red">@error('password'){{$message}}@enderror</span>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                            <span style="color:red">@error('image'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group col-md-12" align="center">
                            <button class="btn btn-success">SUBMIT</biutton>
                        </div>
                    </div>
                    </div>
</form>
@endsection