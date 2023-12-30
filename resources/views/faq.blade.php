@extends('layouts.app')

@section('content')
<div class="wm-main-content ">

 
    <div class="wm-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-faq-page">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="wm-faq-sec">
                                    <div class="wm-faq">
                                        <h2>FAQ’s</h2>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne">
                                                        When are Mid-Year Reports due?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        How do I track the status of my application?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree"> 
                                                    <h4 class="panel-title">
                                                       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                       Does Enroll work with third-party agents?
                                                       </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                       Are Halal dining options available for students?
                                                       </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        Please have your school submit the Mid-Year Report as soon as first quarter or first trimester grades are available if you are an Early Decision candidate; for Regular Decision candidates.
                                                    </div>
                                                </div>    
                                            </div>
                                           
                                            
                                            
                                        </div>
                                    </div>
                                    </div>
                                    
                                    
                                    <div class="wm-faq-form">
                                        <h2>Pas encore de réponse?</h2>
                                        <form>
                                            <ul>
                                                <li>
                                                    <input type="text" onfocus="if(this.value =='Your Name') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Name'; }" value="Your Name">					
                                                </li>
                                                <li>
                                                    <input type="text" onfocus="if(this.value =='Your E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your E-mail'; }" value="Your E-mail">					
                                                </li>
                                                <li>
                                                    <div class="select-icon">
                                                        <select>
                                                                 <option value="Your Purpose">Your Purpose</option>
                                                                 <option value="Option-1">Option-1</option>
                                                                 <option value="Option-2">Option-2</option>
                                                                 <option value="Option-3">Option-3</option>							
                                                        </select>
                                                    </div>					
                                                </li>
                                                <li>
                                                    <input type="text" onfocus="if(this.value =='Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Subject'; }" value="Subject">					
                                                </li>
                                                <li class="full-input">
                                                    <textarea placeholder="Your Comment"></textarea>
                                                </li>
                                                <li>
                                                    <input type="submit" value="ask question">
                                                </li>								
                                            </ul> 
                                        </form>		
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
    
@endsection