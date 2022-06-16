<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="signup" method="post">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" >
        </div>
        <!-- @error('name')
        <span>{{$message}}</span>
        @enderror -->
        <div class="mb-3">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Age" >
        </div>
        <!-- @error('age')
        <span>{{$message}}</span>
        @enderror -->
        <div class="mb-3">
            <label>Date</label>
            <input type="date" class="form-control" name="date" placeholder="Date" >
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" >
        </div>
        <div class="mb-3">
            <label>Web</label>
            <input type="text" class="form-control" name="web" placeholder="Web" >
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="display-infor">
        @if (count ($errors) >0)
    <div class="alert alert-danger">
    <ul>
        @foreach($errors -> all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
    </div>
@endif
        </div>
    </form>
   
    </div>
</body>
</html>