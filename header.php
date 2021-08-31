<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>

    <!--Boostrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- Owl-carousel CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS file-->
    <link rel="stylesheet" href="./style.css">

    <?php
    
    require('functions.php'); 
       
    ?>

</head>
<body>

    <!--start Header-->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-20 text-black-50 m-0">Nikola Skadric 265/18</p>
                <div class="font-rale font-size-14">
				    <a href="#" class="px-3 border-right border-left text-dark">Log In/Sign In</a>
                <div>
            </div>

        </header>
        <!--end Header-->
        <!-- BS navbar -->
            <nav class="navbar navbar-expand-lg navbar-light navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">Mobile Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rasprodaja</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Kategorije</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Proizvodi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">O nama</a>
                      </li>
                </ul>
                <form action="#" class="font-size-14 font-rale">
                    <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                    </a>
                </form>
                </div>
            </nav>
        <!-- end BS navbar -->


    <!--start main-->
        <main id="main-site">