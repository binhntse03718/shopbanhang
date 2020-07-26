<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/main css/table.css">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/public/css/main css/input.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c198a983b2.js"></script>
</head>

<body>
    <div class=" container-fluid">
        <div class="">
            <p class="h2">Add Product</p>
        </div>
        <div class="form-input">
            <form action="/admin/product/addProduct" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <p class="h4">Name of Product</p>
                    <input name="name" class="input1" type="text" placeholder="Nhập tên của product" minlength="1" maxlength="255">
                </div>
                <div class="form-group">
                    <p class="h4">Id Type of Product</p>
                    <input name="id_type" class="input1" type="number" placeholder="Nhập id của product" minlength="1" maxlength="11">
                </div>
                <div class="form-group" div class="form-group">
                    <p class="h4">Description</p>
                    <input name="description" type="text" placeholder="Nhập mô tả của product" style="width: 300px; height: 150px;">
                </div>
                <div class="form-group">
                    <p class="h4">Unit Price</p>
                    <input name="unit_price" class="input1" type="number" placeholder="Nhập giá của product" minlength="1" maxlength="255">
                </div>
                <div class="form-group">
                    <p class="h4">Promotion Price</p>
                    <input name="promotion_price" class="input1" type="number" placeholder="Nhập giá khuyến mãi của product" minlength="1" maxlength="255">
                </div>
                <div class="form-group">
                    <p class="h4">Image</p>
                    <label for="img">Select image:</label> <input name="image" type="file" id="img" name="img" accept="image/*">
                </div>
                <div class="form-group">
                    <p class="h4">Unit</p>
                    <input name="unit" class="input1" type="number" placeholder="Nhập số lượng của product" minlength="1" maxlength="255">
                </div>
                <div class="form-group">
                    <p class="h4">New</p>
                    <input name="new" class="input1" type="number" placeholder="Nhập tin tức mới của product" minlength="1" maxlength="255">
                </div>
                <button type="submit" class="btn">Add</button>
                <button type="reset" class="btn">Reset</button>
            </form>
        </div>
    </div>
</body>

</html>
