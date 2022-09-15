<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border:2px solid black;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
 




    <title>Document</title>
</head>
<body>

<div class="container text-center">


    <h1>Customers</h1>
    <a href="{{route('car.index')}}"><button class="btn btn-primary ">My Car</button></a>
    <a href="{{route('region.index')}}"><button class="btn btn-primary ">Last Traveled Regions</button></a>
    <br>
    <hr>
    <table id="myTable" class="table table-striped display">
    <thead >
  <tr >
    <th class="align-middle">Name</th>
    <th class="align-middle">Surname</th>
    <th class="align-middle">Date of birth</th>
    <th class="align-middle">Sex</th>
    <th class="align-middle">Phone</th>
    <th class="align-middle">Car</th>
    <th class="align-middle">Last Traveled Regions</th>
    <th class="align-middle">Travel Period</th>
    <th class="align-middle">Travel Date</th>
    <th class="align-middle">Operations</th>
  </tr>
  </thead>
  @empty($customers)
  <h1>There is no customer</h1>

  @else



  @foreach($customers as $customer)
    @foreach($customer->cars as $car)
    @foreach($customer->regions as $region)
    <tbody>
  <tr>
    
    <td>{{$customer->name}}</td>
    <td>{{$customer->surname}}</td>
    <td>{{$customer->date_of_birth}}</td>
    <td>{{$customer->sex}}</td>
    <td>{{$customer->phone}}</td>
    <td>{{$car->model}} </td>
    <td>{{$region->name}} </td>
    <td>{{$region->travel_period}} </td>
    <td>{{$region->travel_date}} </td>
    <td>
        <button class="btn btn-warning btn-sm"><a  style="text-decoration:none ; color: #fff;" href="{{route('customer.edit',[$customer->id])}}">Edit</a></button><br>
        <form style="display: inline-block;" method="POST" action="{{route('customer.destroy',[$customer->id])}}">
          @csrf
          @method('DELETE')
        <button class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
      </form>
    </td>
    @endforeach
    @endforeach
    @endforeach
  </tr>
  <tbody>
</table>
<br>
@endempty
<a style="text-decoration:none ; color: #fff;" href="{{route('customer.create')}}"><button class="btn btn-success">Add new customer</button></a>

    
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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

    $(document).ready( function () {
      console.log("document ready");
    $('#myTable').DataTable()

    
    
} );

</script>
</body>

</html>