<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>View Plans</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="./assets/libraries/bootstrap/css/bootstrap.min.css"
    />

    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="./assets/libraries/fontawesome/css/all.min.css"
    />

    <!-- External CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
  </head>

  <body>
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

    <!-- header small starts -->
    <header id="header__sm" class="header__sm">
      <nav id="navbar__sm" class="navbar__sm">
        <a href="./index.html" class="logo">
          <img
            src="./assets/images/Desktop Logo without BG.png"
            alt="Brand Logo"
            width="76"
            class="brand__logo"
          />
        </a>
        <ul class="navbar__nav">
          <li class="nav__item">
            <a href="#" class="nav__link active">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="#f2f2f2"
                viewBox="0 0 100 100"
              >
                <path
                  d="M48.188 5.6l-40 30a3.05 3.05 0 0 0-1.188 2.406v54c0 1.57 1.43 3 3 3h80c1.57 0 3-1.43 3-3v-54c0-.927-.45-1.846-1.187-2.406l-40-30c-1.3-.832-2.444-.75-3.625 0zM50 11.756l37 27.75v49.5H13v-49.5z"
                ></path>
              </svg>
              চরকিঘর
            </a>
          </li>
          <li class="nav__item dropdown">
            <div class="nav__link">
              <a href="#">
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
                সিনেমা
              </a>
              <span class="dropdown__trigger"></span>
            </div>
            <ul class="dropdown__menu__sm">
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
            <div class="nav__link">
              <a href="#">
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
                সিরিজ
              </a>
              <span class="dropdown__trigger"></span>
            </div>
            <ul class="dropdown__menu__sm">
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
            <div class="nav__link">
              <a href="#">
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
                শো
              </a>
              <span class="dropdown__trigger"></span>
            </div>
            <ul class="dropdown__menu__sm">
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
            <a href="./redeemCode.html" class="nav__link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="#ffffff"
                viewBox="0 0 24 24"
                width="24px"
                height="24px"
              >
                <path
                  d="M 18 3 v 2 h -2 V 3 H 8 v 2 H 6 V 3 H 4 v 18 h 2 v -2 h 2 v 2 h 8 v -2 h 2 v 2 h 2 V 3 h -2 Z M 8 17 H 6 v -2 h 2 v 2 Z m 0 -4 H 6 v -2 h 2 v 2 Z m 0 -4 H 6 V 7 h 2 v 2 Z m 10 8 h -2 v -2 h 2 v 2 Z m 0 -4 h -2 v -2 h 2 v 2 Z m 0 -4 h -2 V 7 h 2 v 2 Z"
                ></path>
                <path fill="none" d="M 0 0 h 24 v 24 H 0 Z"></path>
              </svg>
              রিডিম কোড
            </a>
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
        </ul>
        <ul class="navbar__nav navbar__nav__bottom">
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
          <li class="nav__item">
            <a
              href="./viewplans.html"
              role="button"
              class="nav__btn subscribe__btn"
            >
              সাবস্ক্রাইব করুন
            </a>
          </li>
        </ul>
      </nav>
      <div class="filter__box">
        <a href="./index.html" class="logo">
          <img
            src="./assets/images/Desktop Logo without BG.png"
            alt="Brand Logo"
            width="76"
            class="brand__logo"
          />
        </a>
        <button type="button" class="filter__btn__close">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <form action="#" method="post" class="mb-5">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="SEARCH..."
              aria-label="Search field"
              aria-describedby="search__field"
              id="search__field"
            />
            <span
              class="input-group-text input__clear"
              id="search__field__clear"
            >
              <i class="fa-solid fa-xmark"></i>
            </span>
            <button type="submit" class="input-group-text input__search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
        <ul class="nav nav-tabs" id="filterTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="tab__one__tab"
              data-bs-toggle="tab"
              data-bs-target="#tab__one"
              type="button"
              role="tab"
              aria-controls="tab__one"
              aria-selected="true"
            >
              Top Results
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab__two__tab"
              data-bs-toggle="tab"
              data-bs-target="#tab__two"
              type="button"
              role="tab"
              aria-controls="tab__two"
              aria-selected="false"
            >
              Video
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab__three__tab"
              data-bs-toggle="tab"
              data-bs-target="#tab__three"
              type="button"
              role="tab"
              aria-controls="tab__three"
              aria-selected="false"
            >
              Bundle
            </button>
          </li>
        </ul>
        <div class="tab-content" id="filteredTabs">
          <div
            class="tab-pane fade show active"
            id="tab__one"
            role="tabpanel"
            aria-labelledby="tab__one__tab"
          >
            <ul class="filtered__item__list">
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/tan.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/tan.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/tan.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/tan.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/tan.jpg" alt="Show" />
                </a>
              </li>
            </ul>
          </div>
          <div
            class="tab-pane fade"
            id="tab__two"
            role="tabpanel"
            aria-labelledby="tab__two__tab"
          >
            <ul class="filtered__item__list">
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/prem-puran.jpg" alt="Show" />
                </a>
              </li>
            </ul>
          </div>
          <div
            class="tab-pane fade"
            id="tab__three"
            role="tabpanel"
            aria-labelledby="tab__three__tab"
          >
            <ul class="filtered__item__list">
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
              <li class="filtered__item">
                <a href="#" class="filtered__link">
                  <img src="./assets/images/shaticup.jpg" alt="Show" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- header small ends -->

    <!-- website body starts -->
    <main id="website">
      <!-- login panel starts -->
      <div
        class="modal fade general__modal"
        id="loginRegiModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="loginRegiModalLabel"
        aria-hidden="true"
      >
        <button
          type="button"
          class="login__regi__close"
          data-bs-dismiss="modal"
          aria-label="Close"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-x"
            viewBox="0 0 16 16"
          >
            <path
              d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
            />
          </svg>
        </button>
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-body">
              <nav class="mb-4">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button
                    class="nav-link active"
                    id="nav__one__tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav__one"
                    type="button"
                    role="tab"
                    aria-controls="nav__one"
                    aria-selected="true"
                  >
                    Login
                  </button>
                  <button
                    class="nav-link"
                    id="nav__two__tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav__two"
                    type="button"
                    role="tab"
                    aria-controls="nav__two"
                    aria-selected="false"
                  >
                    Sign Up
                  </button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="nav__one"
                  role="tabpanel"
                  aria-labelledby="nav__one__tab"
                >
                  <form>
                    <div class="mb-4">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter Your Email"
                      />
                    </div>
                    <div class="mb-5">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Enter Password"
                      />
                    </div>
                    <button type="submit" class="btn btn__submit">Login</button>
                    <div class="forgot__pass__link">
                      <a href="#" class="forgot__password">Forgot Password</a>
                    </div>
                  </form>
                  <div class="alternative__text">or</div>
                  <div class="authentication__methods">
                    <div class="top">
                      <a href="#" type="button" class="social__btn facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                        Log in With Facebook
                      </a>
                      <a href="#" type="button" class="social__btn google">
                        <img src="./assets/images/google.png" alt="google" />
                        Log in With Google
                      </a>
                    </div>
                    <div class="bottom">
                      <a href="#" type="button" class="social__btn apple">
                        <i class="fa-brands fa-apple"></i>
                        Sign in With Apple
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="nav__two"
                  role="tabpanel"
                  aria-labelledby="nav__two__tab"
                >
                  <form>
                    <div class="mb-4">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter Your Email"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Enter Your Name"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Enter Password"
                      />
                    </div>
                    <div class="mb-4 form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="tos"
                      />
                      <label class="form-check-label" for="tos"
                        >Please send me email and other marketing communications
                        regarding my account and other products from
                        Chorki.</label
                      >
                    </div>
                    <button type="submit" class="btn btn__submit">
                      Sign Up
                    </button>
                  </form>
                  <div class="alternative__text">or</div>
                  <div class="authentication__methods">
                    <div class="top">
                      <a href="#" type="button" class="social__btn facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                        Log in With Facebook
                      </a>
                      <a href="#" type="button" class="social__btn google">
                        <img src="./assets/images/google.png" alt="google" />
                        Log in With Google
                      </a>
                    </div>
                    <div class="bottom">
                      <a href="#" type="button" class="social__btn apple">
                        <i class="fa-brands fa-apple"></i>
                        Sign in With Apple
                      </a>
                    </div>
                  </div>
                  <div class="privacy__terms">
                    By clicking Sign Up, you agree to our
                    <a href="#" class="link">terms of use</a> and
                    <a href="#" class="link">privacy policy</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- login panel ends -->

      <!-- view plans starts -->
      <section class="viewplans">
        <div class="container">
          <h2 class="title text-uppercase text-center mb-5">
            CHOOSE A PLAN AND
            <br />
            ENJOY ALL <strong>CHORKI</strong> PREMIUM CONTENTS
          </h2>
          <div class="plans mb-5">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card__title text-uppercase text-center">
                      Half Yearly
                    </h3>
                  </div>
                  <div class="card-body">
                    <h4 class="price">BDT 299</h4>
                    <ul class="features">
                      <li class="feature__item">Ad Free Premium Access</li>
                      <li class="feature__item">Offline Download</li>
                      <li class="feature__item">4-Device Login</li>
                      <li class="feature__item">1 Simultaneous Stream</li>
                    </ul>
                    <button
                      type="button"
                      class="subscribe__btn btn rounded-pill"
                      data-bs-toggle="modal"
                      data-bs-target="#halfYearlySubscibe"
                    >
                      Subscribe Now
                    </button>
                  </div>
                </div>
                <div
                  class="modal fade general__modal"
                  id="halfYearlySubscibe"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="halfYearlySubscibelLabel"
                  aria-hidden="true"
                >
                  <button
                    type="button"
                    class="login__regi__close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-x"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                      />
                    </svg>
                  </button>
                  <div
                    class="modal-dialog modal-dialog-scrollable modal-fullscreen"
                  >
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="container">
                          <div class="modal__header">
                            <h2 class="modal__header__title">Subscribe</h2>
                            <ul class="progress__steps">
                              <li class="step__item">Plan Selected</li>
                              <li class="step__item active">
                                Create an Account
                              </li>
                              <li class="step__item">Subscribed</li>
                            </ul>
                          </div>
                          <div class="row g-md-5">
                            <div class="col-md-6 mb-5 mb-md-0">
                              <div class="card">
                                <div class="card-body">
                                  <select
                                    class="form-select package__select"
                                    aria-label="Choose package"
                                  >
                                    <option selected value="0">
                                      Half Yearly
                                    </option>
                                    <option value="1">Yearly</option>
                                    <option value="2">Yearly Plus</option>
                                  </select>
                                  <h2 class="subscibe__title">
                                    BDT 299 / 6months
                                  </h2>
                                  <ul class="features">
                                    <li class="feature__item">
                                      Ad Free Premium Access
                                    </li>
                                    <li class="feature__item">
                                      Offline Download
                                    </li>
                                    <li class="feature__item">
                                      4-Device Login
                                    </li>
                                    <li class="feature__item">
                                      1 Simultaneous Stream
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <nav class="mb-4">
                                <div
                                  class="nav nav-tabs"
                                  id="nav-tab"
                                  role="tablist"
                                >
                                  <button
                                    class="nav-link"
                                    id="nav__five__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__five"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__five"
                                    aria-selected="true"
                                  >
                                    Login
                                  </button>
                                  <button
                                    class="nav-link active"
                                    id="nav__six__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__six"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__six"
                                    aria-selected="false"
                                  >
                                    Sign Up
                                  </button>
                                </div>
                              </nav>
                              <div class="tab-content" id="nav-tabContent">
                                <div
                                  class="tab-pane fade"
                                  id="nav__five"
                                  role="tabpanel"
                                  aria-labelledby="nav__five__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-5">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Login
                                    </button>
                                    <div class="forgot__pass__link">
                                      <a href="#" class="forgot__password"
                                        >Forgot Password</a
                                      >
                                    </div>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="tab-pane fade show active"
                                  id="nav__six"
                                  role="tabpanel"
                                  aria-labelledby="nav__six__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="text"
                                        name="username"
                                        class="form-control"
                                        placeholder="Enter Your Name"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <div class="mb-4 form-check">
                                      <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="tos"
                                      />
                                      <label class="form-check-label" for="tos"
                                        >Please send me email and other
                                        marketing communications regarding my
                                        account and other products from
                                        Chorki.</label
                                      >
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Sign Up
                                    </button>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                  <div class="privacy__terms">
                                    By clicking Sign Up, you agree to our
                                    <a href="#" class="link">terms of use</a>
                                    and
                                    <a href="#" class="link">privacy policy</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card__title text-uppercase text-center">
                      Yearly
                    </h3>
                  </div>
                  <div class="card-body">
                    <div class="price__group">
                      <h3 class="prev__price price">BDT 600</h3>
                      <h4 class="price">BDT 499</h4>
                    </div>
                    <ul class="features">
                      <li class="feature__item">Ad Free Premium Access</li>
                      <li class="feature__item">Offline Download</li>
                      <li class="feature__item">4-Device Login</li>
                      <li class="feature__item">1 Simultaneous Stream</li>
                    </ul>
                    <button
                      type="button"
                      class="subscribe__btn btn rounded-pill"
                      data-bs-toggle="modal"
                      data-bs-target="#yearlySubscibe"
                    >
                      Subscribe Now
                    </button>
                  </div>
                </div>
                <div
                  class="modal fade general__modal"
                  id="yearlySubscibe"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="yearlySubscibelLabel"
                  aria-hidden="true"
                >
                  <button
                    type="button"
                    class="login__regi__close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-x"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                      />
                    </svg>
                  </button>
                  <div
                    class="modal-dialog modal-dialog-scrollable modal-fullscreen"
                  >
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="container">
                          <div class="modal__header">
                            <h2 class="modal__header__title">Subscribe</h2>
                            <ul class="progress__steps">
                              <li class="step__item">Plan Selected</li>
                              <li class="step__item active">
                                Create an Account
                              </li>
                              <li class="step__item">Subscribed</li>
                            </ul>
                          </div>
                          <div class="row g-md-5">
                            <div class="col-md-6 mb-5 mb-md-0">
                              <div class="card">
                                <div class="card-body">
                                  <select
                                    class="form-select package__select"
                                    aria-label="Choose package"
                                  >
                                    <option selected value="0">
                                      Half Yearly
                                    </option>
                                    <option value="1">Yearly</option>
                                    <option value="2">Yearly Plus</option>
                                  </select>
                                  <h2 class="subscibe__title">
                                    BDT 299 / 6months
                                  </h2>
                                  <ul class="features">
                                    <li class="feature__item">
                                      Ad Free Premium Access
                                    </li>
                                    <li class="feature__item">
                                      Offline Download
                                    </li>
                                    <li class="feature__item">
                                      4-Device Login
                                    </li>
                                    <li class="feature__item">
                                      1 Simultaneous Stream
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <nav class="mb-4">
                                <div
                                  class="nav nav-tabs"
                                  id="nav-tab"
                                  role="tablist"
                                >
                                  <button
                                    class="nav-link"
                                    id="nav__five__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__five"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__five"
                                    aria-selected="true"
                                  >
                                    Login
                                  </button>
                                  <button
                                    class="nav-link active"
                                    id="nav__six__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__six"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__six"
                                    aria-selected="false"
                                  >
                                    Sign Up
                                  </button>
                                </div>
                              </nav>
                              <div class="tab-content" id="nav-tabContent">
                                <div
                                  class="tab-pane fade"
                                  id="nav__five"
                                  role="tabpanel"
                                  aria-labelledby="nav__five__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-5">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Login
                                    </button>
                                    <div class="forgot__pass__link">
                                      <a href="#" class="forgot__password"
                                        >Forgot Password</a
                                      >
                                    </div>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="tab-pane fade show active"
                                  id="nav__six"
                                  role="tabpanel"
                                  aria-labelledby="nav__six__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="text"
                                        name="username"
                                        class="form-control"
                                        placeholder="Enter Your Name"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <div class="mb-4 form-check">
                                      <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="tos"
                                      />
                                      <label class="form-check-label" for="tos"
                                        >Please send me email and other
                                        marketing communications regarding my
                                        account and other products from
                                        Chorki.</label
                                      >
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Sign Up
                                    </button>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                  <div class="privacy__terms">
                                    By clicking Sign Up, you agree to our
                                    <a href="#" class="link">terms of use</a>
                                    and
                                    <a href="#" class="link">privacy policy</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card__title text-uppercase text-center">
                      Yearly
                    </h3>
                  </div>
                  <div class="card-body">
                    <div class="price__group">
                      <h3 class="prev__price price">BDT 600</h3>
                      <h4 class="price">BDT 499</h4>
                    </div>
                    <ul class="features">
                      <li class="feature__item">Ad Free Premium Access</li>
                      <li class="feature__item">Offline Download</li>
                      <li class="feature__item">4-Device Login</li>
                      <li class="feature__item">1 Simultaneous Stream</li>
                    </ul>
                    <button
                      type="button"
                      class="subscribe__btn btn rounded-pill"
                      data-bs-toggle="modal"
                      data-bs-target="#yearlyPlusSubscibe"
                    >
                      Subscribe Now
                    </button>
                  </div>
                </div>
                <div
                  class="modal fade general__modal"
                  id="yearlyPlusSubscibe"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="yearlyPlusSubscibelLabel"
                  aria-hidden="true"
                >
                  <button
                    type="button"
                    class="login__regi__close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-x"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                      />
                    </svg>
                  </button>
                  <div
                    class="modal-dialog modal-dialog-scrollable modal-fullscreen"
                  >
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="container">
                          <div class="modal__header">
                            <h2 class="modal__header__title">Subscribe</h2>
                            <ul class="progress__steps">
                              <li class="step__item">Plan Selected</li>
                              <li class="step__item active">
                                Create an Account
                              </li>
                              <li class="step__item">Subscribed</li>
                            </ul>
                          </div>
                          <div class="row g-md-5">
                            <div class="col-md-6 mb-5 mb-md-0">
                              <div class="card">
                                <div class="card-body">
                                  <select
                                    class="form-select package__select"
                                    aria-label="Choose package"
                                  >
                                    <option selected value="0">
                                      Half Yearly
                                    </option>
                                    <option value="1">Yearly</option>
                                    <option value="2">Yearly Plus</option>
                                  </select>
                                  <h2 class="subscibe__title">
                                    BDT 299 / 6months
                                  </h2>
                                  <ul class="features">
                                    <li class="feature__item">
                                      Ad Free Premium Access
                                    </li>
                                    <li class="feature__item">
                                      Offline Download
                                    </li>
                                    <li class="feature__item">
                                      4-Device Login
                                    </li>
                                    <li class="feature__item">
                                      1 Simultaneous Stream
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <nav class="mb-4">
                                <div
                                  class="nav nav-tabs"
                                  id="nav-tab"
                                  role="tablist"
                                >
                                  <button
                                    class="nav-link"
                                    id="nav__five__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__five"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__five"
                                    aria-selected="true"
                                  >
                                    Login
                                  </button>
                                  <button
                                    class="nav-link active"
                                    id="nav__six__tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav__six"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav__six"
                                    aria-selected="false"
                                  >
                                    Sign Up
                                  </button>
                                </div>
                              </nav>
                              <div class="tab-content" id="nav-tabContent">
                                <div
                                  class="tab-pane fade"
                                  id="nav__five"
                                  role="tabpanel"
                                  aria-labelledby="nav__five__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-5">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Login
                                    </button>
                                    <div class="forgot__pass__link">
                                      <a href="#" class="forgot__password"
                                        >Forgot Password</a
                                      >
                                    </div>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="tab-pane fade show active"
                                  id="nav__six"
                                  role="tabpanel"
                                  aria-labelledby="nav__six__tab"
                                >
                                  <form>
                                    <div class="mb-4">
                                      <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter Your Email"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="text"
                                        name="username"
                                        class="form-control"
                                        placeholder="Enter Your Name"
                                      />
                                    </div>
                                    <div class="mb-4">
                                      <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Enter Password"
                                      />
                                    </div>
                                    <div class="mb-4 form-check">
                                      <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="tos"
                                      />
                                      <label class="form-check-label" for="tos"
                                        >Please send me email and other
                                        marketing communications regarding my
                                        account and other products from
                                        Chorki.</label
                                      >
                                    </div>
                                    <button
                                      type="submit"
                                      class="btn btn__submit"
                                    >
                                      Sign Up
                                    </button>
                                  </form>
                                  <div class="alternative__text">or</div>
                                  <div class="authentication__methods">
                                    <div class="top">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn facebook"
                                      >
                                        <i class="fa-brands fa-facebook-f"></i>
                                        Log in With Facebook
                                      </a>
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn google"
                                      >
                                        <img
                                          src="./assets/images/google.png"
                                          alt="google"
                                        />
                                        Log in With Google
                                      </a>
                                    </div>
                                    <div class="bottom">
                                      <a
                                        href="#"
                                        type="button"
                                        class="social__btn apple"
                                      >
                                        <i class="fa-brands fa-apple"></i>
                                        Sign in With Apple
                                      </a>
                                    </div>
                                  </div>
                                  <div class="privacy__terms">
                                    By clicking Sign Up, you agree to our
                                    <a href="#" class="link">terms of use</a>
                                    and
                                    <a href="#" class="link">privacy policy</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p class="disclimar">
              Upon cancellation, service access will end upon the completion of
              payment terms. There is no refund of early termination of any
              plan.
            </p>
          </div>
        </div>
      </section>
      <!-- view plans ends -->

      <!-- chat box starts -->
      <section class="chat__box">
        <button class="chat__trigger__btn">
          <i class="fa-solid fa-comment-dots"></i>
        </button>
        <div class="chat__box__field">
          <button type="button" class="chat__box__close__btn">
            <i class="fa-solid fa-xmark"></i>
          </button>
          <div class="top">
            <img
              src="./assets/images/logo__white.png"
              alt="Chorki"
              width="112"
              class="chat__box__logo"
            />
            <h2 class="chat__box__title">Chorki Support</h2>
            <p class="chat__box__tag">Typically replies within few hours</p>
          </div>
          <div class="chatting__fields">
            <div class="chats">
              <div class="user__stack">
                <h3 class="user__name">Chorki</h3>
                <div class="user__chat">
                  <div class="user__img">C</div>
                  <div class="chat__message">
                    Hello there! Need help? Reach out to us right here, and
                    we'll get back to you as soon as we can!
                  </div>
                </div>
              </div>
              <div class="user__stack opposite__user__stack">
                <h3 class="user__name">User</h3>
                <div class="user__chat">
                  <div class="user__img">U</div>
                  <div class="chat__message">
                    Hello there! Need help? Reach out to us right here
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat__features">
            <form action="#" method="post">
              <div class="chat__input__group">
                <textarea
                  name="message"
                  id="message"
                  class="message"
                  placeholder="Reply here..."
                ></textarea>
                <input
                  accept="file"
                  type="file"
                  name="file__upload"
                  id="file__upload"
                  hidden
                />

                <label for="file__upload" class="chat__btn">
                  <i class="fa-solid fa-paperclip"></i>
                </label>
                <button type="button" class="chat__emoji__trigger chat__btn">
                  <i class="fa-regular fa-face-smile-beam"></i>
                </button>
                <button type="submit" class="chat__send chat__btn">
                  <i class="fa-regular fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- chat box ends -->
    </main>
    <!-- website body ends -->

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

    <!-- Bootstrap Bundle JS -->
    <script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Vanilla Emoji Picker -->
    <script src="./assets/libraries/vanilla-javascript-emoji-picker/vanillaEmojiPicker.js"></script>

    <!-- External JS -->
    <script src="./js/index.js"></script>
  </body>
</html>
