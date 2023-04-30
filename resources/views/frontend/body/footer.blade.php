@php
  
  use App\Models\University;
    $websitesetup=University::find(1);
@endphp

<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto">
        <div>
          <a href="{{route('/')}}">
            <img src="{{asset(''.$websitesetup->logo)}}" class="mb-3 footer-logo" alt="{{$websitesetup->name}}">
          </a>
          <h6 class="font-weight-bolder mb-4">{{$websitesetup->name}}</h6>
          <p>info@soran.edu.iq</p>
        </div>
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.facebook.com/SoranUniversity?mibextid=ZbWKwL" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8" aria-hidden="true"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQHUIhxXIbMkNQAAAYfO2JCAN0RLdsUxTY5AV2rMDVnfuBGw1aMexVaYFdqcb3opNGqA_kHRKup9tWvcgs028DFKNwk1Obx3G1SWFDzOxrWtXNzwCor5TYu3OfXdCtoDwh5ycH0=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Funiversity-of-soran%2F" target="_blank">
                <i class="fab fa-linkedin text-lg opacity-8" aria-hidden="true"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.youtube.com/@SoranUniversity"  target="_blank">
                <i class="fab fa-youtube text-lg opacity-8" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>



      <div class="col-md-3 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Quck links</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('news.page')}}" target="_blank">
                Career
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('news.page')}}" target="_blank">
                News
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('event.page')}}" target="_blank">
                Events
              </a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}" target="_blank">
                Login
              </a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Alumni</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('alumni.page')}}" target="_blank">
                Alumni
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('alumnipost.page')}}" target="_blank">
                Alumni Blog Posts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gallary.page')}}" target="_blank">
                Gallary
              </a>
            </li>


      
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Help &amp; Support</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('about.page')}}" target="_blank">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact.page')}}" target="_blank">
                Contact Us
              </a>
            </li>

           

            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">
                FAq
              </a>
            </li>

          

          </ul>
        </div>
      </div>

    

      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>



