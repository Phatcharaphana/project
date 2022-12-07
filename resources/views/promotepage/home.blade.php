@extends('layouts.promote')
@section('content')
  
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
  
    <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Me Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <span>โปรโมชั่น</span>
        <h2>โปรโมชั่น</h2>
      </div>
     
      <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">

            
              <img src="{{ asset('template/promote/assets/img/T12.jpg ')  }}" alt="Hotel 1" class="img-fluid">
            </div>
            <h3><a href="#">รายละเอียด</a></h3>
        
     
          </div>
        </div>

        
        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src=" {{ asset('template/promote/assets/img/T9.jpg ')  }}  " alt="Hotel 1" class="img-fluid">
            </div>
            <h3><a href="#">รายละเอียด</a></h3>
          
          </div>
        </div>
        
        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="  {{ asset('template/promote/assets/img/T16.jpg ')  }} " alt="Hotel 1" class="img-fluid">
            </div>
            <h3><a href="#">รายละเอียด</a></h3>
            
           
          </div>
        </div>

        
        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src=" {{ asset('template/promote/assets/img/T7.jpg')  }}" alt="Hotel 1" class="img-fluid">
            </div>
            <h3><a href="#">รายละเอียด</a></h3>
          
          
          </div>
        </div>
        
          <div class="section-title">
        <span>สถานที่ท่องเที่ยว</span>
        <h2>สถานที่ท่องเที่ยว</h2>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src=" {{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src=" {{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
</div>

<div class="section-title">
<h2>เครื่องเล่นที่น่าเล่น</h2>
<div class="row" data-aos="fade-up" data-aos-delay="100">
<div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src=" {{ asset('template/promote/assets/img/T1.jpg ')  }}" alt="Hotel 1" class="img-fluid">
            </div>
            <h3><a href="#">เครื่องเล่น บานาน่าโบ๊ท</a></h3>
            <h3><a href="#">Banana Boat</a></h3>
            </div>
          </div>

        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="{{ asset('template/promote/assets/img/T15.jpg')  }}" alt="Hotel 2" class="img-fluid">
            </div>
            <h3><a href="#">เครื่องเล่น โดนัท</a></h3>
            <h3><a href="#">Donut</a></h3>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="{{ asset('template/promote/assets/img/T16.jpg ')  }}" alt="Hotel 2" class="img-fluid">
            </div>
            <h3><a href="#">เครื่องเล่น เจ็ทสกี้</a></h3>
            <h3><a href="#">Jet ski</a></h3>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="{{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" alt="Hotel 2" class="img-fluid">
            </div>
            <h3><a href="#">สไลด์เดอร์</a></h3>
            <h3><a href="#">slider</a></h3>
          </div>
        </div>


      </div>
    </div>

<!-- End .content-->

<!-- End About Me Section -->

  <!-- ======= My Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>เมนูการจองที่พักและเครื่องเล่น</span>
        <h2>เมนูการจองที่พักและเครื่องเล่น</h2>
    


        <div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col">
  <div class="card">
    <img src=" {{ asset('template/promote/assets/img/T12.jpg ')  }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">รายละเอียดการจอง</h5>
      <a href="#" class="btn btn-primary">เพิ่มเติม</a>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <img src=" {{ asset('template/promote/assets/img/T19.jpg  ')  }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">รายละเอียดการจอง</h5>
      <a href="#" class="btn btn-primary">เพิ่มเติม</a>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <img src="{{ asset('template/promote/assets/img/T9.jpg ')  }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">รายละเอียดการจอง</h5>
      <a href="#" class="btn btn-primary">เพิ่มเติม</a>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <img src=" {{ asset('template/promote/assets/img/T6.jpg ')  }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">รายละเอียดการจอง</h5>
      <a href="#" class="btn btn-primary">เพิ่มเติม</a>
    </div>
  </div>
</div>
</div><!-- End My Resume Section -->

  <!-- ======= My Services Section ======= -->
  
  <section id="services" class="services">
    <div class="container">

      
<!-- End My Services Section -->

  <!-- ======= Testimonials Section ======= -->

<!-- End testimonial item -->

<!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
 
  <!-- ======= My Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
     <div class="section-title">
        <span>ข้อมูลการจอง</span>
        <h2>ข้อมูลการจอง</h2>
     
      </div>

      <figure class="figure">
<img src="{{ asset('template/promote/assets/img/T6.jpg ')  }}" class="figure-img img-fluid rounded" alt="...">
<p class="fs-2">แพรกลางแม่น้ำ</p>
</figure>


<p class="lh-1">รายชั่วโมง 50บาท เหมาทั้งวัน 200 บาท</p><br><br>
<p class="fs-2">สามารถติดต่อได้</p>
<p class="fw-semibold">หาดเต็มรัก Byเสี่ยหมึก</p>
<p class="fs-4">โทร.087-991-8729</p><br>
      <!-- End My Portfolio Section -->

  <!-- ======= Pricing Section ======= -->
 <!-- End Pricing Section -->

  <!-- ======= Contact Me Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact Me</span>
        <h2>Contact Me</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-share-alt"></i>
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Me</h3>
                <p>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Me</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Me Section -->

</main><!-- End #main -->
@stop