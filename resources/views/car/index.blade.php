<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<div class="container text-center">
  
<h1>Cars</h1>
<br>
<a  href="{{route('car.create')}}"><button class="btn btn-primary">Add new Car</button></a>
<a href="{{route('customer.index')}}"><button class="btn btn-primary">Back</button></a>

<hr>
<table class="table table-striped" style="width:100%">
  <thead>
  <tr class="text-uppercase">
    <th class="align-middle">Model</th>
    <th class="align-middle">Release Date</th>
    <th class="align-middle">Color</th>
    <th class="align-middle">Registration number</th>
    <th class="align-middle">Operations</th>
  </tr>
</thead>
  @foreach($cars as $car)
  <tr>
    <td>{{$car->model}}</td>
    <td>{{$car->release_date}}</td>
    <td>{{$car->color}}</td>
    <td>{{$car->registration_number}}</td>
    <td>
        <button class="btn btn-warning btn-sm"><a href="{{route('car.edit',[$car->id])}}">Edit</a></button><br>
        <form method="POST" action="{{route('car.destroy',[$car->id])}}">
          @csrf
          @method('DELETE')
          <button class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
      </form>
    </td>
  </tr>
 @endforeach
 

</table>

</div>


<script type="text/javascript">


    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Bu müştərini silmək istədiyinizdən əminsiniz?",
            text: "Əgər silsəniz birdəfəlik silinəcək.",
            icon: "warning",
            type: "warning",
            buttons: ["İmtina","Bəli!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Bəli, sil!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>

</body>
</html>