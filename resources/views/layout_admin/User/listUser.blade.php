<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/main css/table.css">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/main css/input.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c198a983b2.js"></script>
</head>

<body>
    <div class="p-0 m-0">
        <div class="header" style="width: 100%">
            @include('layout_admin.header')
        </div>
        <div class="body">
            <div class="menu">
                @include('layout_admin.menu')
            </div>
            <div class="content">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
                    <div class="text-center">
                        <p class="h2">Danh Sách User</p>
                    </div>
                    <div>
                        <table align="center" border="1">
                            <thead class="center">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Phone number</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                    <tr align="center">
                                        <td class="td">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td><a href="#" class="btn"><i class="fa fa-trash"></i></a></td>
                                        <td><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
