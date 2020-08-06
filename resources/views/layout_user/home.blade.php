<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/main css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        @include('layout_user.header')
    </div>
    <div>
          <!-- Pre Main Body -->
          <div id="none-padding" class="main-body container">
            <div class="trending">
                <div class="border-bottom border-secondary">
                    <div class="container-content d-sm-inline-block">
                        <p class="m-0 pb-2 pt-2 font-weight-bold h2 text-success">On top</p>
                    </div>
                </div>
                <div id="none-padding" class="trending-container container pt-3">
                    <div class="d-flex justify-content-between">
                        <div class="border text-center pt-4">
                            <a href="" style="text-decoration: none;">
                                <img class="" src="../image/product/ford/ford_escape.jpg">
                                <p class="h3 text-danger">Ford Escape</p>
                                <p class="h3 text-primary">$24.885</p>
                            </a>
                        </div>
                        <div class="border text-center pt-4">
                            <a href="" style="text-decoration: none;">
                                <img class="" src="../image/product/honda/honda_hrv.jpg">
                                <p class="h3 text-danger">Ford Escape</p>
                                <p class="h3 text-primary">$41.237</p>
                            </a>
                        </div>
                        <div class="border text-center pt-4">
                            <a href="" style="text-decoration: none;">
                                <img class="" src="../image/product/hyundai/hyundai_tucson.jpg">
                                <p class="h3 text-danger">Ford Escape</p>
                                <p class="h3 text-primary">$25.652</p>
                            </a>

                        </div>
                        <div class="border text-center pt-4">
                            <a href="" style="text-decoration: none;">
                                <img class="" src="../image/product/kia/kia_cerato.jpg">
                                <p class="h3 text-danger">Ford Escape</p>
                                <p class="h3 text-primary">$21.133</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre Main Body -->

        <!-- Main Body Banner -->
        <div class="d-flex justify-content-center pt-5">
            <img class="" style="width: 1140px; height: 150px;" src="../image/banner/body-banner.jpg">
        </div>
        <!-- Main Body Banner -->

        <!--Product in Body-->
        <div class="product-body pt-2">
            <div id="none-padding" class="container">
                <div class="border-bottom border-secondary">
                    <div class="container-content d-sm-inline-block">
                        <p class="m-0 pb-2 pt-2 font-weight-bold h2 text-success">Sản phẩm</p>
                    </div>
                </div>
            </div>
            <div class="list-product">
                <div id="none-padding" class="container">
                    <div class="product-item">

                    </div>
                </div>
            </div>
        </div>
        <!--Product in Body-->

        <!-- News in Body -->
        <!-- Title -->
        <div id="none-padding" class="container pt-5">
            <div class="d-flex">
                <div class="box1 w-100 h-100 border-bottom border-secondary mt-4 mr-2">

                </div>
                <div class="title">
                    <p class="h2 text-success">News</p>
                </div>
                <div class="box2 w-100 h-100 border-bottom border-secondary mt-4 ml-2">

                </div>
            </div>
        </div>
        <!-- Title -->
        <!-- Content News -->
        <div class="news-container">
            <div class="container-fluid">
                <div class="content-1">
                    <img>
                    <p></p>
                    <p></p>
                </div>
                <div class="content-2">
                    <img>
                    <p></p>
                    <p></p>
                </div>
                <div class="content-3">
                    <img>
                    <p></p>
                    <p></p>
                </div>
                <div class="content-4">
                    <img>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- Content News -->
        <!-- News in Body -->

        <!-- Feedback -->
        <div class="">
            <div class="d-flex flex-column align-items-center">
                <p class="h5 font-italic text-warning">"Ý kiến khách hàng"</p>
                <img class="avatar rounded-circle" src="../image/avatar/avatar_customer.jpg">
                <p class="font-weight-light font-italic m-0">"Người ta thường nói tiền đi đôi với dịch vụ và chắc chắn TB auto khẳng định lại cho bạn chính xác với điều đấy.</p>
                <p class="font-weight-light font-italic">Salon đủ các loại sản phẩm và giá cả cạnh tranh nhất thị trường hiện nay."</p>
                <p class="h7 font-weight-normal san">Mr. Bình</p>
            </div>
        </div>
        <!-- Feedback -->
    </div>
    <!-- Body -->
    </div>
    <div>
        @include('layout_user.footer')
    </div>
</body>

</html>
