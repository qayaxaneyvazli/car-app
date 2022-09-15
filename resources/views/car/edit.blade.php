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
<h5 class="card-title">Edit Car</h5>
  </div>
    
  <div class="card-body">
<form action="{{route('car.update',['car'=>$car->id])}}" method="POST">
  @csrf
  @method('PUT')
  <div class="col-xs-2">
  <label for="model">Model:</label><br>
  <input class="form-control" type="text" id="model" name="model" value="{{$car->model}}"><br>
  </div>

  <div class="col-xs-2">
  <label for="release_date">Release date:</label><br>
  <input  class="form-control" type="date" id="release_date" name="release_date" value="{{$car->release_date}}">
  </div>

  <div class="col-xs-2">
  <br><label for="color">Color:</label><br>
  <input class="form-control" type="text" id="color" name="color" value="{{$car->color}}">
  </div>

  <div class="col-xs-2">
  <br><label for="registration_number">Registration number:</label><br>
  <input class="form-control" type="number" id="registration_number" name="registration_number" value="{{$car->registration_number}}">
  </div>
  <br>
  <button class="btn btn-primary" type="submit">Save Car</button>
</form>


</div>
</div>
</div>
</div>

</body>
</html>