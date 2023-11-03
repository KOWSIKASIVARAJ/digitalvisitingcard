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
    <link rel="stylesheet" href="resources\css\setting.css" />
</head>
<body >
    <!-- navbar -->
    @include('layouts.header');
    <!-- sidebar -->
    @include('layouts.sidebar');
    <!-- home -->
    <section class="home-section">
                    <div class="container-fluid ">
                        <div class="row justify-content-center">
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="settings-parent mt-4 ms-5">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="{{url('home')}}">
                                        <img src="public\images\add\ph_arrow-left-bold.png" alt="" class="ms-5 mt-2 mb-2"></a>
                                        </div>
                                        <div class="col-sm-2 col-md-4 col-lg-4">
                                        <p class="setting mt-1">Settings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="container">
                                <div class="row justify-content-center mt-5 ">
                                <div class="col-sm-12 col-md-8 col-lg-3">
                                <div class="outline-users-user-rounded-parent ">
                                    <div class="row justify-content-start mt-3 ms-4">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <img src="public\images\settings\User Rounded.png" alt="">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <a class="button profile" href="#popup_flight_travlDil1">Profile</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-5 ms-4">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        <img src="public\images\settings\scanner_7732158 2.png" alt="">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                        <a class="button profile" href="#popup_flight_travlDil2">Account</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-5 ms-4">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        <img src="public\images\settings\fluent_person-sync-20-regular.png" alt="">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-10">
                                        <a class="button profile" href="#popup_flight_travlDil3">Sync Contacts</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-5 ms-4 mb-3">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                        <img src="public\images\settings\arcticons_netiq-advanced-authentication.png" alt="">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-10">
                                        <a class="button profile" href="#popup_flight_travlDil4">Advanced Features</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-4 col-md-8 col-lg-6 me-3">
                                <div id="popup_flight_travlDil1" class="overlay_flight_traveldil">
                                    <div class="subscription-parent">
                                        <a class="close_flight_travelDl" href="#">&times;</a>
                                        <div class="row justify-content-start">
                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                <img
                                                    class="material-symbolsadd-card-outl-icon ms-5"
                                                    alt=""
                                                    src="public\images\settings\material-symbols_add-card-outline.png"
                                                    />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <p class="subscription">Subscription</p>
                                                <p class="search-soft-free mt-3">Search Soft Free</p>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-3 ms-5">
                                                <button class="parent">
                                                    <div class="plus">+</div>
                                                    <div class="upgrade-plan">Upgrade plan</div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="subscription-parent mt-3">
                                    <div class="row justify-content-start">
                                        <div class="col-sm-12 col-md-12 col-lg-2">
                                            <img
                                                class="material-symbolsadd-card-outl-icon ms-5 mt-3"
                                                alt=""
                                                src="public\images\settings\material-symbols_add-card-outline.png"
                                                />
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <p class="subscription mt-3">My Profile</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start ">
                                        <div class="col-sm-12 col-md-12 col-lg-2 mb-2">
                                            <img
                                            src="public\images\settings\Ellipse 668.png"
                                            alt=""
                                            class="frame-item1 ms-5"
                                            />
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="praveen-kumar ms-3">Praveen kumar</div>
                                            <div class="free-user mt-2 ms-3">Free User</div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3 ms-sm-3">
                                            <button class="rectangle-div ms-5">
                                            <div class="edit ms-2 me-2">Edit <img src="public\images\settings\circum_edit.png" alt=""></div>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="popup_flight_travlDil2" class="overlay_flight_traveldil account" style="margin-top: -38%;">
                                    <div class="subscription-parent">
                                        <a class="close_flight_travelDl" href="#">&times;</a>
                                        <div class="row justify-content-start">
                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                <img
                                                    class="material-symbolsadd-card-outl-icon ms-5"
                                                    alt=""
                                                    src="public\images\settings\scanner_7732158 2.png"
                                                    />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <p class="subscription">SearchSoft Account</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-start">
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                <div class="change-your-email ms-5 mt-3">Change your email address</div>
                                                <div class="praveen32gmailcom ms-5 mt-3">praveen32@gmail.com</div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-3 ms-sm-3">
                                                <button class="rectangle-div ms-5">
                                                    <div class="edit ms-2 me-2">Edit <img src="public\images\settings\circum_edit.png" alt=""></div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-start mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                <div class="resend-verification-email mt-3 ms-5">Resend Verification Email</div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-2 ms-sm-3">
                                                <img src="public\images\settings\Alt Arrow Right.png" alt="" class="mt-3 ms-5">
                                            </div>
                                        </div>
                                        <div class="row justify-content-start mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                <div class="resend-verification-email mt-3 ms-5">Reset Your Password</div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-2 ms-sm-3">
                                                <img src="public\images\settings\Alt Arrow Right.png" alt="" class="mt-3 ms-5">
                                            </div>
                                        </div>
                                        <div class="row justify-content-start mt-3 mb-3">
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                <div class="resend-verification-email mt-3 ms-5">Delete Your Account</div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-2 ms-sm-3 mb-3">
                                                <img src="public\images\settings\Alt Arrow Right.png" alt="" class="mt-3 ms-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="popup_flight_travlDil3" class="overlay_flight_traveldil" style="margin-top: -50%;">
                                    <div class="subscription-parent">
                                        <a class="close_flight_travelDl" href="#">&times;</a>
                                        <div class="row justify-content-start">
                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                <img
                                                    class="material-symbolsadd-card-outl-icon ms-5"
                                                    alt=""
                                                    src="public\images\settings\fluent_person-sync-20-regular.png"
                                                    />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <p class="subscription">Sync Contacts</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-start ">
                                            <div class="dropdown">
                                                <div type="button" class="" data-bs-toggle="dropdown">
                                                    <div class="col-sm-12 col-md-12 col-lg-8">
                                                        <div class="resend-verification-email mt-3 ms-5">Add Account<img src="public\image\settings\Frame 1253.png" alt="" class="mt-2 ms-5"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-8 col-lg-5">
                                                        <div class="dropdown-menu" style="width:97%">
                                                            <div class="row justify-content-start">
                                                                <div class="col-sm-4 col-md-12 col-lg-6 mt-2">
                                                                    <div class="syncing-will-allow mt-3 ms-2">Syncing will allow you to access your SearchSoft contacts across various platforms</div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-5 mt-2">
                                                                    <div class="rectangle-div3">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                                                <img
                                                                                    class="google-icon"
                                                                                    alt=""
                                                                                    src="public\images\settings\google.png"
                                                                                />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                                                <div class="connect-google mt-1">Connect Google</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rectangle-div3 mt-2 mb-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                                                <img
                                                                                    class="mt-2 ms-2"
                                                                                    alt=""
                                                                                    src="public\images\settings\Microsoft_Exchange_Server-Logo 1.png"
                                                                                />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                                                <div class="connect-exchange mt-1">Connect Exchange</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="popup_flight_travlDil4" class="overlay_flight_traveldil" style="margin-top: -24%;">
                                    <div class="subscription-parent">
                                        <a class="close_flight_travelDl" href="#">&times;</a>
                                        <div class="row justify-content-start">
                                            <div class="col-sm-12 col-md-12 col-lg-2">
                                                <img
                                                    class="material-symbolsadd-card-outl-icon ms-5"
                                                    alt=""
                                                    src="public\images\settings\arcticons_netiq-advanced-authentication.png"
                                                    />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <p class="subscription">Advanced Feature</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-start mt-3 ">
                                        <div class="col-sm-12 col-md-12 col-lg-10">
                                        <div class="export-contacts ms-5 mb-3">Export Contacts</div>
                                        </div>
                                        </div>
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
