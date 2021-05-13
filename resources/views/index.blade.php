<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="form-group col-12 p-0">
                <div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                </div>

                <form action="{{route('store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h2 style="text-align:center; color:blue">Registration form</h2>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"/>
                            <span style="color:red">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email id"/>
                            <span style="color:red">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone No:</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number"/>
                            <span style="color:red">@error('phone'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password"/>
                            <span style="color:red">@error('password'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group col-md-12" align="center">
                            <button class="btn btn-success">SUBMIT</biutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>