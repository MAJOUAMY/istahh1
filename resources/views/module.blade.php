@extends('layouts.app')


@section('content')

<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                
                <aside class="col-md-3">
                    <div class="widget wm-search-course">
                        <h3 class="wm-short-title wm-color">Trouve Ton module souhaité</h3>
                        <p>cherche ton module par nom   :</p>
                        <form>
                            <ul>
                                <li>
                                    <div class="wm-radio">
                                        
                                        <div class="wm-radio-partition">
                                            <input id="female" type="radio" name="gender" value="female">
                                            <label for="female">Par nom</label>
                                        </div>
                                    </div>
                                </li>
                                <li> <input type="text" value="Nom du module" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                <li>
                                    <div class="wm-apply-select">
                                        <select >
                                            <option>Categorie du module</option>
                                            <option>Dévelopement digital</option>
                                            <option>Infrastructure digitale</option>
                                            <option>Commerce</option>
                                        </select>
                                    </div>
                                </li>
                                <li> <input type="submit" value="chercher maintenant "> </li>
                            </ul>
                        </form>
                    </div>
                   
                </aside>
                
                <div class="col-md-9">
                   
                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            <li class="col-md-4">
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
                            <li class="col-md-4">
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
                            <li class="col-md-4">
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
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-5.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-4.jpg" alt="">
                                            <h6><a href="#">Julius M. Lepage</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Economics & Quality Management</a></h6>
                                        <div class="wm-courses-price"> <span>$50</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-6.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-5.jpg" alt="">
                                            <h6><a href="#">Kayla A. McCrea</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Philosophy, Politics and Economics (PPE)</a></h6>
                                        <div class="wm-courses-price"> <span>$99</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 222</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 76</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-7.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-6.jpg" alt="">
                                            <h6><a href="#">Allan L. Oakes</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Modern Languages and Linguistics</a></h6>
                                        <div class="wm-courses-price"> <span>$49</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 248</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 21</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-8.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-7.jpg" alt="">
                                            <h6><a href="#">Virginia R. Cruz</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">History (Ancient and Modern)</a></h6>
                                        <div class="wm-courses-price"> <span>$79</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 188</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-9.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-8.jpg" alt="">
                                            <h6><a href="#">Roslyn W. Beavers</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Classical Archaeology & Ancient History</a></h6>
                                        <div class="wm-courses-price"> <span>$89</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 176</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-10.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-9.jpg" alt="">
                                            <h6><a href="#">Loni C. Simmons</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Mathematics & Computer Science</a></h6>
                                        <div class="wm-courses-price"> <span>Free</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 587</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 45</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-11.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-2.jpg" alt="">
                                            <h6><a href="#">Jodie A. Mitchell</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Biochemistry (Molecular and Cellular)</a></h6>
                                        <div class="wm-courses-price"> <span>$49</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 188</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 39</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-12.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-3.jpg" alt="">
                                            <h6><a href="#">Garry V. Ewing</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Archaeology and Anthropology</a></h6>
                                        <div class="wm-courses-price"> <span>$89</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 188</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 39</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-13.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-5.jpg" alt="">
                                            <h6><a href="#">Jennifer M. Price</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">History and Modern Languages</a></h6>
                                        <div class="wm-courses-price"> <span>$35</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 248</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-14.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-6.jpg" alt="">
                                            <h6><a href="#">Nancy D. Dye</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Mathematics and Statistics</a></h6>
                                        <div class="wm-courses-price"> <span>$59</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 466</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-15.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-6.jpg" alt="">
                                            <h6><a href="#">Janet G. Drennan</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">European and Middle Eastern Languages</a></h6>
                                        <div class="wm-courses-price"> <span>$39</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 230</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="extra-images/papular-courses-16.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="extra-images/papular-courses-thumb-6.jpg" alt="">
                                            <h6><a href="#">Katrina J. Alday</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">Classics and Oriental Studies</a></h6>
                                        <div class="wm-courses-price"> <span>$65</span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 165</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                        </ul>
                                    </div>
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
<!--// Main Content \\-->
    
@endsection