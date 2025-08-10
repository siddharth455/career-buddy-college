<?php require "common/header.php" ?>
<div class="body-overlay"></div>
<!-- header search end -->

<!-- main area start  -->
<main>
    <!-- hero section start  -->
    <section class="hero hero-style-two pos-rel">
        <div class="bg_img hero-bg" data-background="assets/img/uploads/homepage-banner.webp">
            <div class="container">
                <div class="col-lg-7 col-md-7">
                    <div class="hero__content-wrap">
                        <div class="section-title clr-white pt-25">
                            <span class="sub-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".4s">Welcome to career buddy college</span>
                            <h1 class="title mb-25 wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".4s">Achieve Your Dreams <br> At Career Buddy College</h1>
                            <p class="content wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".4s">We empower students to achieve their dreams through diverse.</p>
                        </div>
                        <div class="clg-btn mt-55 wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".4s">
                            <a class="thm-btn thm-btn--white" data-bs-toggle="modal" data-bs-target="#exampleModal">apply now
                                <span><img src="assets/img/icon/learning.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end  -->
    <section class="about pt-100 pb-80 pos-rel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mt-20">
                    <div class="xb-feature_wrap pos-rel ul_li">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/about-icon01.png" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Academic Resources</h3>
                            <span class="xb-item--content">We offers essential resources.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-20">
                    <div class="xb-feature_wrap pos-rel ul_li">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/about-icon02.png" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Aid & Scholarships</h3>
                            <span class="xb-item--content">Financial Aid & Scholarships.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-20">
                    <div class="xb-feature_wrap pos-rel ul_li">
                        <div class="xb-item--icon">
                            <img src="assets/img/icon/about-icon03.png" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Your Future guide</h3>
                            <span class="xb-item--content">Our guide is committed to success.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-title about-sec-title mb-60 pt-115 wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".6s">
                <span class="sub-title">Our academics supports</span>
                <h1 class="title">Career Buddy College empowers you with clear concepts, doubt-solving, and study strategies to excel academically while preparing you for a confident, successful future.</h1>
            </div>
            <div class="row align-items-center mt-none-30">
                <div class="col-lg-6 mt-30">
                    <div class="xb-about_left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration=".6s">
                        <video
                            width="100%"
                            height="100%"
                            loop
                            muted
                            playsinline
                            autoplay
                            poster="assets/img/about/about-img01.jpg">
                            <source src="https://html.xpressbuddy.com/edubost/about_video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="xb-about-right ml-40 wow fadeInRight" data-wow-delay="200ms" data-wow-duration=".6s">
                        <h4 class="xb-item--title mb-15">Innovation and Creativity</h4>
                        <p class="xb-item--content">At Career Buddy College, we believe strong academics are the first step toward a successful future. Our personalized academic support helps you excel in your studies while preparing for the real world. We offer subject-specific guidance, doubt-clearing sessions, and exam preparation workshops to ensure you stay confident and clear in your concepts. Learn effective study strategies, manage your time wisely, and get help on projects and assignments to enhance practical learning. Our mentors are here to support you, whether you need help understanding tough topics or want to improve your academic performance. With Career Buddy College, you receive the right guidance to balance your academics with your career growth journey. Take the next step toward your goals with us and let your success story begin here.</p>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="assets/img/shape/about-shape.png" alt="">
        </div>
    </section>
    <section>
        <div class="container mb-4">
            <h2 class="text-custom">Industry Collaboration</h2>
            <h3>Driving innovation through strategic industry collaboration and partnerships.</h3>

            <div class="swiper topCompanies-block">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= 39; $i++) {
                        $imageSrc = "assets/img/awards/c ($i).webp";
                        echo '
            <div class="swiper-slide topCompaniesLogo-slider">
                <div class="logo-img-company" aria-hidden="true" tabindex="-1">
                    <img class="lazy-img" src="' . $imageSrc . '" alt="GNC top recruiter partner">
                </div>
            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper(".topCompanies-block", {
                slidesPerView: 5,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 3
                    },
                    1024: {
                        slidesPerView: 5
                    }
                }
            });
        });
    </script>

    <section class="cta">
        <div class="cta-wrapper bg_img pt-115 pb-120" data-background="assets/img/uploads/index-2.jpg">
            <div class="container">
                <div class="xb-cta-wrap z-1 pos-rel">
                    <div class="section-title text-center mb-40">
                        <span class="sub-title">Let's Get Started</span>
                        <h2 class="title mb-35">Where all belong</h2>
                        <p class="cta-content">We believe education is enriched by the unique perspectives and experiences each student brings, and we are committed to fostering an environment that celebrates and values diversity in all its forms. It is central to our mission to embrace and encourage diversity, equity and inclusion (DE&I).</p>
                    </div>
                    <div class="cta-btn btns justify-content-center ul_li">
                        <a class="thm-btn thm-btn--white" href="courses.php">find the right program
                            <span><img src="assets/img/icon/book.svg" alt=""></span>
                        </a>
                        <a class="thm-btn thm-btn--white" data-bs-toggle="modal" data-bs-target="#exampleModal">start you application
                            <span><img src="assets/img/icon/learning.png" alt=""></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade no-bg-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-none bg-transparent">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <?php require "applyform.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="section-container mt-4 mb-4">
            <div class="image-container">
                <img src="assets/img/uploads/health-banner.webp" alt="Healthcare Students">
            </div>
            <div class="text-container">
                <h2>Become a <br> <strong>Successful Healthcare Professional with Career Buddy College</strong></h2>
                <div class="stats-grid">
                    <div class="stat-box">
                        <h3>300+</h3>
                        <p>Students Trained</p>
                    </div>
                    <div class="stat-box">
                        <h3>100+</h3>
                        <p>Healthcare Employers</p>
                    </div>
                    <div class="stat-box">
                        <h3>98%</h3>
                        <p>Placement Rate</p>
                    </div>
                    <div class="stat-box">
                        <h3>60+</h3>
                        <p>Industry Partner Across India</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .section-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 20px;
            max-width: 1350px;
            margin: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .image-container {
            flex: 1 1 500px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            max-width: 529px;
            height: auto;
            border-radius: 20px;
        }

        .text-container {
            flex: 1 1 400px;
            padding: 30px;
        }

        .text-container h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1e1e2f;
        }

        .stats-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 20px;
        }

        .stat-box {
            flex: 1 1 180px;
        }

        .stat-box h3 {
            font-size: 1.5rem;
            color: #e60000;
            font-weight: 700;
        }

        .stat-box p {
            font-size: 1rem;
            color: #333;
            margin-top: 4px;
        }

        .highlight-text {
            font-size: 1rem;
            margin-top: 10px;
        }

        .highlight-text span {
            color: #e60000;
            font-weight: bold;
        }

        @media screen and (max-width: 768px) {
            .section-container {
                flex-direction: column;
                padding: 20px;
            }

            .text-container {
                padding: 20px 0;
            }
        }
    </style>

    <section class="program pos-rel pt-40">
        <div class="container">
            <div class="pro-top ul_li_between mb-40">
                <div class="section-title mb-20">
                    <span class="sub-title">Our academics offerings</span>
                    <h1 class="title">Top Programs</h1>
                </div>
            </div>
            <div class="row mt-none-60">
                <div class="col-lg-3 col-md-6 mb-40 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/nursing.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor of Science in Nursing (Bsc Nursing)</a></h2>
                            <ul class="xb-item--meta ul_li">

                                <li><img src="assets/img/icon/clock.png" alt="">8 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="nursing.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/bpt.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor of Physiotherapy (BPT)</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">8 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="bpt.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/opto.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor of science in Optometry (Bsc Optometry)</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">6 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="opto.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/ott.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor of Operation Theatre Technology (BOTT)</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">6 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="ott.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/bmlt.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor of Medical Laboratory Technology</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">6 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="mlt.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/bmrit.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Bachelor in Medical Radio and Imaging Technology</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">6 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="bmrit.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/mpt.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Master of Physiotherapy (MPT)</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">4 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="mpt.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-60">
                    <div class="xb-program__wrapper">
                        <div class="xb-item--img text-center">
                            <a href="course-single.php"><img src="assets/img/uploads/mha.jpg" alt=""></a>
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--deprt ul_li_between">

                            </div>
                            <h2 class="xb-item--title border-effect-2"><a href="course-single.php">Master of Hospital Administration (MHA)</a></h2>
                            <ul class="xb-item--meta ul_li">
                                <li><img src="assets/img/icon/clock.png" alt="">4 Semester</li>
                            </ul>
                            <div class="xb-item--dep-btn">
                                <a href="mha.php">enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xb-cta bg_img mt-100 pos-rel" data-background="assets/img/uploads/scholarship-banner.png" style="margin-bottom: 20px;">
                <h2 class="mb-15" style="color: #212121;">Get Your Quality Skills Certificate Through Career Buddy College</h2>
                <div class="xb-btn xb-cta-btn ul_li">
                    <a class="thm-btn btn-yellow mt-20" data-bs-toggle="modal" data-bs-target="#exampleModal">apply now
                        <span><img src="assets/img/icon/learning.png" alt=""></span>
                    </a>
                    <span class="mt-20" style="color: #212121;"><img src="assets/img/icon/call-icon.png" style="width: 21px; height:21px;" alt=""> 7300900900</span>
                </div>
            </div>
        </div>
    </section>

    <?php require "placement.php" ?>
    <!-- campus section start  -->
    <section class="cta pb-30 ">
        <div class="section-title mb-60 mt-40 text-center">
            <span class="sub-title">Our Campus Partner</span>
            <h1 class="title">Our Campus Partner</h1>
        </div>
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-6 mt-30">
                    <div class="cta-item pos-rel cta-mobile" data-background="assets/img/uploads/gnc-index.webp">
                        <div class="cta-inner">
                            <div class="xb-item--icon" style="margin-top: 200px;">

                            </div>
                            <a class="thm-btn thm-btn--gray" data-bs-toggle="modal" data-bs-target="#exampleModal">apply now
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.25 19.4919V20.7499C16.25 21.1639 15.914 21.4999 15.5 21.4999C15.086 21.4999 14.75 21.1639 14.75 20.7499V19.4999H16C16.084 19.4999 16.167 19.4969 16.25 19.4919Z" fill="#170006" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 19.5H8C5.929 19.5 4.25 17.821 4.25 15.75V12.668L9.964 15.825C11.202 16.509 12.798 16.509 14.036 15.825L14.75 15.431V19.5ZM16.25 14.602L19.75 12.668V15.75C19.75 17.737 18.205 19.363 16.25 19.492V14.602Z" fill="#170006" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 14.2879L13.552 14.9499C12.608 15.4719 11.392 15.4719 10.448 14.9499L2.134 10.3559C1.568 10.0429 1.25 9.49495 1.25 8.92195C1.25 8.34795 1.568 7.79995 2.134 7.48795L10.448 2.89295C11.392 2.37195 12.608 2.37195 13.552 2.89295L21.866 7.48795C22.432 7.79995 22.75 8.34795 22.75 8.92195C22.75 9.49495 22.432 10.0429 21.866 10.3559L16.25 13.4589V12.7499C16.25 12.5509 16.171 12.3599 16.03 12.2199L12.53 8.71995C12.238 8.42695 11.762 8.42695 11.47 8.71995C11.177 9.01195 11.177 9.48795 11.47 9.77995L14.75 13.0609V14.2879Z" fill="#170006" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="cta-item pos-rel cta-mobile" data-background="assets/img/uploads/anmol-index.webp">
                        <div class="cta-inner">
                            <div class="xb-item--icon" style="margin-top: 200px;">

                            </div>
                            <a class="thm-btn thm-btn--gray" data-bs-toggle="modal" data-bs-target="#exampleModal">apply now
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.25 19.4919V20.7499C16.25 21.1639 15.914 21.4999 15.5 21.4999C15.086 21.4999 14.75 21.1639 14.75 20.7499V19.4999H16C16.084 19.4999 16.167 19.4969 16.25 19.4919Z" fill="#170006" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 19.5H8C5.929 19.5 4.25 17.821 4.25 15.75V12.668L9.964 15.825C11.202 16.509 12.798 16.509 14.036 15.825L14.75 15.431V19.5ZM16.25 14.602L19.75 12.668V15.75C19.75 17.737 18.205 19.363 16.25 19.492V14.602Z" fill="#170006" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.75 14.2879L13.552 14.9499C12.608 15.4719 11.392 15.4719 10.448 14.9499L2.134 10.3559C1.568 10.0429 1.25 9.49495 1.25 8.92195C1.25 8.34795 1.568 7.79995 2.134 7.48795L10.448 2.89295C11.392 2.37195 12.608 2.37195 13.552 2.89295L21.866 7.48795C22.432 7.79995 22.75 8.34795 22.75 8.92195C22.75 9.49495 22.432 10.0429 21.866 10.3559L16.25 13.4589V12.7499C16.25 12.5509 16.171 12.3599 16.03 12.2199L12.53 8.71995C12.238 8.42695 11.762 8.42695 11.47 8.71995C11.177 9.01195 11.177 9.48795 11.47 9.77995L14.75 13.0609V14.2879Z" fill="#170006" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- campus section end  -->


    <section class="fanfact pos-rel">
        <div class="container" style="margin-top: 400px;">
            <div class="fanfact-wrapper">
                <div class="fanfact-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="xb-fanfact__wrapper pos-rel">
                                <div class="xb-item--img">
                                    <img src="assets/img/uploads/placement-banner.webp" alt="">
                                </div>
                                <h2 class="xb-item--title"> </h2>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--number"></h3>
                                    <h2 class="xb-item--text"></h2>
                                    <p class="xb-item--content"></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-fanfact__wrapper pos-rel">
                                <div class="xb-item--img">
                                    <img src="assets/img/uploads/library-banner.webp" alt="">
                                </div>
                                <h3 class="xb-item--title"> World-class resources and<br> DELNET access for<br> limitless learning. </h3>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--number"></h3>
                                    <h2 class="xb-item--text">Access. Research. Excel.</h2>
                                    <p class="xb-item--content">Career Buddy College Library offers world-class resources, DELNET access, and online research support to empower students with limitless learning opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-fanfact__wrapper pos-rel">
                                <div class="xb-item--img">
                                    <img src="assets/img/uploads/lab.webp" alt="">
                                </div>
                                <h2 class="xb-item--title">Hands-On Learning, <br>  Future Ready. </h2>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--number"></h3>
                                    <h2 class="xb-item--text"></h2>
                                    <p class="xb-item--content">Career Buddy College’s world-class labs offer practical, hands-on learning experiences, fostering innovation, critical thinking, and skills to make students future-ready in every field.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination ul_li_center"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- event section start  -->
    <?php
    // Load events data
    $eventsFile = __DIR__ . "/admin/data/events.json";
    $events = [];

    if (file_exists($eventsFile)) {
        $json = file_get_contents($eventsFile);
        $events = json_decode($json, true);
    }

    // Sort by date descending if dates exist
    uasort($events, function ($a, $b) {
        $dateA = isset($a['date']) ? strtotime($a['date']) : 0;
        $dateB = isset($b['date']) ? strtotime($b['date']) : 0;
        return $dateB <=> $dateA;
    });
    ?>
    <section class="event pos-rel pt-115" style="background-color: #f1f1e9;">
        <div class="container">
            <div class="section-title text-center mb-40">
                <span class="sub-title">Our Events</span>
                <h1 class="title">Our upcoming events</h1>
            </div>
            <div class="row justify-content-center">

                <!-- LEFT: First 3 events -->
                <div class="col-xl-6 col-lg-8">
                    <?php
                    $count = 0;
                    foreach ($events as $eventId => $event):
                        if ($count >= 3) break;
                        $count++;
                    ?>
                        <div class="xb-event-wrapper mt-20">
                            <div class="xb-event-left ul_li align-items-center">
                                <div class="xb-item--img pos-rel">
                                <img 
    src="admin/<?= htmlspecialchars($event['image']) ?>" 
    alt="<?= htmlspecialchars($event['title']) ?>"
    width="250"
    height="140"
    style="object-fit: cover; border-radius: 8px;"
>

                                    <span class="xb-item--date">
                                        <?= isset($event['date']) ? date('d, M Y', strtotime($event['date'])) : 'Coming Soon' ?>
                                    </span>
                                </div>
                                <div class="xb-item--author">
                                    <span class="xb-item--location">

                                    </span>
                                    <h2 class="xb-item--title border-effect">
                                        <a href="event-single.php?id=<?= urlencode($eventId) ?>">
                                            <?= htmlspecialchars($event['title']) ?>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- RIGHT: 4th event if available -->
                <div class="col-xl-6 col-lg-8">
                    <?php
                    $eventsArray = array_values($events);
                    if (isset($eventsArray[3])):
                        $event = $eventsArray[3];
                    ?>
                        <div class="xb-event-item mt-20">
                            <div class="xb-item--img">
                                <img
                                    src="admin/<?= htmlspecialchars($event['image']) ?>"
                                    alt="<?= htmlspecialchars($event['title']) ?>"
                                    style="width: 100%; height: 320px; object-fit: cover; border-radius: 8px;">

                            </div>
                            <div class="ul_li xb-item--wrap">
                                <div class="xb-item--content">
                                    <span class="xb-item--location">

                                    </span>
                                    <h2 class="xb-item--title border-effect">
                                        <a href="event-single.php?id=<?= urlencode(array_keys($events)[3]) ?>">
                                            <?= htmlspecialchars($event['title']) ?>
                                        </a>
                                    </h2>
                                    <div class="xb-event-btn pt-15">
                                        <a class="thm-btn" href="event-single.php?id=<?= urlencode(array_keys($events)[3]) ?>">
                                            Read More
                                            <span class="icon">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                    <path d="M10.4795 21..." fill="#170006" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="xb-item--date-inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="assets/img/icon/note-book.svg" alt="">
                                    </div>
                                    <span class="xb-item--date">
    <?= !empty($event['date']) ? date('d, M Y', strtotime($event['date'])) : '' ?>
</span>


                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Button -->
                <div class="event-btns pos-rel z-1 text-center mt-40">
                    <a class="more-btn" href="event.php">view more events
                        <span>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                <path d="M10.4795 21..." fill="#170006" />
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>

        <div class="xb-event-bottom mt-1">
            <img src="assets/img/uploads/graduation-ceremony.webp" alt="">
        </div>

        <div class="event-shape">
            <div class="shape shape--one">
                <img data-parallax='{"x":-50,"y":-80}' src="assets/img/shape/stamp.png" alt="">
            </div>
            <div class="shape shape--two">
                <img src="assets/img/shape/Union.png" alt="">
            </div>
        </div>
    </section>

    <!-- event section end  -->
    <!-- testimonial section start  -->
    <?php require "testimoni-2.php" ?>
    <!-- testimonial section end  -->
</main>
<!-- main area end  -->

</div>
<?php require "common/footer.php" ?>