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
<style>

</style>
<body>
    <div class="container ">
      
            <h1 style="text-align: center;">create your details</h1>
           
        <form action="store" method="POST" >
            @csrf
            <div class="col-sm-4" style="margin-left: 35%;margin-top:5%">
            <div class="form-group">
                <label for="name" >Name</label>
                <input type="text" id="name" name="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email" >email</label>
                <input type="email" name="email" id="email" class="form-control" >
            </div>
            <div class="form-group" >
                <label for="number">number</label>
                <input type="text" name="number" id="number" class="form-control">
            </div>
            <div class="form-group" >
                <label for="amount">amount</label>
                <input type="tel" name="amount" id="amount"class="form-control" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            </div>
          
        </form>
     
        </div>
    </div>
</body>
</html>