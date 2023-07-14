
<?php require('views/header.php'); ?>
<section>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
    
</div>
<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTERS</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <form class="availability-form" action="rooms.php" method="POST">
                                        <label class="form-label">Check-in</label>
                                        <input type="date" class="form-control shadow-none mb-3" name="checkIn">
                                        <label class="form-label">Check-out</label>
                                        <input type="date" class="form-control shadow-none" name="checkOut">
                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" name="facilityOne">
                                        <label class="form-check-label" for="f1">Facility one</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" name="facilityTwo">
                                        <label class="form-check-label" for="f2">Facility two</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1" name="facilityThree">
                                        <label class="form-check-label" for="f3">Facility three</label>
                                    </div>
                                </div>

                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <label class="form-label">Adults</label>
                                            <input type="number" class="form-control shadow-none" name="adults">
                                        </div>
                                        <div>
                                            <label class="form-label">Children</label>
                                            <input type="number" class="form-control shadow-none" name="children">
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</button>
                            </form>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/img_19150_1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Garden Chalet</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Room size: 35 metres squared/377 feet squared
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Garden view
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Balcony/terrace
                                    </span>
                                </div>

                                <div class="facilities mb-1">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Free WiFi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Mini bar
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Satellite/Cable channels
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Bathroom & Toilet
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Refrigerator
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        2 Bedrooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        AC
                                    </span>
                                </div>

                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mt-4">59.13 USD/NIGHT</h6>
                                <form class="booking-form" action="rooms.php" method="POST">
                                    <input type="hidden" name="roomName" value="Garden Chalet">
                                    <input type="hidden" name="roomPrice" value="59.13">
                                    <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</button>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/sea_view3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Sea View Room</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 double bed or 2 single beds
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Balcony facing views of the sea
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Private bathroom & WC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        4 Sofa Sets
                                    </span>
                                </div>

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

                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mt-4">107.10 USD/NIGHT</h6>
                                <!-- Booking form -->
                                <form class="booking-form" action="rooms.php" method="POST">
                                    <input type="hidden" name="roomName" value="Sea View Room">
                                    <input type="hidden" name="roomPrice" value="107.10">
                                    <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</button>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="img/Bahari 4 - Sea.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Family Bahari Room</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Room size: 41 metres square/ 441 feet square
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Garden View
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Balcony/terrace
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Shower
                                    </span>
                                </div>

                                <div class="facilities mb-1">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Free WiFi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Mosquito net
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
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Baby cot(upon request)
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Clothes rack
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                        Smoke detector
                                    </span>
                                </div>

                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mt-4">213.21 USD/NIGHT</h6>
                                <!-- Booking form -->
                                <form class="booking-form" action="rooms.php" method="POST">
                                    <input type="hidden" name="roomName" value="Family Bahari Room">
                                    <input type="hidden" name="roomPrice" value="213.21">
                                    <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</button>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>
<?php require("views/footer.php")?>