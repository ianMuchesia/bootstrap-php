<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Transalvania</title>

    <?php require('views/links.php'); ?>
 
</head>
<body class="bg-light">

    <?php require('views/header.php'); ?>


    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/259912982.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Kilifi Bay</h4>
                        <div class="features">
                            <h5 class="mb-1">Rooms</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap">
                                    <h6 class="mb-4 mt-4">Garden Chalet</h6>
                                    <img src="img/img_19150_1.jpg" class="card-img-top" alt="...">

                                    <p class="mt-2">59.13 USD/NIGHT</p>
                                </span><br>

                                <div class="facilities mb-1">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Free WiFi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        LCD TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Cable TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Shower
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Kettle
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        King-Size Bed
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        AC
                                    </span>
                                </div>
                        </div>

                        <h6 class="mb-1">Other Rooms</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Sea View Room
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Junior Suite
                        </span>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Hotel Class</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/155314811011a52f.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Reef Hotel</h4>
                        <div class="features">
                            <h5 class="mb-1">Rooms</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap">
                                    <h6 class="mb-4 mt-4">Sea View Room</h6>
                                    <img src="img/sea_view3.jpg" class="card-img-top" alt="...">

                                    <p class="mt-2">107.10 USD/NIGHT</p>
                                </span><br>

                                <div class="facilities mb-1">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Free WiFi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Safety Deposit Box
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Satellite TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        King-Size Bed
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Bathroom & Toilet
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Desk
                                    </span>
                                </div>
                        </div>

                        <h6 class="mb-1">Other Rooms</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Garden View Room
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Family Room
                        </span>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Hotel Class</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/219657764.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Diani Sea Resort</h4>
                        <div class="features">
                            <h5 class="mb-1">Rooms</h6>
                                <span class="badge bg-light text-dark mb-3 text-wrap">
                                    <h6 class="mb-4 mt-4">Family Bahari Room</h6>
                                    <img src="img/Bahari 4 - Sea.jpeg" class="card-img-top" alt="...">

                                    <p class="mt-2">213.21 USD/NIGHT</p>
                                </span><br>

                                <div class="facilities mb-1">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Free WiFi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        LCD TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Cable TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Bathroom & Toilet
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Fridge
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        2 Bedrooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        AC
                                    </span>
                                </div>
                        </div>

                        <h6 class="mb-1">Other Rooms</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Comfort Room
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                            Bahari Room
                        </span>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Hotel Class</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="img/wifi.svg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="img/house-heart.svg" width="80px">
                <h5 class="mt-3">House Keeping</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="img/tv.svg" width="80px">
                <h5 class="mt-3">Cable TV</h5>

            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="img/p-circle.svg" width="80px">
                <h5 class="mt-3">Parking</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="img/fan.svg" width="80px">
                <h5 class="mt-3">Cooling Fan</h5>

            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-5">
                    <div class="profile d-flex align align-items-center p-4">
                        <img src="img/person.svg" width="30px">
                        <h6 class="m-0 ms-2">Martin Luther</h6>
                    </div>
                    <p class="m-0" style="font-size: 12px; line-height: 1.5rem;">

                        "I had a fantastic stay at the Diani Sea Resort.
                        The property was stunning, with beautiful gardens and direct access to the beach.
                        The rooms were spacious and comfortable, with all the necessary amenities.
                        The staff was friendly and accommodating, and the food at the on-site restaurant was delicious.
                        I also appreciated the resort's focus on sustainability and eco-friendliness.
                        Overall, a wonderful experience."
                    </p>
                    <div class="d-md-block d-flex align-items-center mt-3">
                        <div class="rating mb-md-0 mb-3">
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-5">
                    <div class="profile d-flex align align-items-center p-3">
                        <img src="img/person.svg" width="30px">
                        <h6 class="m-0 ms-2">Joyce Awino</h6>
                    </div>
                    <p class="m-0" style="font-size: 12px; line-height: 1.5rem;">

                        "I recently stayed at the Nyali Reef Hotel and it was an unforgettable experience.
                        The staff was incredibly welcoming and made me feel at home from the moment I arrived.
                        The rooms were spacious and well-appointed, with beautiful views of the ocean.
                        The on-site amenities were also top-notch, with a beautiful pool, delicious restaurants,
                        and plenty of activities to keep me entertained.
                        I would highly recommend this hotel to anyone looking for a relaxing and luxurious getaway."
                    </p>
                    <div class="d-md-block d-flex align-items-center mt-3">
                        <div class="rating mb-md-0 mb-3">
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-5">
                    <div class="profile d-flex align align-items-center p-4">
                        <img src="img/person.svg" width="30px">
                        <h6 class="m-0 ms-2">Maxwel Otieno</h6>
                    </div>
                    <p class="m-0" style="font-size: 12px; line-height: 1.5rem;">

                        "I recently visited the Kilifi Bay for a romantic weekend getaway and it was absolutely perfect.
                        The property was secluded and peaceful,
                        with stunning views of the ocean.
                        The rooms were spacious and luxurious, with all the necessary amenities.
                        The staff was attentive and made sure that every detail of our stay was perfect.
                        We especially loved the on-site spa and the delicious food at the restaurant.
                        We would definitely return to Kilifi Bay in the future."
                    </p>
                    <div class="d-md-block d-flex align-items-center mt-3">
                        <div class="rating mb-md-0 mb-3">
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>


 <?php require('views/footer.php'); ?>


</body>

</html>