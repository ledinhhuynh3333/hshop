<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

    <h2>Thêm sản phẩm</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <p>Tên sản phẩm:</p>
        <input type="text" name="name" required>

        <p>Ảnh:</p>
        <input type="text" name="img">

        <br><br>
        <button type="submit">Thêm</button>
    </form>

</body>
</html>