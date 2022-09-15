<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
<div class="card">

<div class="card-header">
<h5 class="card-title">Regions</h5>
  </div>
<div class="card-body">


<a href="{{route('region.create')}}"><button class="btn btn-primary">Add new Region</button></a>
<a href="{{route('customer.index')}}"><button class="btn btn-primary">Back</button></a>

<table>
  <tr>
    <th>Region name</th>
    <th>Travel Date</th>
    <th>Travel Period(Day)</th>
    <th>Operation</th>
  </tr>

  @foreach($regions as $region)
  <tr>
    <td>{{$region->name}}</td>
    <td>{{$region->travel_date}}</td>
    <td>{{$region->travel_period}}</td>
    <td>
        <button class="btn btn-warning"><a href="{{route('region.edit',[$region->id])}}">Edit</a></button><br>
        <form method="POST" action="{{route('region.destroy',[$region->id])}}">
          @csrf
          @method('DELETE')
          <button class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
      </form>
    </td>
  </tr>
 
 @endforeach
 
</table>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>