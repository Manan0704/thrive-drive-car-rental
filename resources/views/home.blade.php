@include('header')

<section class="ftco-section ftco-no-pt bg-light py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center mb-5">
        <span class="subheading text-primary">What We Offer</span>
        <h2 class="mb-3 fw-bold">Featured Vehicles</h2>
      </div>
    </div>
    
    <div class="row">
      @foreach ($cats as $item)
        <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
          <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
            <a href="/bycat{{$item->Category_name}}">
              <img class="card-img-top img-fluid" src="{{$item->Image}}" alt="{{$item->Category_name}}" style="height: 220px; object-fit: cover;">
            </a>
            <div class="card-body text-center bg-white">
              <h5 class="card-title fw-bold text-dark">{{$item->Category_name}}</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>



<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
      <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">About us</span>
        <h2 class="mb-4">Welcome to ThriveDrive</h2>

        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      
      </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
  <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Services</span>
    <h2 class="mb-3">Our Latest Services</h2>
  </div>
</div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
        <div class="text w-100">
        <h3 class="heading mb-2">Wedding Ceremony</h3>
        
      </div>
    </div>
            </div>
            
  <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
        <div class="text w-100">
        <h3 class="heading mb-2">City Transfer</h3>
        
      </div>
    </div>
            </div>
            
  <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
        <div class="text w-100">
        <h3 class="heading mb-2">Airport Transfer</h3>
        
      </div>
    </div>
            </div>
            
  <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
        <div class="text w-100">
        <h3 class="heading mb-2">Whole City Tour</h3>
        
      </div>
    </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5">
  <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Testimonial</span>
    <h2 class="mb-3">Happy Clients</h2>
  </div>
</div>

<div class="row ftco-animate">
  <div class="col-md-12">
    <div class="carousel-testimony owl-carousel ftco-owl">
     
      <div class="item">
        <div class="testimony-wrap rounded text-center py-4 pb-5">
          <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
          </div>
          <div class="text pt-4">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="name">Roger Scott</p>
            <span class="position">Marketing Manager</span>
          </div>
        </div>
      </div>
      
      <div class="item">
        <div class="testimony-wrap rounded text-center py-4 pb-5">
          <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
          </div>
          <div class="text pt-4">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="name">Roger Scott</p>
            <span class="position">Interface Designer</span>
          </div>
        </div>
      </div>
     
      <div class="item">
        <div class="testimony-wrap rounded text-center py-4 pb-5">
          <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
          </div>
          <div class="text pt-4">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="name">Roger Scott</p>
            <span class="position">UI Designer</span>
          </div>
        </div>
      </div>
     
      <div class="item">
        <div class="testimony-wrap rounded text-center py-4 pb-5">
          <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
          </div>
          <div class="text pt-4">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="name">Roger Scott</p>
            <span class="position">Web Developer</span>
          </div>
        </div>
      </div>
     
      <div class="item">
        <div class="testimony-wrap rounded text-center py-4 pb-5">
          <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
          </div>
          <div class="text pt-4">
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="name">Roger Scott</p>
            <span class="position">System Analyst</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-5">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Blog</span>
    <h2>Recent Blog</h2>
  </div>
</div>
<div class="row d-flex">
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
      <a href="/blog" class="block-20" style="background-image: url('images/image_1.jpg');">
      </a>
      <div class="text pt-4">
          <div class="meta mb-3">
          <div style="color:blue">Oct. 16, 2024</div>
          <div style="color:blue">Admin</div>
          <div style="color:blue"><span class="icon-chat"></span> 3</div>
        </div>
        <h3 class="heading mt-2">Why Lead Generation is Key for Business Growth</h3>
        <p><a href="/blog" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
      <a href="/blog" class="block-20" style="background-image: url('images/image_2.jpg');">
      </a>
      <div class="text pt-4">
          <div class="meta mb-3">
          <div style="color:blue">Oct. 16, 2024</div>
          <div style="color:blue">Admin</div>
          <div style="color:blue"><span class="icon-chat"></span> 3</div>
        </div>
        <h3 class="heading mt-2">Why Lead Generation is Key for Business Growth</h3>
        <p><a href="/blog" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry">
      <a href="/blog" class="block-20" style="background-image: url('images/image_3.jpg');">
      </a>
      <div class="text pt-4">
          <div class="meta mb-3">
          <div style="color:blue">Oct. 16, 2024</div>
          <div style="color:blue">Admin</div>
          <div style="color:blue"> <span class="icon-chat"></span> 3</div>
        </div>
        <h3 class="heading mt-2">Why Lead Generation is Key for Business Growth</h3>
        <p><a href="/blog" class="btn btn-primary">Read more</a></p>
      </div>
    </div>
  </div>
</div>
</div>
</section>	

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
<div class="container">
    <div class="row">
  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18">
      <div class="text text-border d-flex align-items-center">
        <strong class="number" data-number="60">0</strong>
        <span>Year <br>Experienced</span>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18">
      <div class="text text-border d-flex align-items-center">
        <strong class="number" data-number="1090">0</strong>
        <span>Total <br>Cars</span>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18">
      <div class="text text-border d-flex align-items-center">
        <strong class="number" data-number="2590">0</strong>
        <span>Happy <br>Customers</span>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
    <div class="block-18">
      <div class="text d-flex align-items-center">
        <strong class="number" data-number="67">0</strong>
        <span>Total <br>Branches</span>
      </div>
    </div>
  </div>
</div>
</div>
</section>


@include('footer')


