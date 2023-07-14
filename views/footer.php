<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font for-bold fs-3 mb-2" >Hotel Transalvania</h3>
            <p>
                We ensure your experience is met at maximum possiblitity.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-decoration-none text-dark">Home</a><br>
            <a href="rooms.php" class="d-inline-block mb-2 text-decoration-none text-dark">Rooms</a><br>
            <a href="facilities.php" class="d-inline-block mb-2 text-decoration-none text-dark">Facilities</a><br>
            <a href="contact.php" class="d-inline-block mb-2 text-decoration-none text-dark">Contuct Us</a><br>
            <a href="about.php" class="d-inline-block mb-2 text-decoration-none text-dark">About</a>
        </div>
        <!-- <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us</h5>
            <?php
                if($contact_r['insta']){
                    echo<<<data
                        <a href="$contact_r[insta]" class="d-inline-block mb-2 text-dark text-decoration-none">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </a><br>
                    data;
                }
            ?>
            <a href="<?php echo $contact_r['ln'] ?>" class="d-inline-block mb-2 text-dark text-decoration-none">
                <i class="bi bi-linkedin me-1"></i>Linked In
            </a><br>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none">
                <i class="bi bi-facebook me-1"></i>Facebook
            </a><br>
        </div> -->
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-01">Designed and Developed by Jonnel</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function setActive()
    {
        let navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0; i<a_tags.length; i++)
        {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name)>=0){
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();
    const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
            var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
            },
            "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
            },
            "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
            },
        },
        });     
</script>
</body>

</html>