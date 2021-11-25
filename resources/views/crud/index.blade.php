<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container ">
    <h1 class="jumbotron text-center">CRUD Operation</h1>
    <div class="submit">
    <a href="create" class="btn btn-primary">Create data</a>
</div><br>
<table class="table">
    <thead >
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>number</th>
            <th>amount</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dis as $view)
        <tr>
            <th>{{$view->name}}</th>
            <th>{{$view->email}}</th>
            <th>{{$view->number}}</th>
            <th>{{$view->amount}}</th>
            <th>
                <a href="{{'delete/'.$view->id}}" class="btn btn-danger">delete</a>
                <a href="{{'edit/'.$view->id}}" class="btn btn-success">edit</a>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>


</div>

</body>
</html>
