@extends('layouts.app')


@section('content')

<div class="wm-main-banner">
            
    <div class="wm-banner-one">
        <div class="wm-banner-one-for">
            <div class="wm-banner-one-for-layer"> <img src="{{ asset("showcase-image.webp") }}" alt=""> </div>
        </div>
        <div class="wm-banner-one-nav">
            <div class="wm-banner-one-nav-layer">
                <h1>Formation diplômante</h1>
                <p>Transformez votre avenir avec notre programme de Formation diplômante et ouvrez les portes vers de nouvelles opportunités professionnelles</p>
                <a href="#" class="wm-banner-btn">lire plus</a>
            </div>
            <div class="wm-banner-one-nav-layer">
                <h1>Cours du soir</h1>
                <p>Élevez vos compétences  avec notre programme de formation par Cours du soir, adapté à votre emploi du temps et propulsant votre carrière vers de nouveaux sommets.</p>
                <a href="#" class="wm-banner-btn">lire plus</a>
            </div>
            
        </div>
    </div>

</div>
{{-- to be component later --}}

<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="wm-search-course">
                        <h3 class="wm-short-title wm-color">Find Your Course</h3>
                        <p>Fill in the form below to find your course:</p>
                        <form>
                            <ul>
                                <li>
                                    <div class="wm-radio">
                                        <div class="wm-radio-partition">
                                            <input id="male" type="radio" name="gender" value="male">
                                            <label for="male">by ID</label>
                                        </div>
                                        <div class="wm-radio-partition">
                                            <input id="female" type="radio" name="gender" value="female">
                                            <label for="female">by name</label>
                                        </div>
                                    </div>
                                </li>
                                <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                <li>
                                    <div class="wm-apply-select">
                                        <select>
                                            <option>Category</option>
                                            <option>Category</option>
                                            <option>Category</option>
                                            <option>Category</option>
                                        </select>
                                    </div>
                                </li>
                                <li> <input type="submit" value="Search course"> </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wm-service wm-box-service">
                        <ul>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-suitcase"></i>
                                    <h6><a href="#">Business</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-money"></i>
                                    <h6><a href="#">Economics</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-school"></i>
                                    <h6><a href="#">Math</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-science"></i>
                                    <h6><a href="#">Science</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-computer"></i>
                                    <h6><a href="#">Computing</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-technology3"></i>
                                    <h6><a href="#">Web Design</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-web3"></i>
                                    <h6><a href="#">Development</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-shape"></i>
                                    <h6><a href="#">Biology</a></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-courses-popular-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-fancy-title"> <h2>Popular <span>Courses</span></h2> </div>
                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            <li class="col-md-3">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-1.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                            <h6><a href="#">Shelly T. Forrester</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Advanced Architectural Research</a></h6>
                                        <div class="wm-courses-price"> <span>$32</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-2.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-2.jpg" alt="">
                                            <h6><a href="#">Sam K. Harrington</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                        <div class="wm-courses-price"> <span>Free</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 438</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 28</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-3.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-3.jpg" alt="">
                                            <h6><a href="#">Sara A. Shirley</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Transdisciplinary Design</a></h6>
                                        <div class="wm-courses-price"> <span>$79</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-4.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-4.jpg" alt="">
                                            <h6><a href="#">Julius M. Lepage</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Financial Information Systems</a></h6>
                                        <div class="wm-courses-price"> <span>$50</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-whychooseus-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8">
                    <div class="whychooseus-list">
                        <div class="wm-fancy-title"> <h2>Why <span>Choose Us</span></h2> </div>
                        <ul class="row">
                            <li class="col-md-4">
                                <span>209</span>
                                <h6>of our trainees have got a prestigious job</h6>
                            </li>
                            <li class="col-md-4">
                                <span>91%</span>
                                <h6>students have established successful business</h6>
                            </li>
                            <li class="col-md-4">
                                <span>35%</span>
                                <h6>have already earned their first million</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-questions-studying">
                        <img src="extra-images/ask-questoin-bg.png" alt="">
                        <h3 class="wm-color">Questions about studying with us?</h3>
                        <p>We have a team of student advisers & officers to answer any questions:</p>
                        <a class="wm-banner-btn" href="#">ask us now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-learn-listing-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-fancy-title"> <h2>You Can <span>Learn</span></h2> </div>
                    <div class="wm-learn-listing">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure><a href="#"><img src="extra-images/learn-listing-1.png" alt=""></a>
                                    <figcaption>
                                        <h2>Research</h2>
                                        <a href="#" class="wm-banner-btn">Read More</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="extra-images/learn-listing-2.png" alt=""></a>
                                    <figcaption>
                                        <h2>Academics</h2>
                                        <a href="#" class="wm-banner-btn">Read More</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="extra-images/learn-listing-3.png" alt=""></a>
                                    <figcaption>
                                        <h2>Admissions</h2>
                                        <a href="#" class="wm-banner-btn">Read More</a>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure><a href="#"><img src="extra-images/learn-listing-4.png" alt=""></a>
                                    <figcaption>
                                        <h2>Student Life</h2>
                                        <a href="#" class="wm-banner-btn">Read More</a>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-latestevents-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-9 wm-top-spacer">
                    <h2 class="wm-simple-title">Our Latest Events</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wm-event-latest-slider">
                                <div class="wm-event-latest-layer">
                                    <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                    <a href="#" class="wm-banner-btn">about us</a>
                                </div>
                                <div class="wm-event-latest-layer">
                                    <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                    <a href="#" class="wm-banner-btn">about us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-event wm-latest-event">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="#"><img src="extra-images/latest-event-1.png" alt=""></a></figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a></h6>
                                            <time datetime="2008-02-14 20:00">21/04/2016</time>
                                            <p>Join us for outer-space themed games, prizes, science & talks about careers in the UK.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-event wm-latest-event">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="#"><img src="extra-images/latest-event-2.png" alt=""></a></figure>
                                        <div class="wm-latest-event-text">
                                            <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a></h6>
                                            <time datetime="2008-02-14 20:00">19/04/2016</time>
                                            <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol writer launches the.</p>
                                            <a href="#" class="wm-banner-btn">check event</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wm-counter wm-counter-simple">
                        <ul class="row">
                            <li class="col-md-12">
                                <span class="word-count">5</span>
                                <h6>th best University in Europe (Youth Inc. 2015 ranking)</h6>
                            </li>
                            <li class="col-md-12">
                                <span class="word-count">68</span>
                                <h6>% International students especially from Asia, Africa & Europe</h6>
                            </li>
                            <li class="col-md-12">
                                <span class="word-count">91</span>
                                <h6>Student Nationalities</h6>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-testimonial-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-fancy-title"> <h2>What <span>Clients Say</span></h2> <p>Don't take our word for it, see what our awesome clients say.</p> </div>
                    <div class="wm-testimonial-slider">
                        <div class="wm-testimonial-slider-wrap">
                            <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-1.png" alt=""></a>
                                <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                            </figure>
                        </div>
                        <div class="wm-testimonial-slider-wrap">
                            <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-2.png" alt=""></a>
                                <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                            </figure>
                        </div>
                        <div class="wm-testimonial-slider-wrap">
                            <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-1.png" alt=""></a>
                                <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                            </figure>
                        </div>
                        <div class="wm-testimonial-slider-wrap">
                            <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                            <figure>
                                <a href="#" class="wm-testimonial-thumb"><img src="extra-images/testimonial-thumb-2.png" alt=""></a>
                                <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-ourhistory-full">
        <span class="wm-light-transparent"></span>
        <div class="container">
            <div class="row">
                
                <div class="col-md-5">
                    <div class="wm-history-list">
                        <h2>Our History</h2>
                        <ul>
                            <li>
                                <time datetime="2008-02-14 20:00">2016</time>
                                <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2015</time>
                                <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2014</time>
                                <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2013</time>
                                <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2016</time>
                                <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2015</time>
                                <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2014</time>
                                <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                            </li>
                            <li>
                                <time datetime="2008-02-14 20:00">2013</time>
                                <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="wm-subscribe-form">
                        <h2>Still not convinced? We can help you!</h2>
                        <p>Fill out the form below and we will contact you.</p>
                        <form>
                            <input type="text" value="Name:" onblur="if(this.value == '') { this.value ='Name:'; }" onfocus="if(this.value =='Name:') { this.value = ''; }">
                            <input type="email" value="E-mail:" onblur="if(this.value == '') { this.value ='E-mail:'; }" onfocus="if(this.value =='E-mail:') { this.value = ''; }">
                            <input type="submit" value="Get Advice">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-news-grid-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-fancy-title"> <h2>Blog <span>News</span></h2> <p>We bring you all the useful information of the University's Community</p> </div>
                    <div class="wm-news wm-news-grid">
                        <ul class="row">
                            <li class="col-md-4">
                                <figure>
                                    <a href="#"><img src="extra-images/news-grid-1.png" alt=""></a>
                                    <figcaption class="wm-bgcolor">
                                        <img src="extra-images/news-grid-thumb-1.png" alt="">
                                        <h6>Posted by: <a href="#">Sam K. Harrington</a></h6>
                                    </figcaption>
                                </figure>
                                <div class="wm-newsgrid-text">
                                    <ul class="wm-post-options">
                                        <li>7/4/2016</li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 12 comments</a></li>
                                        <li><a href="#"><i class="wmicon-folder2"></i> admission</a></li>
                                    </ul>
                                    <h5><a href="#" class="wm-color">Seven UK business schools make the Top 10</a></h5>
                                    <p>The largest-ever QS Distance Online MBA Rankings have been released by higher and business education analysts QS.</p>
                                    <a class="wm-banner-btn" href="#">read article</a>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <figure>
                                    <a href="#"><img src="extra-images/news-grid-2.png" alt=""></a>
                                    <figcaption class="wm-bgcolor">
                                        <img src="extra-images/news-grid-thumb-2.png" alt="">
                                        <h6>Posted by: <a href="#">Wanda R. Teixeira</a></h6>
                                    </figcaption>
                                </figure>
                                <div class="wm-newsgrid-text">
                                    <ul class="wm-post-options">
                                        <li>6/4/2016</li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 21 comments</a></li>
                                        <li><a href="#"><i class="wmicon-folder2"></i> business</a></li>
                                    </ul>
                                    <h5><a href="#" class="wm-color">The University Business School centre of excellence</a></h5>
                                    <p>The University has announced the launch of its first free online course as part.  These individuals or groups can more effectively.</p>
                                    <a class="wm-banner-btn" href="#">read article</a>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <figure>
                                    <a href="#"><img src="extra-images/news-grid-3.png" alt=""></a>
                                    <figcaption class="wm-bgcolor">
                                        <img src="extra-images/news-grid-thumb-3.png" alt="">
                                        <h6>Posted by: <a href="#">Marvin P. Sanchez</a></h6>
                                    </figcaption>
                                </figure>
                                <div class="wm-newsgrid-text">
                                    <ul class="wm-post-options">
                                        <li>5/4/2016</li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 18 comments</a></li>
                                        <li><a href="#"><i class="wmicon-folder2"></i> students</a></li>
                                    </ul>
                                    <h5><a href="#" class="wm-color">Our research could slash energy bills in Milton</a></h5>
                                    <p>The University is developing the UK’s first community based website that will allow people in Milton Keynes.</p>
                                    <a class="wm-banner-btn" href="#">read article</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-simple-section-title wm-partners-title"> <h2>University <span>Partners</span></h2> </div>
                    <div class="wm-partners-slider gallery">
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="extra-images/university-partners-1.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-2.png"> <img src="extra-images/university-partners-2.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-3.png"> <img src="extra-images/university-partners-3.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-4.png"> <img src="extra-images/university-partners-4.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-5.png"> <img src="extra-images/university-partners-5.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-6.png"> <img src="extra-images/university-partners-6.png" alt=""> </a> </div>
                        <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="extra-images/university-partners-1.png" alt=""> </a> </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    <div class="wm-main-section wm-contact-full">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="wm-contact-tab">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                        <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                <div class="col-md-8">
                                    <div class="wm-contact-form">
                                        <span>Talk To Us Today</span>
                                        <form>
                                            <ul>
                                                <li>
                                                    <i class="wmicon-black"></i>
                                                    <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-symbol3"></i>
                                                    <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-technology4"></i>
                                                    <input type="text" value="Phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-web2"></i>
                                                    <textarea placeholder="Message"></textarea>
                                                </li>
                                                <li> <input type="submit" value="Send Message"> </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <span class="wm-contact-title">Contact Info</span>
                            <div class="wm-contact-service">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                        <h5 class="wm-color">Address</h5>
                                        <p>195 Cooks Mine Road Espanola, NM 87532</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                        <h5 class="wm-color">Phone & Fax</h5>
                                        <p>+1 505-753-5656 +1 505-753-4437</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                        <h5 class="wm-color">E-mail</h5>
                                        <p><a href="mailto:name@email.com">Info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="contact-social-icon">
                                <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                            </ul>
                        </div>
                      </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>


    
@endsection