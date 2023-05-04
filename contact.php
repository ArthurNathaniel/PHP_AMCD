<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
</head>

<body>

    <div class="overflow-hidden">

        <div id="contact-hero">
            <?php include 'navbar.php'; ?>
            <div class="long">
                <h1>Contact Us</h1>
            </div>
        </div>


        <div class="map">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4235221739336!2d-1.5098889254031038!3d6.718060820872638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdbeb9a3be0d5c3%3A0xb45ed169bb314f2!2sAgyeiwaa%20Memorial%20Company%20Limited!5e0!3m2!1sen!2sgh!4v1682457692508!5m2!1sen!2sgh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <section>
            <div class="row gy-5 contact-form">
                <div class="col-md-8">
                    <form action="" class="row me-form">
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <h3>Send Message</h3>

                        </div>
                        <div class="form_group col-md-6">

                            <input type="text" placeholder="Your Name" required>
                        </div>

                        <div class="form_group col-md-6">

                            <input type="email" placeholder="Email" required>
                        </div>

                        <div class="form_group col-md-6">

                            <input type="number" min="0" placeholder="Phone Number" required>
                        </div>
                        <div class="form_group col-md-6">

                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="form_group col-md-12">

                            <textarea id="message" placeholder="Message" required></textarea>
                        </div>

                        <input type="submit" class="submit" value="Send Message">

                    </form>
                </div>


                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 boxes">
                            <h6>Phone Number:</h6>
                            <p>
                                <a href="tel:+233556120878" style="text-decoration:none; color:#000;">
                                    <i class="fas fa-phone-alt"></i>
                                    +233556120878
                                </a>
                            </p>
                            <p> <a href="tel: +233559558041" style="text-decoration:none; color:#000;">
                                    <i class=" fas fa-phone-alt"></i>
                                    +233559558041
                                </a></p>
                        </div>

                        <div class="col-md-12 boxes">
                            <h6>Email Address:</h6>
                            <p><a href="mailto:" style="text-decoration: none; color:#000;"> <i class="fas fa-envelope"></i>
                                    info@agyeiwaamemorialroofing.com</a></p>
                        </div>

                        <div class="col-md-12 boxes">
                            <h6>Location:</h6>
                            <p><i class="fas fa-map-marker-alt"></i>
                                <a href="https://goo.gl/maps/boxVTAfqB1mNFXEJ6" style="color:#000; text-decoration:none;">
                                    Adako Jachie Junction, Opposite Kwamo Kumasi, Ghana
                                </a>
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>


        <?php include 'footer.php'; ?>

    </div>
    <!--Animate on Scroll-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--Lightbox JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>