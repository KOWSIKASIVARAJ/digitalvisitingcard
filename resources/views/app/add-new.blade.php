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
      <link rel="stylesheet" href="resources\css\add-new.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   </head>
   <body >
      <!-- navbar -->
      @include('layouts.header');
      <!-- sidebar -->
      @include('layouts.sidebar');
      <!-- home -->
      <section class="home-section">
         <div class="container" >
            <div class="row justify-content-center ms-lg-5 ms-md-5 ms-3">
               <div class="ms-lg-5 ms-md-5 ms-1 ps-lg-5 ps-md-5 ps-3 mt-5">
                  <label for="names" id="name-label" class="form-label ms-lg-2 ms-md-2 ms-5 ps-lg-5 ps-md-5 ps-0">Label this Card</label>
                  <input type="text" id="names" class="form-control ms-lg-5 ms-md-5 ms-5 ps-lg-2 ps-md-2 ps-2" >
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-5 ">
                  <div class="ms-lg-3 ms-md-0 ms-5 mb-5" style="border-radius: 15.11px;
                     background-color: #f2f2f2;
                     box-shadow: 0px 3.777777671813965px 3.78px rgba(0, 0, 0, 0.25);">
                        <img
                           src="public\images\color\lg-wave-blue.png"
                           alt=""
                           class="android-large-18-child wavep"
                           id="selected"
                           data-type="wave"
                           />
                           <div class="row justify-content-end me-4" style="margin-top: -29px;">
                                <div class="ellipse-div" id=""></div>
                            </div>
                     <div class="mt-3 ">
                        <div id="switcher" class="space classic small-images mb-3 mt-3 d-flex" style="overflow-x: scroll; overflow-y: hidden; padding-left: 0%">
                           <div class="col-lg-2 ms-2 mt-2" >
                              <img src="public\images\color\Ellipse 698.png" alt="" >
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (3).png"
                                 data-color="rgb(246 223 231)"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#d06189"
                                 data-clr="pink"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (4).png"
                                 data-color="#f0e0e0"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#c42626"
                                 data-clr="red"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (7).png"
                                 data-color="#f4e2d6"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#9d6f4e"
                                 data-clr="brown"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (5).png"
                                 data-color="#f2e4bf"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#c0962b"
                                 data-clr="yellow"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (8).png"
                                 data-color="#c5e7c4"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#32c22f"
                                 data-clr="green"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (9).png"
                                 data-color="#c2dcdc"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#1cc2c2"
                                 data-clr="lightblue"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (6).png"
                                 data-color="#e1e7ec"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#418ace"
                                 data-clr="blue"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (2).png"
                                 data-color="#e1e7ec"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#418ace"
                                 data-clr="deepblue"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default.png"
                                 data-color="#ede0f2"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#b440dd"
                                 data-clr="purple"
                                 />
                           </div>
                           <div class="col mx-2" >
                              <img
                                 src="public\images\add\Property 1=Default (1).png"
                                 data-color="#d7d4d8"
                                 class="bg-change bg-change1 code space"
                                 data-color1="#2b2b2b"
                                 data-clr="black"
                                 />
                           </div>
                        </div>
                     </div>
                     <div class="row mt-4 ">
                        <p id="name" class="mx-2">Full name</p>
                        <form action="">
                           <div class="mx-2">
                              <label for="fullname" class="form-label">First name</label>
                              <input type="text" class="form-control" id="fullname">
                           </div>
                           <div class="mx-2">
                              <button type="submit" id="save" class="mt-4">SAVE</button>
                           </div>
                           <div class="mx-2 mt-3">
                              <label for="middlename" class="form-label">Middle  name</label>
                              <input type="text" class="form-control" id="middlename">
                           </div>
                           <div class="mx-2 mt-3">
                              <label for="lastname" class="form-label">Last name</label>
                              <input type="text" class="form-control" id="lastname">
                           </div>
                           <div class="mx-2 mt-3">
                              <label for="desgination" class="form-label">Desgination</label>
                              <input type="text" class="form-control" id="desgination">
                           </div>
                           {{--
                           <div class="mx-2 mt-3">
                              <label for="company" class="form-label">Company</label>
                              <input type="text" class="form-control" id="company">
                           </div>
                           <div class="mx-2 mt-3">
                              <label for="headline" class="form-label">Headline</label>
                              <input type="text" class="form-control" id="headline">
                           </div>
                           --}}
                           <div class="mx-2 mt-3 mb-5">
                              <p id="socials">Social Media Links</p>
                              <a href="#social-body" id="badge" type="button">Add Badge</a>
                           </div>
                           <div id="web">
                              <div id="Menu1" style="display: none" class="mx-2 mt-3">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\image\edit\business-and-trade.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="Department" class="form-control mt-3"
                                    />
                                 <input
                                    type="text"
                                    id="email1"
                                    name="extension"
                                    placeholder="Company"
                                    class="form-control mt-3 mb-4"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Headline" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu2" style="display: none" class="mx-2 mt-3">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\website.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="searchsoft.in" class="form-control mt-3"
                                    />
                                 <input
                                    type="text"
                                    id="email1"
                                    name="extension"
                                    placeholder="Display Text"
                                    class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu3" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\image\edit\phone.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="Phone" class="form-control mt-3"
                                    />
                                 <input
                                    type="text"
                                    id="text"
                                    name="Phone"
                                    placeholder="Extension"
                                    class="form-control mt-3"
                                    />
                                 <input
                                    type="text"
                                    id="text"
                                    name="Phone"
                                    placeholder="Label"
                                    class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu4" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\eva_email-outline.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="Email" class="form-control mt-3"
                                    />
                                 <input
                                    type="text"
                                    id="text"
                                    name="Phone"
                                    placeholder="No label"
                                    class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu5" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\pin.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="Address" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu6" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\link.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="searchsoft.in" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu7" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\mdi_instagram (1).png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="@" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu8" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\image\edit\twitter (1).png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="@" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu9" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\bi_facebook (1).png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="facebook.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu10" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\whatsapp.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="9876543210" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu11" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\telegram.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="@" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu12" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\ri_youtube-line.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="http://youtube.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu13" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\ri_pinterest-fill.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="pinterest.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu14" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\mdi_vimeo.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="vimeo.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu15" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\ic_baseline-discord.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="discord.gg/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu16" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\linkedin.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="linkedin.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu17" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\edit\github.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="Username" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu18" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\add\paytm.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="paytm.me/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu19" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon mt-3"
                                       />
                                    <img
                                       src="public\images\add\google-pay.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="gpay.me/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu20" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\calendar_747310.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="date" id="email" name="phone" value="gpay.me/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu21" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\social_10091758.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="google" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu22" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\behance.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="behance.net/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu23" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\dribbble.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" value="Dribble.com/" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu24" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\icons8-skype-16.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="SkypeID" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu25" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\image\edit\icons8-skype-16.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="SkypeID" class="form-control mt-3 mb-4"
                                    />
                              </div>
                              <div id="Menu26" style="display: none;">
                                 <div>
                                    <img
                                       src="public\images\edit\material-symbols_menu.png"
                                       alt=""
                                       class="menu-icon  mt-3"
                                       />
                                    <img
                                       src="public\images\edit\threads.png"
                                       alt=""
                                       class="e-icon mt-3"
                                       />
                                 </div>
                                 <input
                                    type="text" id="email" name="phone" placeholder="threads" class="form-control mt-3"
                                    />
                                 <input
                                    type="text" id="email" name="phone" placeholder="Display text" class="form-control mt-3 mb-4"
                                    />
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 mt-5 ">
                  <div class="row ms-xl-2 ms-lg-5 ms-md-3 ms-5 ">
                     <p id="first-card">Create your First Card</p>
                     <p id="ready">Ready to design your card ?  Pick a field below to get started !.</p>
                  </div>
                  <div class="row ms-xl-2 ms-lg-5 ms-md-3 ms-5 mt-3 mx-2" id="img-card">
                     <div class="col mt-2">
                        <p id="img-head">Add Images</p>
                     </div>
                     <div class="col text-end me-3 mt-2">
                        <button id="change-btn" class="myBtn_multi multis">Change Layout</button>
                        <div class="modal modal_multi" id="overlay">
                           <!-- Modal content -->
                           <div class="row justify-content-center">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 mt-5">
                                 <div class="modal-content slid" >
                                    <div class="row justify-content-center">
                                       <div class="col-xs-12 col-md-12 col-lg-5 me-4">
                                          <div class="change-layout mt-3 me-3">Change Layout</div>
                                       </div>
                                       <div class="col-xs-12 col-md-12 col-lg-5">
                                          <!-- <div class="close close_multi mt-2 ms-5">×</div> -->
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="multiple-items classic change-all">
                                       <div>
                                          <img
                                             src="public\images\color\wave-blue.png"
                                             class="type-sel"
                                             alt=""
                                             data-type="wave"
                                             data-clr="blue"
                                             />
                                       </div>
                                       <div>
                                          <img
                                             src="public\images\color\slop-blue.png"
                                             class="type-sel"
                                             alt=""
                                             data-type="slop"
                                             data-clr="blue"
                                             />
                                       </div>
                                       <div>
                                          <img
                                             src="public\images\color\hexa-blue.png"
                                             class="type-sel"
                                             alt=""
                                             data-type="hexa"
                                             data-clr="blue"
                                             />
                                       </div>
                                       <div>
                                          <img
                                             src="public\images\color\flat-blue.png"
                                             class="type-sel"
                                             alt=""
                                             data-type="flat"
                                             data-clr="blue"
                                             />
                                       </div>
                                       <div>
                                          <img
                                             src="public\images\color\side-blue.png"
                                             class="type-sel"
                                             alt=""
                                             data-type="side"
                                             data-clr="blue"
                                             />
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row justify-content-center">
                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                          <button class="cancel-parent ms-5 close close_multi">Cancel</button>
                                       </div>
                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                          <button class="save-parent ms-5 mb-3">Save</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-3" >
                           <div class="wrapper">
                              <button class="no-image   card-1" id="img-result"><i class="bi bi-plus-lg"></i></button>
                           </div>
                           <div class="upload-result">
                              <button class="hide-button">Close</button>
                              <pre class="upload-result__content"></pre>
                           </div>
                           <p id="change-img-head" class="py-2">Company Logo</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-3" >
                           <div class="wrapper">
                              <button class="no-image bi bi-plus-lg  card-1" id="img-result">Upload Image</button>
                           </div>
                           <div class="upload-result">
                              <button class="hide-button">Close</button>
                              <pre class="upload-result__content"></pre>
                           </div>
                           <p id="change-img-head" class="py-2">Profile Picture</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-3" >
                           <div class="wrapper">
                              <button class="no-image bi bi-plus-lg  card-1" id="img-result">Upload Image</button>
                           </div>
                           <div class="upload-result">
                              <button class="hide-button">Close</button>
                              <pre class="upload-result__content"></pre>
                           </div>
                           <p id="change-img-head" class="py-2">Cover Image</p>
                        </div>
                     </div>
                  </div>
                  <div class="row ms-xl-2 ms-lg-5 ms-md-3 ms-5 mt-3 mx-2" id="add-body">
                     <p id="add-more" class="mt-3">Add more information:</p>
                     <p id="gen">General</p>
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 card-1" id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu1');" class="color">
                              <i class="bi bi-buildings" id="add-icon"></i>
                              <p id="add-text">Company</p>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 card-1" id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu2');" class="color" >
                              <i class="bi bi-browser-chrome" id="add-icon"></i>
                              <p id="add-text">Website</p>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 card-1" id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu3');" class="color">
                              <i class="bi bi-telephone-fill" id="add-icon"></i>
                              <p id="add-text">Phone</p>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 card-1" id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu4');" class="color">
                              <i class="bi bi-envelope-at" id="add-icon"></i>
                              <p id="add-text">E mail</p>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 card-1" id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu5');" class="color">
                              <i class="bi bi-geo-alt-fill" id="add-icon"></i>
                              <p id="add-text">Address</p>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3 " id="add-details">
                           <a href="#web" onclick="toggleVisibility('Menu6');" class="color">
                              <i class="bi bi-link-45deg" id="add-icon"></i>
                              <p id="add-text">Link</p>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="row ms-xl-2 ms-lg-5 ms-md-3 ms-5 mt-3" id="social-body">
                     <p id="add-more" class="mt-3">Social Links</p>
                     <p id="links-head">Add a link to let people connect with you</p>
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu7');" >
                           <img src="public\images\add\Frame 1405.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu8');" >
                           <img src="public\images\add\Frame 1415.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu9');" >
                           <img src="public\images\add\Frame 1406.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu10');" >
                           <img src="public\images\add\Frame 1417.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu11');" >
                           <img src="public\images\add\Frame 1416.png" alt="insta" id="link-img">
                           </a>
                        </div>
                     </div>
                     <!-- row-2 -->
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu12');" >
                           <img src="public\images\add\Frame 1418.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu13');" >
                           <img src="public\images\add\Frame 1407.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu14');" >
                           <img src="public\images\add\Frame 1408.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu15');" >
                           <img src="public\images\add\Frame 1409.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu16');" >
                           <img src="public\images\add\Frame 1413.png" alt="insta" id="link-img">
                           </a>
                        </div>
                     </div>
                     <!-- row-3 -->
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu17');" >
                           <img src="public\images\add\Frame 1421.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu18');" >
                           <img src="public\images\add\Frame 1419.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu19');" >
                           <img src="public\images\add\Frame 1420.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu20');" >
                           <img src="public\images\add\Frame 1422.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu21');" >
                           <img src="public\images\add\Frame 1412.png" alt="insta" id="link-img">
                           </a>
                        </div>
                     </div>
                     <!-- row-4 -->
                     <div class="row justify-content-evenly mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu22');" >
                           <img src="public\images\add\Frame 1410.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu23');" >
                           <img src="public\images\add\Frame 1411.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu24');" >
                           <img src="public\images\add\Frame 1414.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu25');" >
                           <img src="public\images\add\Frame 1423.png" alt="insta" id="link-img">
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-lg-3 mt-md-3 mt-3" id="links-body">
                           <a href="#web" onclick="toggleVisibility('Menu26');" >
                           <img src="public\images\add\Frame 1424.png" alt="insta" id="link-img">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script>
         //COLOR
                           $(function () {
                     $("#big-image3 img:eq(0)").nextAll().hide();
                     $(".small-images img").click(function (e) {
                       var index = $(this).index();
                       $("#big-image3 img").eq(index).show().siblings().hide();
                     });
                   });

                   $(function () {
                     $("#big-image2 img:eq(0)").nextAll().hide();
                     $(".small-images img").click(function (e) {
                       var index = $(this).index();
                       $("#big-image2 img").eq(index).show().siblings().hide();
                     });
                   });
                   $(function () {
                     $("#big-image8 img:eq(0)").nextAll().hide();
                     $(".small-images img").click(function (e) {
                       var index = $(this).index();
                       $("#big-image8 img").eq(index).show().siblings().hide();
                     });
                   });

                   $(function () {
                     $("#big-imagenot img:eq(0)").nextAll().hide();
                     $(".small-images img").click(function (e) {
                       var index = $(this).index();
                       $("#big-imagenot img").eq(index).show().siblings().hide();
                     });
                   });

                   $(function () {
                     $("#big-image img:eq(0)").nextAll().hide();
                     $(".classic img").click(function (e) {
                       var index = $(this).index();
                       $("#big-image img").eq(index).show().siblings().hide();
                     });
                   });
                   var url = "public/images/color/";
                   $(".type-sel").on("click", function () {
                     var src = $(this).attr("src");
                     var typ = $(this).attr("data-type");
                     var clr = $(this).attr("data-clr");
                     // var url = "image/color/";
                     $("#selected")
                       .attr("src", url + "lg-" + typ + "-" + clr + ".png")
                       .attr("data-type", typ);
                   });

                   $(".code").on("click", function () {
                     var clr = $(this).attr("data-clr");
                     var typ = $("#selected").attr("data-type");

                     $("#selected").attr("src", url + "lg-" + typ + "-" + clr + ".png");
                     $(".change-all")
                       .find('[data-type="wave"]')
                       .attr("src", url + "wave-" + clr + ".png")
                       .attr("data-clr", clr);
                     $(".change-all")
                       .find('[data-type="slop"]')
                       .attr("src", url + "slop-" + clr + ".png")
                       .attr("data-clr", clr);
                     $(".change-all")
                       .find('[data-type="hexa"]')
                       .attr("src", url + "hexa-" + clr + ".png")
                       .attr("data-clr", clr);
                     $(".change-all")
                       .find('[data-type="flat"]')
                       .attr("src", url + "flat-" + clr + ".png")
                       .attr("data-clr", clr);
                       $(".change-all")
                       .find('[data-type="side"]')
                       .attr("src", url + "side-" + clr + ".png")
                       .attr("data-clr", clr);
                   });


         //form

                  var divs = ["Menu1", "Menu2", "Menu3", "Menu4","Menu5","Menu6","Menu7","Menu8","Menu9","Menu10","Menu11","Menu12","Menu13","Menu14","Menu15","Menu16","Menu17","Menu18","Menu19","Menu20","Menu21","Menu22","Menu23","Menu24","Menu25","Menu26","Menu27","Menu28"];
                  var visibleDivId = null;
                  function toggleVisibility(divId) {
                  if (visibleDivId === divId) {
                    //visibleDivId = null;
                  } else {
                    visibleDivId = divId;
                  }
                  hideNonVisibleDivs();
                  }
                  function hideNonVisibleDivs() {
                  var i, divId, div;
                  for (i = 0; i < divs.length; i++) {
                    divId = divs[i];
                    div = document.getElementById(divId);
                    if (visibleDivId === divId) {
                      div.style.display = "block";
                    } else {
                      div.style.display = "none";
                    }
                  }
                  }



         //modal

                   var modalparent = document.getElementsByClassName("modal_multi");

                  var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
                  var modal_btn_multi = document.getElementsByClassName("myBtn_multi");
                  var span_close_multi = document.getElementsByClassName("close_multi");

                  function setDataIndex() {

                  for (i = 0; i < modal_btn_multi.length; i++) {
                  modal_btn_multi[i].setAttribute("data-index", i);
                  modalparent[i].setAttribute("data-index", i);
                  span_close_multi[i].setAttribute("data-index", i);
                  }
                  }

                  for (i = 0; i < modal_btn_multi.length; i++) {
                  modal_btn_multi[i].onclick = function () {
                  var ElementIndex = this.getAttribute("data-index");
                  modalparent[ElementIndex].style.display = "block";
                  };

                  span_close_multi[i].onclick = function () {
                  var ElementIndex = this.getAttribute("data-index");
                  modalparent[ElementIndex].style.display = "none";
                  };
                  }
                  window.onload = function () {
                  setDataIndex();
                  };

                  window.onclick = function (event) {
                  if (
                  event.target === modalparent[event.target.getAttribute("data-index")]
                  ) {
                  modalparent[event.target.getAttribute("data-index")].style.display =
                  "none";
                  }

                  if (event.target === modal) {
                  modal.style.display = "none";
                  }
                  };

         //imgupload
                (function () {
                var uploader = document.createElement('input'),
                image = document.getElementById('img-result');
                uploader.type = 'file';
                uploader.accept = 'image/*';
                image.onclick = function() {
                uploader.click();
                }
                uploader.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(evt) {
                image.classList.remove('no-image');
                image.style.backgroundImage = 'url(' + evt.target.result + ')';
                var request = {
                itemtype: 'test 1',
                brand: 'test 2',
                images: [{
                data: evt.target.result
                }]
                };
                document.querySelector('.show-button').style.display = 'block';
                document.querySelector('.upload-result__content').innerHTML = JSON.stringify(request, null, '  ');
                }
                reader.readAsDataURL(uploader.files[0]);
                }
                document.querySelector('.hide-button').onclick = function () {
                document.querySelector('.upload-result').style.display = 'none';
                };
                document.querySelector('.show-button').onclick = function () {
                document.querySelector('.upload-result').style.display = 'block';
                };
                })();




         //sidebar


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

                  $( function() {
                  $( "#datepicker" ).datepicker();
                  } );

      </script>
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('resources\slick-1.8.1 (1)\slick-1.8.1\slick\slick.min.js')}}"></script>
      <script>
         $('.multiple-items').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 3
         });
      </script>
   </body>
</html>
