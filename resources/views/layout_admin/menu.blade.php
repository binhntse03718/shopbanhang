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
                                <a href="/admin/dashboard" class="btn btn-secondary">Dashboard</a>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="slide">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target1">
                                    Slide
                                </a>
                                <div id="target1" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="/admin/slide/listSlide5">List Slide</a></div>
                                    <div><a class="btn btn-secondary" href="/admin/slide/addSlide">Add Slide</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="product">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target2">
                                    Product
                                </a>
                                <div id="target2" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="/admin/product/listProduct5">List Product</a></div>
                                    <div><a class="btn btn-secondary" href="/admin/product/addProduct">Add Product</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="catelogy">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target3">
                                    News
                                </a>
                                <div id="target3" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="/admin/new/listNew5">List News</a></div>
                                    <div><a class="btn btn-secondary" href="/admin/new/addNew">Add News</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="background: #d9edf7">
                            <div class="">
                                <a class="btn btn-secondary" data-toggle="collapse" data-target="#target4">
                                    User
                                </a>
                                <div id="target4" class="collapse d-flex flex-column">
                                    <div><a class="btn btn-secondary" href="/admin/user/listUser5">List User</a></div>
                                    <div><a class="btn btn-secondary" href="/admin/user/addUser">Add User</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <!--End Navbar-->
