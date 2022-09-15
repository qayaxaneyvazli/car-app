<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
<div class="card">

<div class="card-header">
<h5 class="card-title">Create Region</h5>
  </div>
<div class="card-body">


<form action="{{route('region.update',['region'=>$region->id])}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group row">

<div class="col-xs-2">
<label for="region">Region:</label><br>
<input class="form-control" type="text" id="region" name="region_name" value="{{$region->name}}"><br>
</div>

<div class="col-xs-2">
<label for="travel_date">Travel date:</label><br>
<input class="form-control" type="date" id="travel_date" name="travel_date" value="{{$region->travel_date}}">
</div>

<div class="col-xs-2">
<br><label for="travel_period">Travel Period:</label><br>
<input class="form-control" type="text" id="travel_period" name="travel_period" value="{{$region->travel_period}}"><br><br>
</div>

  <button class="btn btn-primary" type="submit">Save Region</button>
</form>
</body>
</html>





     