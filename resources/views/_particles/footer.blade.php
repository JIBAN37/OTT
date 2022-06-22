<!-- <footer class="text-white">
  <div class="vfx_footer_widget">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-4 col-xs-12">
          <div class="widget vfx_category_widget">
            <div class="vfx_inner_widget">
              <ul class="vfx_widget_cat">
                @foreach(\App\Pages::where('status','1')->orderBy('id')->get() as $page_data)
                <li class="cat"><a href="{{ URL::to('page/'.$page_data->page_slug) }}">{{$page_data->page_title}}</a></li>
                @endforeach                   
              </ul>
            </div>
      <p class="vfx_copyright_text">{{stripslashes(getcong('site_copyright'))}}</p>
          </div>
        </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
          <div class="widget about-widget">
        <h3 class="vfx_widget_title">{{trans('words.connect_with_us')}}</h3>   
            <div class="vfx_inner_widget">       
              <div class="vfx_footer_social">
                <div class="socials"> 
          <a href="{{stripslashes(getcong('footer_fb_link'))}}" target="_blank"><i class="fa fa-facebook"></i></a> 
          <a href="{{stripslashes(getcong('footer_twitter_link'))}}" target="_blank"><i class="fa fa-twitter"></i></a> 
          <a href="{{stripslashes(getcong('footer_instagram_link'))}}" target="_blank"><i class="fa fa-instagram"></i></a>           
        </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="widget app-widget vfx_last_widget">
            <h3 class="vfx_widget_title">{{trans('words.apps_text')}}</h3>
            <div class="vfx_inner_widget mr_top"> <a class="google-play-download" href="{{stripslashes(getcong('footer_google_play_link'))}}" target="_blank"><img src="{{ URL::asset('site_assets/images/icons/google-play.png') }}" alt="Google Play Download"></a> <a class="apple-store-download" href="{{stripslashes(getcong('footer_apple_store_link'))}}" target="_blank"><img src="{{ URL::asset('site_assets/images/icons/app-store.png') }}" alt="Apple Store Download"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="loginAlertModal" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{trans('words.login_alert')}}</h4>
        </div>
        <div class="modal-body">
          <p>{{trans('words.login_alert_msg1')}} <a href="{{ URL::to('login') }}" style="text-transform: uppercase;">{{trans('words.login_text')}}</a> {{trans('words.login_alert_msg2')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('words.close')}}</button>
        </div>
      </div>      
    </div>
  </div>
  
</footer> -->






  <!-- footer starts -->
  <footer id="footer" class="footer">
      <div class="top">
        <div class="row align-items-center align-items-xl-start">
          <div class="col-xl-8 col-lg-7">
            <div class="row">
              <div class="col-xl-8 mb-4 mb-xl-0">
                <ul class="footer__navbar">
                  <li class="footer__nav__item">
                    <a href="#" class="footer__nav__link">About Us</a>
                  </li>
                  <li class="footer__nav__item">
                    <a href="#" class="footer__nav__link">Terms of Service</a>
                  </li>
                  <li class="footer__nav__item">
                    <a href="#" class="footer__nav__link">Privacy Policy</a>
                  </li>
                  <li class="footer__nav__item">
                    <a href="#" class="footer__nav__link">Contact Us</a>
                  </li>
                  <li class="footer__nav__item">
                    <a href="./faq.html" class="footer__nav__link">FAQ</a>
                  </li>
                </ul>
                <p class="copyright__text d-none d-xl-block">
                  &copy;2022 Chorki All rights reserved.
                </p>
              </div>
              <div class="col-xl-4 mb-4 mb-lg-0">
                <ul class="social__links">
                  <li class="social__item">
                    <a href="#" class="social__link">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </li>
                  <li class="social__item">
                    <a href="#" class="social__link">
                      <i class="fa-brands fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="download__apps">
              <a href="#" role="button" class="app__icon">
                <i class="fa-brands fa-google-play"></i>
                <div class="app__icon__text">
                  <p class="app__available">Available on the</p>
                  <span class="store__name">playstore</span>
                </div>
              </a>
              <a href="#" role="button" class="app__icon">
                <i class="fa-brands fa-apple"></i>
                <div class="app__icon__text">
                  <p class="app__available">Available on the</p>
                  <span class="store__name">appstore</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__text__sm d-xl-none">
        &copy;2022 Chorki All rights reserved.
      </div>

      <!-- tabnavbar starts -->
      <nav class="tab__navbar d-md-none">
        <ul class="tab__navbar__nav">
          <li class="tab__nav__item">
            <a href="#" class="tab__nav__link active">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="#ffffff"
                viewBox="0 0 100 100"
              >
                <path
                  d="M48.188 5.6l-40 30a3.05 3.05 0 0 0-1.188 2.406v54c0 1.57 1.43 3 3 3h80c1.57 0 3-1.43 3-3v-54c0-.927-.45-1.846-1.187-2.406l-40-30c-1.3-.832-2.444-.75-3.625 0zM50 11.756l37 27.75v49.5H13v-49.5z"
                ></path>
              </svg>
              Home
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="#" class="tab__nav__link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24px"
                height="24px"
                fill="#ffffff"
                version="1.1"
                viewBox="0 0 100 100"
              >
                <path
                  d="m90.7 86.9c0 2.4-1.6 3-3 3h-72c-2.4 0-3-1.7-3-3v-27h78v27zm-5.2-42-4.5 12h-12l4.5-12h12zm-22.6 0-4.5 12h-12l4.5-12h12zm-22.5 0-4.5 12h-12l4.5-12h12zm-12.4-5.5-8.2-9.9 11.4-3.9 8.2 9.9-11.4 3.9zm13.1-17.3 11.4-3.9 8.2 9.9-11.5 3.9-8.1-9.9zm21.3-7.3 11.4-3.9 8.2 9.9-11.4 3.9-8.2-9.9zm-44.8 24.4c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2-4.2-1.9-4.2-4.2 1.8-4.2 4.2-4.2m79.1 47.7v-40.5c0-1.8-1.2-4.5-4.5-4.5h-62.5l59.5-20.5c3.1-1.1 3.4-4 2.8-5.7l-2.9-8.5c-1.1-3.1-4-3.4-5.7-2.8l-76.7 26.4c-3.1 1.1-3.4 4-2.8 5.7l3 8.5v0.1c-0.1 0.4-0.3 0.8-0.3 1.3v40.5c0 3.6 2.4 9 9 9h72c3.7 0.1 9.1-2.3 9.1-9"
                ></path>
              </svg>
              Movies
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="#" class="tab__nav__link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="#ffffff"
                width="24px"
                height="24px"
              >
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27-7.38 5.74zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16z"
                ></path>
              </svg>
              Series
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="#" class="tab__nav__link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="#ffffff"
                height="24px"
                viewBox="0 0 24 24"
                width="24px"
              >
                <path
                  d="M0 0h24v24H0V0z"
                  fill="none"
                  class="stroke-none"
                ></path>
                <path
                  d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"
                ></path>
              </svg>
              Shows
            </a>
          </li>
        </ul>
      </nav>
      <!-- tabnavbar ends -->
    </footer>
    <!-- footer ends -->