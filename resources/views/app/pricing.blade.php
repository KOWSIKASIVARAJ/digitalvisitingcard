<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Background</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\pricing.css" />
</head>
<body>
     <!-- navbar -->
     @include('layouts.header');
     <!-- sidebar -->
     @include('layouts.sidebar');

     <!-- home -->
     <section>
                <div class="container mt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="card ms-5" id="price-1">
                    <div class="card-title text-center my-4">
                            <div class="c-tit"><img src="public\image\pricing\crown.png" alt="" class="mx-2">SearchSoft Premium</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex text-center mb-3">
                            <div class="col-6 indu">For Individuals</div>
                            <div class="col-6 user"><i class="bi bi-person"></i>1 User</div>
                        </div>
                        <div class="row mx-2 mb-2">
                            <div class="parah">
                                More customizability. Create professional cards that look and feel your own
                            </div>
                        </div>
                        <div class="row d-flex mx-3 text-center my-4">
                            <div class="col-12">
                                <div class="users p-2">7 days free trial <span class="time">Cancel any time</span></div>
                            </div>
                        </div>
                        <div class="row mt-5 mx-1">
                            <!-- <div class="col-1"></div> -->
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\card.png" alt=""></li>
                                    <li class="ms-5">Create up to 5 cards for yourself. A card for every occasion.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\color-palette.png" alt=""></li>
                                    <li class="ms-5">Add a custom color to your cards.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\qr-code.png" alt=""></li>
                                    <li class="ms-5">Brand your QR code and link</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mb-5 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\contact.png" alt=""></li>
                                    <li class="ms-5 mb-2">Export your contacts.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn btn w-100 mt-4 mb-1" type="button">Searchsoft Premium</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-4">
                <div class="card ms-5" id="price-1">
                    <div class="card-title text-center my-4">
                            <div class="c-tit"><img src="public\image\pricing\group.png" alt="" class="mx-2">SearchSoft Business</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex text-center mb-3">
                            <div class="col-6 indu">For Teams</div>
                            <div class="col-6 user"><i class="bi bi-person"></i>5+ User</div>
                        </div>
                        <div class="row mx-2 mb-2">
                            <div class="parah">
                                More customizability. Create professional cards that look and feel your own
                            </div>
                        </div>
                        <div class="row d-flex mx-2 text-center my-4">
                            <div class="col-12">
                                <div class="users p-2">30 days free trial <span class="time">Cancel any time</span></div>
                            </div>
                        </div>
                        <div class="row mt-5 mx-1">
                            <!-- <div class="col-1"></div> -->
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\crown1.png" alt=""></li>
                                    <li class="ms-5">All team members receive SearchSoft  Premium accounts.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\color-palette.png" alt=""></li>
                                    <li class="ms-5">Add a custom color to your entire team cards.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\management.png" alt=""></li>
                                    <li class="ms-5">Create cards for your entire team.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mb-5 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\contact.png" alt=""></li>
                                    <li class="ms-5">Shared corporate contact book.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn btn w-100 mt-4" type="button">SearchSoft Business</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mx-md-auto col-lg-4 mt-4">
                <div class="card ms-5" id="price-1">
                    <div class="card-title text-center my-4">
                            <div class="c-tit"><img src="public\image\pricing\group.png" alt="" class="mx-2">SearchSoft Enterprises</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex text-center mb-3">
                            <div class="col-6 indu">For Agency</div>
                            <div class="col-6 user"><i class="bi bi-person"></i>100+ User</div>
                        </div>
                        <div class="row mx-2 mb-2">
                            <div class="parah">
                                More customizability. Create professional cards that look and feel your own
                            </div>
                        </div>
                        <div class="row d-flex mx-2 text-center my-4">
                            <div class="col-12">
                                <div class="users p-2">30 days free trial <span class="time">Cancel any time</span></div>
                            </div>
                        </div>
                        <div class="row mt-5 mx-1">
                            <!-- <div class="col-1"></div> -->
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\crown1.png" alt=""></li>
                                    <li class="ms-5">All team members receive SearchSoft  Premium accounts.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\color-palette.png" alt=""></li>
                                    <li class="ms-5">Add a custom color to your entire team cards.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\management.png" alt=""></li>
                                    <li class="ms-5">Shared corporate contact book.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row my-4 mb-5 mx-1">
                            <div class="col-12 lis">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group"><img src="public\image\pricing\contact.png" alt=""></li>
                                    <li class="ms-5">Export your contacts.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn btn w-100 mt-4" type="button">Contact Us</div>
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
