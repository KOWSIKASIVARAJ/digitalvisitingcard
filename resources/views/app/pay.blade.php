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
    <link rel="stylesheet" href="resources\css\pay.css" />
</head>
<body>
     <!-- navbar -->
     @include('layouts.header');
     <!-- sidebar -->
     @include('layouts.sidebar');

     <!-- home -->
     <section class="">
                    <div class="container">
                        <div class="row d-flex flex-row-reverse">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2" id="bg-pay">
                                <div class="bg-image">
                                    <img class="offset-2 mb-5" style="width: 55%;" id="immg" src="public\image\pricing\phone-2.png" alt="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                                        <div class="d-flex">
                                            <i class="bi bi-chevron-left fs-4 mx-2" style="margin-top: -1%;"></i>
                                            <h4 class="try">Try SearchSoft Premium for free</h4>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4117 5.77919C15.6717 6.00619 15.6985 6.40102 15.4715 6.66104L8.92386 14.161C8.80517 14.297 8.63351 14.375 8.45304 14.375C8.27257 14.375 8.10091 14.297 7.98222 14.161L5.36317 11.161C5.13616 10.901 5.16293 10.5062 5.42296 10.2792C5.68299 10.0522 6.07781 10.0789 6.30482 10.339L8.45304 12.7997L14.5298 5.83897C14.7568 5.57894 15.1517 5.55218 15.4117 5.77919Z" fill="#2FB30D"/>
                                                </svg>
                                            <h6 class="trail">Free 7 days trial,cancel any time</h6>
                                        </div>
                                        <div class="d-flex my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4117 5.77919C15.6717 6.00619 15.6985 6.40102 15.4715 6.66104L8.92386 14.161C8.80517 14.297 8.63351 14.375 8.45304 14.375C8.27257 14.375 8.10091 14.297 7.98222 14.161L5.36317 11.161C5.13616 10.901 5.16293 10.5062 5.42296 10.2792C5.68299 10.0522 6.07781 10.0789 6.30482 10.339L8.45304 12.7997L14.5298 5.83897C14.7568 5.57894 15.1517 5.55218 15.4117 5.77919Z" fill="#2FB30D"/>
                                                </svg>
                                            <h6 class="trail">Free 7 days trial,cancel any time</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                                            <div class="row mt-4" id="rad">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-check d-flex">
                                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                                                        <label class="form-check-label mx-2" for="radio1">
                                                            <div class="d-flex">Annually <i class="bi bi-currency-rupee"></i>10K</div>
                                                        </label>
                                                        <div class="rup mt-2">(<i class="bi bi-currency-rupee"></i>1K Per Month)</div>
                                                        <div class="ms-auto"><h6 class="save">Save Upto 1K</h6></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3" id="rad">
                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <div class="form-check d-flex">
                                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                                                        <label class="form-check-label mx-2" for="radio1">
                                                            <div>Annually <i class="bi bi-currency-rupee"></i>1.5K</div>
                                                        </label>
                                                        <!-- <div class="rup mt-2">(<i class="bi bi-currency-rupee"></i>1K Per Month)</div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table mt-5">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="subtotal" style="color: #7B7B7B;">Subtotal</th>
                                                    <th scope="col" class="subtotal text-end" style="color: #7B7B7B;">10K</th>
                                                </tr>
                                                </thead>
                                                <tr>

                                                </tr>
                                            </table>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th class="total">Total</th>
                                                        <th class="total float-end">10K</th>
                                                    </tr>
                                                </thead>

                                            </table>
                                            <div class="btn btn my-4 w-100" type="button">Complete Purchase</div>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
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
