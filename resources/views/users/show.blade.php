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
        <div class="col-xs-6 col-sm-6 col-md-6" align="center">Name:
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">{{$user->name}}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6" align="center">Email:
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">{{$user->email}}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6" align="center">Phone No:
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">{{$user->phone}}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6" align="center">Password:
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">{{$user->password}}
        </div>
        <img src="{{ Storage::url($user->image) }}" height="200" width="200" alt="" />
    </div>
    </div>
</form>
@endsection