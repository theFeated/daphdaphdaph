@extends('layouts.app')

@section('title', '')

@section('contents')

 <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Daphie Marie Mendez</h1>
      <p>I'm a passionate <span class="typed" data-typed-items=" Writer, Photographer,Human being"></span></p>
      <div class="social-links">
        <a href="https://x.com/vipperred17?t=Qfstda0zXaBGfqM4EocQKg&s=09" class="twitter"><i class="bi bi-twitter"></i></a>
         <a href="https://www.facebook.com/daphiemarie.mendez.3" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/daphie_mendez?igsh=NTNzenhsemJ4dHBx"> <i class="instagram"><i class="bi bi-instagram"></i></a>
      
      </div>
    </div>
  </section><!-- End Home -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>All About Me</h2>
          <p>{{ $aboutme->bio }}</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="portfolio_assets/img/me.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>{{ $aboutme->title }}</h3>
            <p class="fst-italic">
            {{ $aboutme->subtitle }}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li>
                      <i class="bi bi-chevron-right"></i> 
                      <strong>Birthday:</strong> 
                      <span>{{ \Carbon\Carbon::parse($aboutme->birthday)->format('d-m-Y') }}</span>
                  </li>                  
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $aboutme->age }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $aboutme->phone }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{ $aboutme->address }}</span></li>
                </ul>
              </div>
              
            </div>
            <p>
             A creative and idelistic photograper driven by her passion in painting stories through pictures. She take a photo and give meaning to it.
            </p>

            <h3 class="educ-title">Education</h3>
              @foreach($educations as $education)
                <div class="educ-item">
                  <h4>{{ $education->description }}</h4>
                  <h5>{{ date('Y', strtotime($education->start_date)) }} - {{ $education->end_date ? date('Y', strtotime($education->end_date)) : 'Present' }}</h5>
                  <p><em>{{ $education->institution }}</em></p>
                </div>
              @endforeach
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        @foreach ($skills as $skill)
          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percentage }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
        @endforeach
      </div>

    </section><!-- End Skills Section -->


    <section id="portfolio" class="portfolio">
      <div class="container">

          <div class="section-title">
              <h2>Portfolio</h2>
              <p>My Works</p>
          </div>

          <div class="row portfolio-container">
              @foreach ($portfolios as $portfolio)
              <div class="col-lg-4 col-md-6 portfolio-item {{ strtolower($portfolio->category) }}" data-cat="{{ strtolower($portfolio->category) }}">
                  <div class="portfolio-wrap">
                      <img src="{{ Voyager::image($portfolio->image1) }}" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;" alt="{{ $portfolio->description }}">
                      <div class="portfolio-info">
                          <h4>{{ $portfolio->title }}</h4>
                          <p>{{ $portfolio->category }}</p>
                          <div class="portfolio-links">
                              <a class="" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portfolio->id }}"><i class="bx bx-link"  style="color: red;"></i></a>
                              <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portfolio->id }}" class="glightbox portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                          </div>
                      </div>
                  </div>
              </div>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolioModalLabel{{ $portfolio->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <!-- ======= Portfolio Details ======= -->
                                  <div class="portfolio-details" style="background-color:#848871;">
                                      <div class="container">
                                          <div class="row">
                                              <div class="col-lg-12 text-end">
                                                  <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                                                      <i class="bi bi-x" style="font-size: 2rem; color: black;"></i>
                                                  </button>
                                              </div>
                                              <div class="col-lg-7">
                                                  <div class="portfolio-details-slider swiper">
                                                      <div class="swiper-wrapper align-items-center">
                                                          <div class="swiper-slide">
                                                              <img src="{{ Voyager::image($portfolio->image1) }}" alt="">
                                                          </div>
                                                          <div class="swiper-slide">
                                                              <img src="{{ Voyager::image($portfolio->image2) }}" alt="">
                                                          </div>
                                                          <div class="swiper-slide">
                                                              <img src="{{ Voyager::image($portfolio->image3) }}" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="swiper-pagination"></div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 portfolio-info">
                                                  <h3>Project information</h3>
                                                  <ul>
                                                      <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                                                      <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                                                      <li><strong>Project date</strong>: {{ $portfolio->project_date }}</li>
                                                      <li><strong>Project URL</strong>: <a href="{{ $portfolio->project_url }}" target="_blank">{{ $portfolio->project_url }}</a></li>
                                                  </ul>
                                                  <p><strong>Description:</strong> {{ $portfolio->description }}</p>
                                              </div>
                                              <p>
                                                {{ $portfolio->description }}                                            
                                              </p>
                                          </div>
                                      </div>
                                  </div><!-- End Portfolio Details -->
                              </div>
                          </div>
                      </div>
                  </div>

              @endforeach
          </div>          

          <div class="d-flex justify-content-center">
              <ul class="pagination">
                  <li class="page-item">
                      <a class="page-link bg-dark" href="{{ $portfolios->previousPageUrl() }}" aria-label="Previous" style="color:#848871;">
                          <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  @foreach(range(1, $portfolios->lastPage()) as $page)
                      <li class="page-item {{ ($portfolios->currentPage() == $page) ? 'active' : '' }}">
                          <a class="page-link bg-dark" href="{{ $portfolios->url($page) }}">{{ $page }}</a>
                      </li>
                  @endforeach
                  <li class="page-item">
                      <a class="page-link bg-dark" href="{{ $portfolios->nextPageUrl() }}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
    </section><!-- End Portfolio Section -->
        
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      @foreach ($services as $service)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <h4><a href="">{{ $service->title }}</a></h4>
            <p>{{ $service->description }}</p>
          </div>
        </div>
      @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>My Address</h3>
                <p>{{ $aboutme->address }}</p>
            </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
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

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Me</h3>
                <p>{{ $aboutme->email }}</p>
            </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Me</h3>
                <p>{{ $aboutme->phone }}</p>
            </div>
            </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
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
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

        </div>
    </section><!-- End Contact Section -->>

  </main><!-- End #main -->

@endsection