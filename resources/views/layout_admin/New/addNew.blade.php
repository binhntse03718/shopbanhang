<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/main css/table.css">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/main css/input.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c198a983b2.js"></script>
</head>

<body>
    <div class="header" style="width: 100%">
        @include('layout_admin.header')
    </div>
    <div class="body">
        <div class="menu">
            @include('layout_admin.menu')
        </div>
        <div class="content container">
            @include('errors')
            <div class="">
                <p class="h2">Add New</p>
            </div>
            <div class="form-input">
                <form action="/admin/product/addProduct" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <p class="h4">Title</p>
                        <input name="title" class="input1" type="text" placeholder="Nhập tên title">
                    </div>
                    <div class="form-group" div class="form-group">
                        <p class="h4">Content</p>
                        <textarea name="content" type="text" placeholder="Nhập nội dung bài viết"
                            style="width: 300px; height: 150px;"></textarea>
                    </div>
                    <div class="form-group">
                        <p class="h4">Image</p>
                        <label for="img">Select image:</label> <input name="image" type="file" id="img" name="image"
                            accept="image/*">
                    </div>
                    <button type="submit" class="btn">Add</button>
                    <button type="reset" class="btn">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
