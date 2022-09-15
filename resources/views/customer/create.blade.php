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
<h5 class="card-title">Create Customer</h5>
  </div>
<div class="card-body">

 
<form action="{{route('customer.store')}}" method="POST">
  @csrf
  <div class="form-group row">
     
  <div class="col-xs-2">
  <label for="inputsm">Name:</label><br>
  <input class="form-control" type="text" id="name" name="name" value=""><br>
  </div>
  @error('name')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  
  <div class="col-xs-2">
  <label for="surname">Surname:</label><br>
  <input class="form-control" type="text" id="surname" name="surname" value="">
  </div> 
  @error('surname')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror


  <div class="col-xs-2">
  <br><label for="birth">Date of birth:</label><br>
  <input  class="form-control" type="date" id="birth" name="date_of_birth" value="">
  </div> 
  @error('date_of_birth')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <br> <label for="sex">Sex:</label><br>
  <input class="form-control" type="text" id="sex" name="sex" value="">

  @error('sex')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <br><label for="phone">Phone:</label><br>
  <input  class="form-control" type="text" id="phone" name="phone" value="">
   
  @error('phone')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <br><label for="car">Car:</label><br>
  <select required class="form-control" id="car" name="cars[]" multiple="">
  <option value="" disabled selected>Nothing selected</option>
  @foreach($cars as $car)
  <option value="{{$car->id}}">{{$car->model}}</option>
  @endforeach
</select>
@error('cars')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror


  <br><label for="traveled_regions">Traveled Regions:</label><br>
  <select  required class="form-control" id="traveled_regions" name="traveled_regions[]" multiple="">
  <option value="" disabled selected>Nothing selected</option>
  @foreach($regions as $region)
      <option value="{{$region->id}}">{{$region->name}}</option>
  @endforeach
  </select>
  @error('traveled_regions')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>

 <br><br><button class="btn btn-primary"type="submit"> Create Customer </submit>


</form>

</div>
</div>
</div>
</div>
</body>
</html>