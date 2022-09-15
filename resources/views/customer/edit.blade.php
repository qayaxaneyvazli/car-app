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
<h5 class="card-title">Edit Customer</h5>
  </div>
<div class="card-body">
<form action="{{route('customer.update',['customer'=>$customer->id])}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
  <label for="name">Name:</label><br>
  <input class="form-control" type="text" id="name" name="name" value="{{$customer->name}}"><br>
  </div>

  <div class="form-group">
  <label for="surname">Surname:</label><br>
  <input class="form-control" type="text" id="surname" name="surname" value="{{$customer->surname}}">
  </div>

  <div class="form-group">
  <br><label for="birth">Date of birth:</label><br>
  <input class="form-control" type="date" id="birth" name="date_of_birth" value="{{$customer->date_of_birth}}">
  </div>

  <div class="form-group">
  <br> <label for="sex">Sex:</label><br>
  <input class="form-control" type="text" id="sex" name="sex" value="{{$customer->sex}}">
  </div>

  <div class="form-group">
  <br><label for="phone">Phone:</label><br>
  <input class="form-control" type="text" id="phone" name="phone" value="{{$customer->phone}}">
  </div>


  @foreach($customer->cars as $ccar)
  @endforeach

  <div class="form-group">
  <br><label for="car">Car:</label><br>
  <select multiple class="form-control" id="car" name="cars[]">
  @foreach($cars as $car)
  
  <option value="{{$car->id}}" {{$car->id==$ccar->id ? 'selected' : ''}} >{{$car->model}}</option>

@endforeach
</select>
</div>

@foreach($customer->regions as $cregion)
@endforeach
<div class="form-group">
  <br><label for="traveled_regions">Traveled Regions:</label><br>
  <select multiple class="form-control" id="traveled_regions" name="traveled_regions[]">

  @foreach($regions as $region)
 
  <option value="{{$region->id}}" {{$region->id==$cregion->id ? 'selected' : ''}} >{{$region->name}}</option>

@endforeach
 
</select>
</div>

 <br><br><button class="btn btn-primary " type="submit"> Save Customer </submit>
</form>

</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>