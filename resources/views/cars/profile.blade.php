@extends('layout')
@section('content')
@foreach($product as $myproduct)
    <!DOCTYPE html>
<html>
<head>
    <title> my profile </title>

    <style>
        .basi:hover{
            color: #000000;
        }
        .bas:hover{
            color: #000000;
        }
        .basi {
            font-size: 25px;
            color: orange;
            margin-left: 20px;
        }
        .bas{
            font-size: 25px;
            color: orange;
            margin-left: 400px;
        }
    </style>
</head>
<body>
<div style="border: 2px solid white;width: 600px;height: 530px;margin: auto;margin-top: 20px ">
    <img src="photo/{{$myproduct->photo}}"width="600"height="300">
    <p style="margin-top: 10px;font-size: 25px;text-align: center">{{$myproduct->model}}</p>
    <p style="text-align: center ;font-size: 25px">used from {{$myproduct->years}} years</p>
    <p style="font-size: 25px;text-align: center">{{$myproduct->description}}</p>
    <p style="font-size: 25px;text-align: center"><span style="color: orange">price:</span> {{$myproduct->price}}$</p>
    <a href="edit/{{$myproduct->id}}"class="basi"title="clik here to update this car">update</a>
    <a href="profile/{{$myproduct->id}}"class="bas"title="clik here to delete this car">Delete</a>
</div>
</body>
</html>
    @endforeach
@endsection
