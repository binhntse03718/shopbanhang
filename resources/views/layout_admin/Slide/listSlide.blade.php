<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="{{ asset('') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/main css/table.css">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <p class="h2">Danh Sách Slide</p>
                    </div>
                    <div>
                        <table align="center" border="1">
                            <thead class="center">
                                <tr>
                                    <th align="center">Id</th>
                                    <th>Image</th>
                                    <th>Option</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($slide as $sd)
                                    <tr align="center">
                                        <td class="td">{{ $sd->id }}</td>
                                        <td><img width="250px" src="/image/slide/{{ $sd->image }}"></td>
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
