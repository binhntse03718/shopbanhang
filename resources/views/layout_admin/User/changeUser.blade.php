<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change User</title>
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
                <p class="h2">Change User with id : {{ $user->id }}</p>
            </div>
            <div class="form-input">
                <form action="/admin/user/changeUser" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <p class="h4">Name</p>
                        <input name="name" class="input1" type="text" placeholder="Nhập tên của khách hàng" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <p class="h4">Email</p>
                        <input name="email" class="input1" type="email" placeholder="Nhập email của khách hàng" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <p class="h4">Password</p>
                        <input name="password" class="input1" type="password" placeholder="Nhập password của khách hàng" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <p class="h4">Gender</p>
                        <input list="gender" name="gender" value="{{ $user->gender }}">
                        <datalist id="gender">
                            <option value="Male">
                            <option value="Female">
                        </datalist>
                    </div>
                    <div class="form-group">
                        <p class="h4">Phone Number</p>
                        <input name="password" class="input1" type="number" placeholder="Nhập số điện thoại của khách hàng" value="{{ $user->phone_number }}">
                    </div>
                    <div class="form-group">
                        <p class="h4">Address</p>
                        <input name="address" class="input1" type="text" placeholder="Nhập địa chỉ của khách hàng" value="{{ $user->address }}">
                    </div>
                    <button type="submit" class="btn">Add</button>
                    <button type="reset" class="btn">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
