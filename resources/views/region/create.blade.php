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
    
<form action="{{route('region.store')}}" method="post">
  @csrf
  <div class="form-group row">

  
    <div class="col-xs-2">
  <label for="region">Region:</label><br>
  <input class="form-control" type="text" id="region" name="name" value=""><br>
    </div>
    @error('name')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

    <div class="col-xs-2">
  <label for="travel_date">Travel date:</label><br>
  <input class="form-control" type="date" id="travel_date" name="travel_date" value="">
  </div>
  @error('travel_date')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="col-xs-2">
  <br><label for="travel_period">Travel Period:</label><br>
  <input class="form-control" type="text" id="travel_period" name="travel_period" value=""><br><br>
  </div>
  @error('travel_period')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <button class="btn btn-primary" type="submit">Create Region</button>
</form>

</div>
</div>
</div>
</div>
</body>
</html>