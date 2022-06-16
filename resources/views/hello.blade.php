<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO B*TCH </h1>
    <div>
        <form action="" method="post">
            @csrf
            <label for="">
                A: 
                <input type="number" name="A">
            </label>
            <p>+</p>
            <label for="">
                B:
                <input type="number" name="B"> 
            </label>
            <button>Sum</button>
        </form>
        <label for="">
            Kết Quả: 
            <input type="text" value="<?php if(isset($sum)) echo $sum ?>" >
        </label>
    </div>
</body>
</html>