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
    <link rel="stylesheet" href="resources\css\home.css" />
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');
    <!-- home -->
    <section id="home">
        <div class="container">
            <div class="row justify-content-center ms-5 ps-lg-0 ps-md-0 ps-5 mt-xl-5 mt-lg-3 mt-md-3 mt-0 mb-4 d-flex flex-wrap-reverse" >
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                    <p id="success" class="mt-xl-5 mt-lg-2 mt-md-0 mt-0 pt-xl-5 pt-lg-0 pt-md-0 pt-0">Your Success is our Business</p>
                    <h1>Digital Business Cards</h1>
                    <p id="we" class="mt-4">Your professional identity in one tap</p>
                    <a href="{{url('add-new')}}" id="home-btn" class="mt-4" style="text-decoration: none;">Design Your Cards</a>
                    <span class="mb-3"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="public\images\cards\card1.png" alt="mobile" class="w-75 mt-xl-5 mt-lg-3 mt-md-0 mt-0 mb-lg-5 mb-md-5 mb-0">
                    <p class="mb-3"></p>
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
