<?php require("views/header.php")?>
<div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        Welcome to Hotel Transylvania, your go-to destination for a memorable coastal getaway in Kenya. 
        We are proud to offer our guests a range of accommodation options in some of the most breathtaking locations along the coast, 
        including Diani, Mombasa, Nyali, and Kilifi. At Hotel Transylvania, we believe that everyone deserves a relaxing and enjoyable vacation, 
        which is why we offer a range of amenities and services to suit every budget and preference. 
        Our dedicated team is committed to providing you with the highest levels of comfort and hospitality, 
        from luxurious beachfront resorts to cozy guesthouses. With our easy-to-use online booking system, 
        you can browse through our selection of accommodations, compare prices and features, and book your stay with just a few clicks. 
        Whether you're planning a romantic escape, a family vacation, or a business trip, 
        Hotel Transylvania is your ideal choice for a memorable coastal experience in Kenya.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <img src="img/imageabout.jpg" class="w-100">
            </div>
            <div class="col-lg-6 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <h3 class="mb-3">Jonnel Oduor</h3>
                <p>
                I am a tech enthusiast, a lover of culture and resides in Coastal region of Kenya, particulaly Mombasa. 
                I developed this website and cordinated with travel agencies and made Hotel Transalvania Possible.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/hotel-svgrepo-com.svg" width="70px">
                    <h4 class="mt-3">50+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/users-svgrepo-com.svg" width="70px">
                    <h4 class="mt-3">100+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/contact-review-communication-svgrepo-com (1).svg" width="70px">
                    <h4 class="mt-3">70+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/hotel-staff-svgrepo-com.svg" width="70px">
                    <h4 class="mt-3">100+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">

                <!-- <?php
                    // $about_r = selectAll('team_details');
                    // $path=ABOUT_IMG_PATH;

                    // while($row = mysqli_fetch_assoc($about_r)){
                    //     echo<<<data
                    //         <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    //             <img src="img/$path$row[picture]" class="w-100">
                    //             <h5 class="mt-2">$row[name]</h5>
                    //         </div>
                    //     data;
                    // }
                ?> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
<?php require("views/footer.php")?>