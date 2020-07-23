<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../../css/main css/menuadmin.css">
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <!--Navbar-->
            <div class="main-container d-flex flex-column">
                <div class="group-search d-flex align-items-center">
                    <form action="/">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="group-button">
                    <ul class="list-group">
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="">
                                <a href="#" class="btn btn-secondary">Dashboard</a>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="slide">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target1">
                                    Slide
                                </a>
                                <div id="target1" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="#">List Slide</a></div>
                                    <div><a class="btn btn-secondary" href="#">Add Slide</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="product">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target2">
                                    Product
                                </a>
                                <div id="target2" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="#">List Product</a></div>
                                    <div><a class="btn btn-secondary" href="#">Add Product</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="catelogy">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target1">
                                    News
                                </a>
                                <div id="target1" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="#">List News</a></div>
                                    <div><a class="btn btn-secondary" href="#">Add News</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target3">
                                    User
                                </a>
                                <div id="target3" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="#">List User</a></div>
                                    <div><a class="btn btn-secondary" href="#">Add User</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <!--End Navbar-->
    </body>
</html>
