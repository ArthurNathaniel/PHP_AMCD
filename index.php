<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
  </head>

  <body>
    <div class="overflow-hidden">
      <div id="hero">
        <?php include 'navbar.php'; ?>

        <div class="text row">
          <h1>
            Top-Quality Roofing <br />
            Services for Property <br />
            Protection
          </h1>
          <p>Trust our experts for all your roofing needs.</p>
          <div class="overflow-hidden">
            <div class="request">
              <div class="row">
                <form action="" class="col-md-6 footer">
                  <div class="row form_all">
                    <div class="col-md-4 form_input">
                      <input
                        type="text"
                        placeholder="Your name * "
                        name="name"
                        required
                      />
                    </div>
                    <div class="col-md-4 form_input">
                      <input
                        type="number"
                        min="0"
                        placeholder="Phone number * "
                        name=" number"
                        required
                      />
                    </div>
                    <div class="col-md-4 form_btn">
                      <!-- <a href="" class="req-btn">Request a call</a> -->
                      <input
                        type="submit"
                        class="req-btn"
                        value="Request a call"
                      />
                    </div>
                  </div>
                </form>
                <div class="col-md-6"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="whole">
        <div class="four" data-aos="fade-down-right">
          <div class="box" data-aos="fade-up">
            <div class="circle">
              <i class="fas fa-hard-hat"></i>
            </div>
            <br />
            <h5>DURABLE</h5>
          </div>
          <div class="box" data-aos="fade-right">
            <div class="circle">
              <i class="fas fa-fire-extinguisher"></i>
            </div>
            <br />

            <h5>RESISTANT TO FIRE</h5>
          </div>
          <div class="box" data-aos="fade-down">
            <div class="circle">
              <i class="fas fa-solar-panel"></i>
            </div>
            <br />
            <h5>SOLAR PANEL COMPATIBLE</h5>
          </div>
          <div class="box-" data-aos="fade-left">
            <div class="circle">
              <i class="fas fa-sun"></i>
            </div>
            <br />
            <h5>RESISTANT TO UV</h5>
          </div>
        </div>
      </div>

      <section
        style="background-color: #f9f9f9; padding-block: 50px"
        data-aos="zoom-in"
      >
        <div class="product">
          <h1>OUR PRODUCTS</h1>
          <div class="our-product">
            <div class="p-box" data-aos="flip-left">
              <div class="card">
                <img
                  src="images/long_span.jpeg"
                  class="card-img-top"
                  alt="Long-span-roofing-sheet"
                />
                <div class="up">
                  <img src="images/roof.png" alt="long-span-roofing-sheet" style="width: 44px" />
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <a href="long_span.php" class="btn-">Long Span </a>
                  </p>
                </div>
              </div>
            </div>

            <div class="p-box" data-aos="flip-right">
              <div class="card">
                <img
                  src="images/ibr.jpg"
                  class="card-img-top"
                  alt="ibr-roofing-sheet"
                />
                <div class="up">
                  <!-- <i class="fas fa-network-wired"></i> -->
                  <img src="images/roof.png" alt="ibr-roofing-sheet" style="width: 44px" />
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <a href="ibr.php" class="btn-">IBR</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="p-box" data-aos="flip-up">
              <div class="card">
                <img
                  src="images/idt.jpeg"
                  class="card-img-top"
                  alt="idt-roofing-sheet"
                />
                <div class="up">
                  <img src="images/roof.png" alt="idt-roofing-sheet" style="width: 44px" />
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <a href="idt.php" class="btn-">IDT</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="p-box" data-aos="flip-down">
              <div class="card">
                <img
                  src="images/corrugated_roofing.jpg"
                  class="card-img-top"
                  alt="corrugated-roofing-sheet"
                />
                <div class="up">
                  <img src="images/roof.png" alt="" style="width: 44px" />
                </div>
                <div class="card-body">
                  <p class="card-text">
                    <a href="corrugated_roofing.php" class="btn-"
                      >Corrugated Roofing</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section data-aos="fade-up" data-aos-duration="1000">
        <div class="us">
          <h1>WHY CHOOSE US</h1>
        </div>
        <div class="row merit">
          <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    <i
                      class="fas fa-comments"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    FREE TECHNICAL ADVICE & ESTIMATE
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    At no additional cost, we offer professional estimates and
                    assist clients with product design decisions, including
                    color and thickness options.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    <i
                      class="fas fa-bolt"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    <!-- Rapid production and delivery. -->
                    RAPID PRODUCTION & DELIVERY
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Agyeiwaa Memorial Roofing boasts the fastest production and
                    delivery times in the roofing industry, with an average of
                    three to five working days.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    <i
                      class="fas fa-cube"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    HIGH-QUALITY MATERIALS
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Experience the durability and reliability of our
                    high-quality roofing materials at Agyeiwaa Memorial Roofing.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    <i
                      class="fas fa-tools"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    INSTALLATION BY EXPERTS
                  </button>
                </h2>
                <div
                  id="flush-collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    At Agyeiwaa Memorial Roofing, we ensure that all our
                    building materials are installed to the highest standards.
                    We offer a warranty on all our installations as proof of our
                    commitment to excellence.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive"
                    aria-expanded="false"
                    aria-controls="flush-collapseFive"
                  >
                    <i
                      class="fas fa-headset"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    AFTER-SALES SERVICES
                  </button>
                </h2>
                <div
                  id="flush-collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    At Agyeiwaa Memorial Roofing, we value our customers and
                    strive to ensure their satisfaction with our services. To
                    that end, we conduct follow-ups after every sale to ensure
                    that you are pleased with our work. Additionally, we inspect
                    our projects and respond to any complaints within 72 hours.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix"
                    aria-expanded="false"
                    aria-controls="flush-collapseSix"
                  >
                    <i
                      class="fas fa-tags"
                      style="
                        margin-right: 10%;
                        border: 2px solid;
                        padding: 10px;
                        border-radius: 50%;
                      "
                    ></i>
                    COMPETITIVE PRICING
                  </button>
                </h2>
                <div
                  id="flush-collapseSix"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Choose Agyeiwaa Memorial Roofing for competitive pricing and
                    exceptional value on top-quality roofing services
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include 'home_gallery.php'; ?>
      <section class="home-contact">
        <div class="row gy-5">
          <div class="col-md-6 home-contact-">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4235221739336!2d-1.5098889254031038!3d6.718060820872638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdbeb9a3be0d5c3%3A0xb45ed169bb314f2!2sAgyeiwaa%20Memorial%20Company%20Limited!5e0!3m2!1sen!2sgh!4v1682457692508!5m2!1sen!2sgh"
              width="100%"
              height="95%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-md-6 home-contact-" >
            <div class="row">
              <div class="col-md-12 boxes">
                <h6>Phone Number:</h6>
                <p>
                  <a
                    href="tel:+233556120878"
                    style="text-decoration: none; color: #000"
                  >
                    <i class="fas fa-phone-alt"></i>
                    +233556120878
                  </a>
                </p>
                <p>
                  <a
                    href="tel: +233559558041"
                    style="text-decoration: none; color: #000"
                  >
                    <i class="fas fa-phone-alt"></i>
                    +233559558041
                  </a>
                </p>
              </div>

              <div class="col-md-12 boxes">
                <h6>Email Address:</h6>
                <p>
                  <a href="mailto:" style="text-decoration: none; color: #000">
                    <i class="fas fa-envelope"></i>
                    info@agyeiwaamemorialroofing.com</a
                  >
                </p>
              </div>

              <div class="col-md-12 boxes">
                <h6>Location:</h6>
                <p>
                  <i class="fas fa-map-marker-alt"></i>
                  <a
                    href="https://goo.gl/maps/boxVTAfqB1mNFXEJ6"
                    style="color: #000; text-decoration: none"
                  >
                    Adako Jachie Junction, <br />
                    Opposite Kwamo Kumasi, Ghana
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include 'call_to_action.php'; ?>

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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
