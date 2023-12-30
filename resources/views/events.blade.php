@extends('layouts.app')

@section('content')
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="wm-filterable-link">
                        <ul>
                            <li><a href="#" data-filter="*" class="active">Latest Events</a></li>
                            <li><a href="#" data-filter=".php">Upcoming Events</a></li>
                            <li><a href="#" data-filter=".wordpress">Expired Events</a></li>
                        </ul>
                    </div>
                    <div class="wm-event wm-latest-event wm-filter-event">
                        <ul class="row">
                            <li class="col-md-3 php">
                                <figure><a href="#"><img src="extra-images/latest-event-1.png" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a></h6>
                                    <time datetime="2008-02-14 20:00">21/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                    <p>Join us for outer-space themed games, prizes, science & talks about careers in the UK.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 php">
                                <figure><a href="#"><img src="extra-images/latest-event-2.png" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a></h6>
                                    <time datetime="2008-02-14 20:00">19/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                    <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol writer launches the.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 wordpress">
                                <figure><a href="#"><img src="extra-images/latest-event-3.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Modern ephemera sit alongside 400-year-old rolls</a></h6>
                                    <time datetime="2008-02-14 20:00">18/04/2016 <span><i class="wmicon-clock"></i> 9:00am - 11:00am</span></time>
                                    <p>Events listed here are open to every one. Whether you want to listen to a lecture, learn a new skill.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 wordpress">
                                <figure><a href="#"><img src="extra-images/latest-event-4.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Bodleian's & uniquely displays these treasures</a></h6>
                                    <time datetime="2008-02-14 20:00">17/04/2016 <span><i class="wmicon-clock"></i> 9:30am - 11:15am</span></time>
                                    <p>An exhibition, see a play staged by Oxford University students or attend one of our sporting events.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 php">
                                <figure><a href="#"><img src="extra-images/latest-event-5.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Bodleian Treasures: 24 Pairs of Shoes</a></h6>
                                    <time datetime="2008-02-14 20:00">16/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                    <p>If you're thinking about applying for an undergraduate degree at Enroll, please also see the information.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 wordpress">
                                <figure><a href="#"><img src="extra-images/latest-event-6.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">An exhibition displaying a large selection</a></h6>
                                    <time datetime="2008-02-14 20:00">15/04/2016 <span><i class="wmicon-clock"></i> 8:00am - 10:30am</span></time>
                                    <p>Online and part-time courses at the University, as well as weekly classes, are offered at the Department.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 php">
                                <figure><a href="#"><img src="extra-images/latest-event-7.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">The exhibition presents some of the best of the 12 million</a></h6>
                                    <time datetime="2008-02-14 20:00">14/04/2016 <span><i class="wmicon-clock"></i> 9:00am - 11:00am</span></time>
                                    <p>Leading researchers will present their latest projects and help us understand the unique and.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                            <li class="col-md-3 wordpress">
                                <figure><a href="#"><img src="extra-images/latest-event-8.jpg" alt=""> <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                <div class="wm-latest-event-text">
                                    <h6><a href="#" class="wm-color">Rare books are joined together with manuscripts</a></h6>
                                    <time datetime="2008-02-14 20:00">13/04/2016 <span><i class="wmicon-clock"></i> 9:30am - 11:15am</span></time>
                                    <p>We’ll explore how innovative research and multi-disciplinary can combine to support our global.</p>
                                    <a href="#" class="wm-banner-btn">check event</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wm-pagination">
                        <ul>
                            <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>...</li>
                            <li><a href="#">18</a></li>
                            <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
    
@endsection