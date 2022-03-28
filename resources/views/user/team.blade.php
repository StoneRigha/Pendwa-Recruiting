<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Recruting Team</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($team as $team)
          
       
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important" src="teamimage/{{ $team->image }}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{ $team->name }}</p>
              <span class="text-sm text-grey">{{ $team->speaciality }}</span>
            </div>
          </div>
        </div>
       
        @endforeach

      </div>
    </div>
  </div>