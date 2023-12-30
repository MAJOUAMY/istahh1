@extends('layouts.app')


@section('content')
<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section wm-contact-full wm-contact-full-inner">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="wm-contact-tab">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact</a></li>
                        <li><a href="#profile" aria-controls="profile" data-toggle="tab">Informations Détails</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                <div class="col-md-8">
                                    <div class="wm-contact-form">
                                        <span>Communiquez avec nous aujourd'hui</span>
                                        <form>
                                            <ul>
                                                <li>
                                                    <i class="wmicon-black"></i>
                                                    <input type="text" value="Nom" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-symbol3"></i>
                                                    <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-technology4"></i>
                                                    <input type="text" value="Téléphone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-web2"></i>
                                                    <textarea placeholder="Message"></textarea>
                                                </li>
                                                <li> <input type="submit" value="envoiyer Message"> </li>
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
                                        <h5 class="wm-color">Addresse</h5>
                                        <p> H898+GJ6, Bd d'Afghanistan, Casablanca</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                        <h5 class="wm-color">Téléphone & Fax</h5>
                                        <p>05020223U32 , 872378123</p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                        <h5 class="wm-color">E-mail</h5>
                                        <p><a href="mailto:name@email.com">contact@istahh1.com</a> <a href="mailto:name@email.com">aaaa@bbb.com</a></p>
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
<!--// Main Content \\-->
    
@endsection