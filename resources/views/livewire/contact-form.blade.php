@php
  use App\Models\AboutMe;
  $aboutme = $aboutme ?? AboutMe::first();
@endphp

  <!-- ======= Contact Section ======= -->
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

      <form wire:submit.prevent="send" method="post" class="php-email-form mt-4" action="">
          <div class="row">
              <div class="col-md-6 form-group">
                  <input wire:model="name" class="form-control" id="name" placeholder="Your Name" required>
                  @error('name') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input wire:model="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
          </div>
          <div class="form-group mt-3">
              <input wire:model="subject" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group mt-3">
              <textarea wire:model="message" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              @error('message') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="my-3">
              <div wire:loading class="loading">Loading</div>
              <div wire:poll.initial="5000" wire:target="submit" class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
      
    </div>
  <!-- End Contact Section -->

