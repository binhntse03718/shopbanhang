<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/1461d04149.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" style="padding-top: 100px">
            <div class="border border-aqua">
                <div class="title text-center">
                    Please Sign In
                </div>
                <div class="input-group d-flex flex-column align-content-center">
                    <fieldset>
                    <form action="dangnhap" method="POST">
                        @csrf
                        <input type="text" name="username" class="w-50" placeholder="Username">
                        <input type="password" name="password" class="w-50" placeholder="Password">
                        <button class="btn" type="submit">Login</button>
                    </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>
