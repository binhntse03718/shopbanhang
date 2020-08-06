<!-- Header -->
<div id="header">
    <div class="bg-light">
        <div class="header-top container d-flex justify-content-between">
            <div class="header-top-left d-flex flex-row justify-content-start pt-1">
                <ul class="list-group d-flex flex-row">
                    <li id="li1" class="list-group-item border-0 bg-light"><a href="" class="text-dark"><i
                                class="fab fa-facebook"></i></a></li>
                    <li id="li1" class="list-group-item border-0 bg-light"><a href="" class="text-dark"><i
                                class="fab fa-instagram"></i></a></li>
                    <li id="li1" class="list-group-item border-0 bg-light"><a href="" class="text-dark"><i
                                class="fab fa-twitter"></i></a></li>
                    <li id="li1" class="list-group-item border-0 bg-light"><a href="" class="text-dark"><i
                                class="fab fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="header-top-right d-flex flex-row justify-content-end">
                <ul class="list-group d-flex flex-row">
                    <li id="li1" class="list-group-item font-weight-bold border-0 bg-light">
                        <div class="d-flex border-right pr-2">
                            <p>Hotline :</p>
                            <p class="hotline">0934 385 154</p>
                        </div>
                    </li>
                    <li id="li1" class="list-group-item font-weight-bold border-0 bg-light">
                        <div class="d-flex border-right pr-2">
                            <p>Tổng đài tư vấn :</p>
                            <p class="hotline">0934 385 154</p>
                        </div>
                    </li>
                    <li id="li1" class="list-group-item border-0 bg-light"><a href="" style="color: black;">Đăng
                            nhập</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom d-flex container mt-3 mb-3">
        <div class="search-header d-flex align-items-center">
            <div class="dropdown">
                <button class="btn border rounded-0 dropdown-toggle text-success" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All
                </button>
                <div class="dropdown-menu">
                    <button class="dropdown-item text-success" type="button">Ford</button>
                    <button class="dropdown-item text-success" type="button">Honda</button>
                    <button class="dropdown-item text-success" type="button">Hyundai</button>
                    <button class="dropdown-item text-success" type="button">KIA</button>
                    <button class="dropdown-item text-success" type="button">Mazda</button>
                </div>
            </div>
            <div class="d-flex flex-row">
                <input class="form-control rounded-0 border-left-0 border-right-0 text-success w-auto" type="text"
                    placeholder="Search">
                <button class="btn rounded-0 border" type="button"><i class="fas fa-search text-success"
                        aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="company-name container d-flex flex-column align-items-end pr-3">
            <p class="h1 m-0 text-success"><strong>TB AUTO</strong></p>
            <p class="text-success"><em>Vorprung durch Technik</em></p>
        </div>
        <div class="shopping-cart container d-flex align-items-center justify-content-end">
            <button type="button" class="btn-lg btn-success btn-sm d-flex">
                <i class="fas fa-shopping-cart p-1"></i>Shopping Cart
            </button>
        </div>
    </div>
</div>
<!-- Hearder -->

<div class="body">
    <!-- Navbar and Slide -->
    <div class="pre-body">
        <!-- Navbar -->
        <div class="bg-light">
            <nav id="navbar" class="navbar navbar-expand container navbar-light">
                <div class="navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav container">
                        <li class="nav-item text-success">
                            <a href="home.html" class="nav-link text-success">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="news.html" class="nav-link text-success">Tin tức</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Các hãng xe
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item text-success" href="#">Ford</a>
                                <a class="dropdown-item text-success" href="#">Honda</a>
                                <a class="dropdown-item text-success" href="#">Hyundai</a>
                                <a class="dropdown-item text-success" href="#">KIA</a>
                                <a class="dropdown-item text-success" href="#">Mazda</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link text-success">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a href="about-us.html" class="nav-link text-success">About Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Navbar -->

        <!-- Slide -->
        <div id="slide" class="carousel slide container" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i = 0; ?>
                @foreach ($slide as $sd)
                    <li data-target="#slide" data-slide-to="{{ $i }}"
                    @if ($i == 0)
                        class="active"
                    @endif></li>
                <?php $i++; ?>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <?php $i = 0; ?>
                @foreach ($slide as $sd)
                    <div
                    @if($i == 0)
                     class="item active"
                    @else
                    class="item">
                    @endif
                        <?php $i++; ?>
                        <img class="slide-image" width="100%" src="/image/slide/{{ $sd->image }}" style="width: 300px">
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Slide -->
    </div>
    <!-- Navbar and Slide -->
</div>
