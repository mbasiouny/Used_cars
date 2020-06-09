<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Edit this car</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <link id="ie-style" href="{{asset('backend/css/ie.css')}}" rel="stylesheet">
   <![endif]-->
<!--[if IE 9]>
   <link id="ie9style" href="{{asset('backend/css/ie9.css')}}" rel="stylesheet">
   <![endif]-->
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{URL::to('backend/img/favicon.ico')}}">
    <!-- end: Favicon -->
    <style type="text/css">
        body { background: white }
    </style>
</head>
<body>
<div class="container-fluid-full">
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="index.html"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Edit this car</h2>
                <form class="form-horizontal" action="/edit/{{$product->id}}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{csrf_field()}}
                    <fieldset>
                        <div class="input-prepend" title="Car model">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="model" value="{{$product->model}}"  value="{{Request::old('model')}}"  type="text" placeholder="type car model"/>
                        </div>
                        <div class="input-prepend" title="Used for">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10"  value="{{$product->years}}" name="years"value="{{Request::old('years')}}" type="text" placeholder="type used for how many years"/>
                        </div>
                        <div class="input-prepend" title="Price">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" value="{{$product->price}}"name="price" value="{{Request::old('price')}}" type="text" placeholder="type price"/>
                        </div>
                        <div class="input-prepend" title="Description">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" value="{{$product->description}}" name="description" value="{{Request::old('description')}}" type="text" placeholder="type Description"/>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input-prepend" title="Photo">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" value="{{$product->photo}}" name="photo"  type="file" placeholder="photo"/>
                        </div>
                        <div  class="button-login">
                            <button  type="submit" class="btn btn-primary">Edit Now</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>


            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.fluid-container-->
</div><!--/fluid-row-->
<!-- start: JavaScript-->
<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
<script src="{{asset('backend/js/modernizr.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
<script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
<script src="{{asset('backend/js/excanvas.js')}}"></script>
<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
<!-- end: JavaScript-->
</body>
</html>
