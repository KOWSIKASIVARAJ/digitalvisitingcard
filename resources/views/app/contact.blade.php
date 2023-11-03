<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\contact.css" />
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
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10">
                                <div class="dashboard-parent mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                                            <a href="{{('home')}}">
                                            <img
                                                class="outline-arrows-arrow-left pt-3 ms-4"
                                                alt=""
                                                src="public\images\settings\Arrow Left.png"
                                                /></a>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-6 col-lg-3">
                                            <div class="mt-3 me-5">Contacts</div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-6 col-lg-4">
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
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                                            <img
                                                class="component-67 mt-3 ms-3"
                                                alt=""
                                                src="public\images\contact\Component 67.png"
                                                />
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                                            <img
                                                class="component-67 mt-3 ms-3"
                                                alt=""
                                                src="public\images\contact\Component 66.png"
                                                />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-3 mt-5">
                                    <a href="{{url('order')}}" style="text-decoration: none;">
                                    <div class="ellipse-parent">
                                        <img
                                            class="ellipse-icon mt-3 ms-3"
                                            alt=""
                                            src="public\images\contact\Ellipse 737.png"
                                            />
                                            <div class="mt-5">All Contacts</div>
                                            <div class="contacts">2 Contacts</div>
                                    </div>
                                    </a>
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
