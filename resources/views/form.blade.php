<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <div class="top">
            <a href="/products">HomePage</a>
            <div><h1 href="">Quản Lý Phòng</h1></div>
            <div><button>Thêm Phòng Mới</button></div>
        </div>
        <div class="form">
            <form action="add" method="post">
            @csrf
                <label for="">
                    Tên Phòng:
                    <input type="text" name="name">
                </label>
                <label for="">
                    Mô Tả Phòng:
                    <input type="text" name="description">
                </label>
                <label for="">
                    Giá:
                    <input type="text" name="price">
                </label>
                <label for="">
                    Ảnh: 
                    <input type="text" name="image">
                </label>
                <button>Hoàn Thành</button>
            </form>
        </div>
    </div>
</body>
</html>