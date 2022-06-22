<!-- <nav class="navbar navbar-default" data-spy="affix" data-offset-top="220">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <?php if(getcong('site_logo')): ?>
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Site Logo"> </a> 
      <?php else: ?>
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('site_assets/images/template/logo.png')); ?>" alt="Site Logo"> </a>          
      <?php endif; ?>
     
  </div>
    <div class="collapse navbar-collapse" id="main-nav-collapse">      
      <ul class="nav navbar-nav navbar-left">        
        <li class="dropdown"> <a href="<?php echo e(URL::to('series')); ?>"><?php echo e(trans('words.tv_shows_text')); ?></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(URL::to('language/series')); ?>"><?php echo e(trans('words.language_text')); ?></a></li>
            <li><a href="<?php echo e(URL::to('genres/series')); ?>"><?php echo e(trans('words.genres_text')); ?></a></li> 
          </ul>
        </li>  
        <li class="dropdown"> <a href="<?php echo e(URL::to('movies')); ?>"><?php echo e(trans('words.movies_text')); ?></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(URL::to('language/movies')); ?>"><?php echo e(trans('words.language_text')); ?></a></li>
            <li><a href="<?php echo e(URL::to('genres/movies')); ?>"><?php echo e(trans('words.genres_text')); ?></a></li> 
          </ul>
        </li>
        <li class="dropdown"> <a href="<?php echo e(URL::to('sports')); ?>"><?php echo e(trans('words.sports_text')); ?></a>
          <ul class="dropdown-menu">
            <?php $__currentLoopData = \App\SportsCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sports_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(URL::to('sports/'.$sports_cat->category_slug)); ?>"><?php echo e($sports_cat->category_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul>
        </li>
        <li class="dropdown"> <a href="<?php echo e(URL::to('live-tv')); ?>"><?php echo e(trans('words.live_tv')); ?></a>
          <ul class="dropdown-menu">
            <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(URL::to('live-tv/'.$tv_cat->category_slug)); ?>"><?php echo e($tv_cat->category_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul>
        </li>
         
      </ul>
      <div class="header_top_search">       
      <?php echo Form::open(array('url' => 'search','class'=>'navbar-form navbar-left','id'=>'search','role'=>'form','method'=>'get')); ?>  
        <input type="search" name="s" placeholder="<?php echo e(trans('words.search')); ?>" required>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      <?php echo Form::close(); ?>


     
      <?php if(Auth::check()): ?>

      <?php if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin"): ?>
      <div class="user-menu">
        <div class="user-name">
          <span>            
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>  
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
          <li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php else: ?>
      <div class="user-menu">
        <div class="user-name">
          <span>
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>       
           <li><a href="<?php echo e(URL::to('profile')); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('words.profile')); ?></a></li>
          <li><a href="<?php echo e(URL::to('logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php endif; ?>

      <?php else: ?>

        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(URL::to('login')); ?>" style="text-transform: uppercase;"><?php echo e(trans('words.login_text')); ?></a></li>
        </ul> 
        
      <?php endif; ?> 
      
      </div>
    </div>
  </div>
</nav> -->











  <!-- header starts -->
  <header id="header" class="header">
      <nav id="navbar" class="navbar">
        <button type="button" class="menu__btn">
          <i class="fa-solid fa-bars"></i>
        </button>
        <button type="button" class="menu__btn__close">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <a href="./index.html" class="logo">
          <img
            src="./assets/images/Desktop Logo without BG.png"
            alt="Brand Logo"
            width="76"
            class="brand__logo"
          />
        </a>
        <a href="./viewplans.html" class="subscribe__btn_sm">
          সাবস্ক্রাইব করুন
        </a>
        <ul class="navbar__nav">
          <li class="nav__item">
            <a href="#" class="nav__link active">চরকিঘর</a>
          </li>
          <li class="nav__item dropdown">
            <a href="./index.html" class="nav__link dropdown__trigger"
              >সিনেমা</a
            >
            <ul class="dropdown__menu">
              <li class="dropdown__item">
                <a href="./index.html" class="dropdown__link">সব সিনেমা</a>
              </li>
              <li class="dropdown__item">
                <a href="./movies.html" class="dropdown__link">রোমান্টিক</a>
              </li>
              <li class="dropdown__item">
                <a href="./movies.html" class="dropdown__link">অ্যাকশন</a>
              </li>
              <li class="dropdown__item">
                <a href="./movies.html" class="dropdown__link">থ্রিলার</a>
              </li>
              <li class="dropdown__item">
                <a href="./movies.html" class="dropdown__link">ডিটেক্টিভ</a>
              </li>
              <li class="dropdown__item">
                <a href="./movies.html" class="dropdown__link">কমেডি</a>
              </li>
            </ul>
          </li>
          <li class="nav__item dropdown">
            <a href="./index.html" class="nav__link dropdown__trigger">সিরিজ</a>
            <ul class="dropdown__menu">
              <li class="dropdown__item">
                <a href="./index.html" class="dropdown__link">সব সিরিজ</a>
              </li>
              <li class="dropdown__item">
                <a href="./series.html" class="dropdown__link">রোমান্টিক</a>
              </li>
              <li class="dropdown__item">
                <a href="./series.html" class="dropdown__link">ডিটেক্টিভ</a>
              </li>
              <li class="dropdown__item">
                <a href="./series.html" class="dropdown__link">ফিল্ম</a>
              </li>
              <li class="dropdown__item">
                <a href="./series.html" class="dropdown__link">থ্রিলার</a>
              </li>
            </ul>
          </li>
          <li class="nav__item dropdown">
            <a href="./index.html" class="nav__link dropdown__trigger">শো</a>
            <ul class="dropdown__menu">
              <li class="dropdown__item">
                <a href="./shows.html" class="dropdown__link">সব নন-ফিকশন</a>
              </li>
              <li class="dropdown__item">
                <a href="./shows.html" class="dropdown__link">গান ছবি</a>
              </li>
              <li class="dropdown__item">
                <a href="./shows.html" class="dropdown__link">ডকুমেন্টারি</a>
              </li>
              <li class="dropdown__item">
                <a href="./shows.html" class="dropdown__link">আর্রও শো</a>
              </li>
            </ul>
          </li>
          <li class="nav__item">
            <a href="./redeemCode.html" class="nav__link">রিডিম কোড</a>
          </li>
        </ul>
        <ul class="navbar__nav ms-auto d-none d-xl-flex">
          <li class="nav__item">
            <div class="search__icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </li>
          <li class="nav__item dropdown">
            <button type="button" class="translate__btn">
              <img
                src="./assets/images/en__bn__translate.png"
                alt="translate icon"
                width="24"
              />
              <span class="translate__btn__text ms-1">BN</span>
              <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul class="dropdown__menu__sm">
              <li class="dropdown__item">
                <a href="#" class="dropdown__link">English</a>
              </li>
              <li class="dropdown__item">
                <a href="#" class="dropdown__link">Bengali</a>
              </li>
            </ul>
          </li>
          <li class="nav__item">
            <a
              href="./viewplans.html"
              role="button"
              class="nav__btn subscribe__btn"
            >
              সাবস্ক্রাইব করুন
            </a>
          </li>
          <li class="nav__item">
            <button
              type="button"
              class="nav__btn login__btn"
              data-bs-toggle="modal"
              data-bs-target="#loginRegiModal"
            >
              লগ ইন
            </button>
          </li>
        </ul>
        <button type="button" class="search__btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </nav>
    </header>
    <!-- header ends -->

   <?php /**PATH C:\Users\SHIJAR\Desktop\OTT\app\resources\views/_particles/header.blade.php ENDPATH**/ ?>