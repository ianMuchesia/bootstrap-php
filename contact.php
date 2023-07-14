<?php require("views/header.php")?>

<section>
    
<div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Experience the best from our facilities.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <h5>Address</h5>
                <a href="" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i>
                </a>
                <h5 class="mt-4">Call us</h5>
                <a href="tel: +" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 
                </a>
                <br>

                
                   
                            <a href="tel:" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> 
                            </a>
                    
              



                <h5 class="mt-4">Email</h5>

                <a href="mailto:" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> 
                </a>

                <h5 class="mt-4">Follow us</h5>
               
                  
                        <a href="" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-instagram me-1"></i>
                        </a>
                      
               
                
                <a href=" ?>" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-linkedin me-1"></i>   
                </a>

                <a href=" ?>" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i>
                </a>  
            </div>
            
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email Address</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3 shadow-none">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?php require("views/footer.php")?>