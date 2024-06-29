<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>COBUDDY - Beranda</title>
  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">
</head>
@extends('layouts.app')
@section('admin')
<body>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Slider</h4>
                        <form method="post" action="{{ route('home.slide', $homeslider->id ?? '') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" class="form-control" type="text" value="{{ $homeslider->title ?? '' }}" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input name="image" class="form-control" type="text" value="{{ $homeslider->image ?? '' }}" id="image">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input name="deskripsi" class="form-control" type="text" value="{{ $homeslider->description ?? '' }}" id="deskripsi">
                            </div>
                            <div class="mb-3">
                                <label for="showImage" class="form-label">Preview Image</label><br>
                                <img id="showImage" class="rounded avatar-lg" src="{{ isset($homeslider->image) ? url('upload/home_slide/'.$homeslider->image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update Slider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var imgSrc = e.target.value.trim();
            $('#showImage').attr('src', imgSrc ? imgSrc : '{{ url("upload/no_image.jpg") }}');
        });
    });
</script>
@endsection

</body>
</body>
</html>


