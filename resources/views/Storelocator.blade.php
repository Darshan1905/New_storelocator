<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Store Locator</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @media (min-width: 576px){
           .store-modal .modal-dialog {
              max-width: 1300px !important;
              margin: 4.75rem auto !important;
            /* margin-right: 20px !important; */
             }
        }

        .get_directions{
            padding: 6px 4%;
            background: transparent;
            color: black;
            border: 2px solid black;
            margin: unset;
            font-size: unset;
        }
        .get_directions:hover{
            background: black;
            color: white;
            transition: .5s;
        }
        .store_details{
            color: black;
        }
        .store_details:hover{
            color: black;
        }
        .four_img img{
            width: 50%;
            float: left;
            padding: 3%;
        }
       .store-modal .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: Transparent !important;
        background-clip: padding-box;
        border: 0 !important;
        border-radius: none !important;
        outline: 0;
        }

        .store-modal .modal{
            top:-40px !important;
        }   

        .store-modal {
            background:#00000060 !important;
        }

        .prev{
                position: absolute;
                left: 0;
                 top: 45%
        }
        .next{
                position: absolute;
                right: 0;
                 top: 45%
        }
        
    </style>
</head>

<body>

    <div class="container-fluid bg-white text-black headercontainer">
        <div class="firstnav mt-3 pe-5 text-center">
            <nav class="allnav">
                <ul class="nav-links">
                    <li><a href="{{ route('about') }}" class="leftmenu">ABOUT US</a></li>
                    <li><a href="{{ route('Brands') }}" class="leftmenu">BRANDS</a></li>
                    <li>
                        <a href="{{ route('Maisondeperfums') }}" class="leftmenu">MAISON DES PARFUMS</a>
                    </li>
                    <li>
                        <a href="{{ route('Index') }}" class="centermenu"><img src="pictures/logoblack.png"
                                alt="" /></a>
                    </li>
                    <li><a href="{{ route('Ourstores') }}" class="rightmenu">OUR STORES</a></li>
                    <li>
                        <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                    </li>
                    <li>
                        <a href="{{ route('Storelocator') }}" class="rightmenu active">STORE LOCATOR</a>
                    </li>
                </ul>
                <div class="float-end language-class">
                                    <!-- Button trigger modal -->

    <img src="/pictures/internet-black.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:25px" >

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
      <div class="google-class" id="google_element"></div>
      </div>

    </div>
  </div>
</div>

</div>
            </nav>
        </div>
        <div class="secondnav">
            <nav class="navbar navbar-expand-xm navbar-light p-md-3">
                <div class="container">
                    <a class="navbar-brand" class="centermenu" href="{{ route('Index') }}"><img
                            src="pictures/logoblack.png" width="40%" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav d-flex flex-column text-start mt-3">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Brands') }}">BRANDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Ourstores') }}">OUR STORES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('createForm') }}">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Storelocator') }}">STORE LOCATOR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <img src="pictures/store-locator-01.png" width="100%" alt="" />


    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- <div class="col-md-1"></div>
            <div class="col-md-10">
                <div style="padding-left: 17px;">
                    <p><b>Inorbit Mall – Vadodara</b></p>
                    <p>Ground Floor Alembic Rd, Opposite to Alembic School, <br> Gorwa, Vadodara, Gujarat - 390023.</p>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="four_img">
                            <img src="http://localhost/beuty_concept/public/pictures/popup1.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup2.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup3.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7" style="padding-top: 4%;">
                        <video style="width: 100%;" controls>
                            <source src="http://localhost/beuty_concept/public/video/Bvlgari Rose Goldea Blossom Delight EDT.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div> -->
            <div class="col-md-6 storecard">
                <div class="wrapper mt-3 mb-5">
                    <div class="st">
                        <label class="storelabel">
                            <select onchange="store()" id="store" class="form-select form-store"
                                aria-label="Default select example">
                                <option selected value="0">Store</option>


                                <!---   store data   --->
                                @foreach ($storedata as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                                <!---   store data   --->


                            </select>
                        </label>
                    </div>
                    
                    <div class="st">
                        <label class="storelabel-2">
                            <select onchange="storeCity()" id="storeCity" class="form-select form-store appendcity"
                                aria-label="Default select example">
                                <option selected value="0">City</option>


                                <!---   city data   --->
                                <!-- @foreach ($storecity as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach -->
                                <!---   city data   --->


                            </select>
                        </label>
                    </div>
                </div>
                <div class="scroll-container">


                    <!--------- Your Store Data-------->

                    <div class="scroll-page store">
                     @if($storeaddres)
                     @foreach ($storeaddres as $key => $value) 
                     <?php
                     $images = array();
                      $images = DB::table('addresses_images')->where('address_id',$value->id)->get();
                      ?>
                        <p class="mt-m"><b>{{ $value->storename }}</b></p>

                            <p>{{ $value->storeaddress }}</p>
                            <a class="getdirectionbtn" href="{{ $value->Direction }}" target="_blank" >Get direction</a>
                             <a data-bs-toggle="modal" data-bs-target="#examplal{{ $value->id }}"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                             <hr>


                              <div class="modal fade store-modal" id="examplal{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">



                                <div class="modal-content">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                      <div class="container">
                                        <div class="slideshow-container">
                                        @if(!empty($images)) 
                                        @foreach ($images as $key => $img) 
                                           
                                          <div class="mySlides1">
                                            <img style="width:100%"  src="{{ URL::to('/') }}/{{$img->image}}" id="imageResult" style="width:100%" height="600px" />
                                            <div class="note">
                                            </div>
                                          </div>
                                        @endforeach  
                                        @endif
                                        </div>
                                        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                                          <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                           
                     @endforeach  
                     @endif
   
                    </div>
                    

                    <!--------- Your Store Data-------->
                </div>
            </div>

            <!-------------map ifram--------------->
            <div class="col-lg-6">
                <div class="iframes">
                     <iframe
                        src="https://www.google.com/maps/d/embed?mid=1MuChuinf5MEmMcCwBcM3bZjpuILEPyc&hl=en&ehbc=2E312F"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe">

                </div>
            </div>


            <!-------------map ifram--------------->
        </div>
    </div>
    <!-- footer -->

    <x-footer />
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade store-modal" id="examplal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">



    <div class="modal-content">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="container">
            <div class="slideshow-container showall2">
            


            </div>
            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
              <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <script type="text/javascript" src="{{url('js/storelocator.js')}}"></script>
    <script> <link rel="stylesheet" href="style.css"></script>
    <script src="main.js"></script>

    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>

<script>

$(".button_1").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/pages/test/",
        data: {
            id: $(this).val(), // < note use of 'this' here
            access_token: $("#access_token").val()
        },

    });
});

    </script>

</body>

</html>
