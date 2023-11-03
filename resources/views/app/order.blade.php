<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.css')}}"/>
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\order.css" />
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');
    <!-- home -->
    <section class="home-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 ms-3">
                                <div class="dashboard-parent mt-4 ms-5">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-1">
                                            <a href="{{url('contact')}}" >
                                            <img
                                                class="outline-arrows-arrow-left pt-3 ms-4"
                                                alt=""
                                                src="public\images\settings\Arrow Left.png"
                                                /></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                                            <div class="mt-3">Contacts</div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-6 col-lg-3">
                                            <div class="search-here-parent mt-3 ms-4">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
                                                        <img
                                                        class="outline-search-magnifer mt-1 mb-1 ms-3"
                                                        alt=""
                                                        src="public\images\home\mag.png"
                                                        />
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-8">
                                                        <div class="search-here ms-5 mt-1 mb-1">Search here</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                            <a href="#overlay" class="pb-4 " id="open-overlay">
                                                <img
                                                class="component-67 mt-3 ms-3"
                                                alt=""
                                                src="public\images\contact\Component 67.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                                        <img src="public\images\contact\Component 66.png" alt="" class="mt-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-2 col-sm-2 col-md-4 col-lg-3">
                                        <div id="overlay" class="mt-2">
                                            <div class="row justify-content-center">
                                                <div class="sort-and-filter" >Sort and Filter</div>
                                                <hr class="mt-3">
                                                <div class="alphabetical-order">Alphabetical Order</div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4 ms-3">
                                                <div class="a-parent">
                                                        <div class="a">A</div>
                                                        <div class="in">In</div>
                                                        <div class="ascending">(Ascending)</div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4">
                                                    <div class="a-parent">
                                                        <div class="a">A</div>
                                                        <div class="in">Fn</div>
                                                        <div class="ascending">(Descending)</div>
                                                    </div>
                                                </div>
                                                <hr class="mt-3">
                                                <div class="alphabetical-order">Chronological Order</div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4 ms-3">
                                                    <div class="a-parent">
                                                        <div class="dec-31">DEC 31</div>
                                                        <div class="ascending">(recent first)</div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4 ms-3">
                                                    <div class="a-parent">
                                                        <div class="dec-31">JAN 01</div>
                                                        <div class="ascending">(recent Last)</div>
                                                    </div>
                                                </div>
                                                <hr class="mt-3">
                                                <div class="alphabetical-order">Display Order</div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4 ms-3">
                                                    <img src="public\images\contact\bx_list-ol.png" alt="">
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-6 col-lg-5 mt-4 ms-3">
                                                    <img src="public\images\contact\mingcute_grid-line.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mask" onclick="document.location='#';"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-5 ms-3 ms-xs-3">
                                <div class="col-xs-2 col-sm-2 col-md-8 col-lg-9">
                                    <div class="frame-parent">
                                        <div class="t mt-3 ms-5">T</div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                                                <img src="public\images\contact\Frame 1227.png" alt="">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                                                <img src="public\images\contact\Frame 1264.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
         let closeBtn = document.querySelector("#btn");
         let searchBtn = document.querySelector(".bx-search");

         closeBtn.addEventListener("click", () => {
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         searchBtn.addEventListener("click", () => {
           // Sidebar open when you click on the search iocn
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         // following are the code to change sidebar button(optional)
         function menuBtnChange() {
           if (sidebar.classList.contains("open")) {
             closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
           } else {
             closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
           }
         }

   </script>
</body>
</html>
