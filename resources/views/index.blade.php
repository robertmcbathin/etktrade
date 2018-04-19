@extends('layouts.master')
@section('title')
ЕТК Трейд
@endsection
@section('description')
ЕТК Трейд - Единая торговая компания
@endsection
@section('keywords')

@endsection
@section('content')
                <div id="carouselExampleIndicators" class="carousel slide">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
</ol>
<div class="carousel-inner" role="listbox">
    <div class="carousel-item">
        <div class="page-header header-filter header-mini">
            <div class="page-header-image" style="background-image: url('/assets/img/bg40.jpg');"></div>
            <div class="content-center text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto2">
                        <h1 class="title">Finding the Perfect.</h1>
                        <h4 class="description text-white">The haute couture crowds make stylish statements between shows during couture season in Paris...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<div class="main">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Find what you need</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="collapse-panel">
                        <div class="card-body">
                            <div class="card card-refine card-plain">
                                <h4 class="card-title">
                                    Refine
                                    <button class="btn btn-default btn-icon btn-neutral pull-right" rel="tooltip" title="Reset Filter">
                                        <i class="arrows-1_refresh-69 now-ui-icons"></i>
                                    </button>
                                </h4>
                           <div class="card-header" role="tab" id="headingOne">
                             <h6 class="mb-0">
                               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Price Range

                                 <i class="now-ui-icons arrows-1_minimal-down"></i>
                               </a>
                           </h6>
                           </div>

                           <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                             <div class="card-body">
                                 <span id="price-left" class="price-left pull-left" data-currency="&euro;">100</span>
                                 <span id="price-right" class="price-right pull-right" data-currency="&euro;">850</span>
                                 <div class="clearfix"></div>
                                 <div id="sliderRefine" class="slider slider-refine"></div>
                             </div>
                           </div>
                         </div>
                         <div class="card card-refine card-plain">
                           <div class="card-header" role="tab" id="headingTwo">
                             <h6 class="mb-0">
                                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     Clothing

                                     <i class="now-ui-icons arrows-1_minimal-down"></i>
                                   </a>
                               </h6>
                           </div>
                           <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <div class="card-body">
                                     <div class="checkbox">
                                       <input id="checkbox1" type="checkbox" checked="">
                                      <label for="checkbox1">
                                          Blazers
                                      </label>
                                    </div>

                                    <div class="checkbox">
                                  <input id="checkbox2" type="checkbox">
                                  <label for="checkbox2">
                                     Casual Shirts
                                  </label>
                                </div>

                                <div class="checkbox">
                                  <input id="checkbox3" type="checkbox">
                                  <label for="checkbox3">
                                      Formal Shirts
                                  </label>
                                </div>

                                <div class="checkbox">
                                  <input id="checkbox4" type="checkbox">
                                  <label for="checkbox4">
                                      Jeans
                                  </label>
                                </div>

                                <div class="checkbox">
                                  <input id="checkbox5" type="checkbox">
                                  <label for="checkbox5">
                                      Polos
                                  </label>
                                </div>

                                <div class="checkbox">
                                 <input id="checkbox6" type="checkbox">
                                 <label for="checkbox6">
                                     Pijamas
                                 </label>
                               </div>

                               <div class="checkbox">
                                 <input id="checkbox7" type="checkbox">
                                 <label for="checkbox7">
                                     Shorts
                                 </label>
                               </div>

                               <div class="checkbox">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Trousers
                                </label>
                              </div>
                             </div>
                           </div>
                         </div>
                         <div class="card card-refine card-plain">
                           <div class="card-header" role="tab" id="headingThree">
                             <h6 class="mb-0">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Designer

                                 <i class="now-ui-icons arrows-1_minimal-down"></i>
                               </a>
                           </h6>
                           </div>
                           <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                             <div class="card-body">
                                 <div class="checkbox">
                                  <input id="checkbox9" type="checkbox">
                                  <label for="checkbox9">
                                      All
                                  </label>
                                </div>
                                <div class="checkbox">
                                 <input id="checkbox10" type="checkbox">
                                 <label for="checkbox10">
                                     Polo Ralph Lauren
                                 </label>
                               </div>

                               <div class="checkbox">
                                <input id="checkbox11" type="checkbox">
                                <label for="checkbox11">
                                    Wooyoungmi
                                </label>
                              </div>

                              <div class="checkbox">
                                <input id="checkbox12" type="checkbox">
                                <label for="checkbox12">
                                    Alexander McQueen
                                </label>
                              </div>
                              <div class="checkbox">
                               <input id="checkbox13" type="checkbox">
                               <label for="checkbox13">
                                   Tom Ford
                               </label>
                             </div>

                             <div class="checkbox">
                               <input id="checkbox14" type="checkbox">
                               <label for="checkbox14">
                                   AMI
                               </label>
                             </div>

                             <div class="checkbox">
                              <input id="checkbox15" type="checkbox">
                              <label for="checkbox15">
                                  Berena
                              </label>
                            </div>

                            <div class="checkbox">
                              <input id="checkbox16" type="checkbox">
                              <label for="checkbox16">
                                  Thom Sweeney
                              </label>
                            </div>

                            <div class="checkbox">
                              <input id="checkbox17" type="checkbox">
                              <label for="checkbox17">
                                  Burberry Prorsum
                              </label>
                            </div>

                            <div class="checkbox">
                              <input id="checkbox18" type="checkbox">
                              <label for="checkbox18">
                                  Calvin Klein
                              </label>
                            </div>

                            <div class="checkbox">
                              <input id="checkbox19" type="checkbox">
                              <label for="checkbox19">
                                  Kingsman
                              </label>
                            </div>

                            <div class="checkbox">
                             <input id="checkbox20" type="checkbox">
                             <label for="checkbox20">
                                 Club Monaco
                             </label>
                           </div>

                           <div class="checkbox">
                            <input id="checkbox21" type="checkbox">
                            <label for="checkbox21">
                                Dolce & Gabbana
                            </label>
                          </div>

                          <div class="checkbox">
                            <input id="checkbox22" type="checkbox">
                            <label for="checkbox22">
                                Gucci
                            </label>
                          </div>

                          <div class="checkbox">
                           <input id="checkbox23" type="checkbox">
                           <label for="checkbox23">
                               Biglioli
                           </label>
                         </div>

                         <div class="checkbox">
                          <input id="checkbox24" type="checkbox">
                          <label for="checkbox24">
                             Lanvin
                          </label>
                        </div>

                        <div class="checkbox">
                         <input id="checkbox25" type="checkbox">
                         <label for="checkbox25">
                             Loro Piana
                         </label>
                       </div>

                       <div class="checkbox">
                        <input id="checkbox26" type="checkbox">
                        <label for="checkbox26">
                            Massimo Alba
                        </label>
                      </div>
                             </div>
                           </div>
                         </div>
                         <div class="card card-refine card-plain">
                           <div class="card-header" role="tab" id="headingfour">
                             <h6 class="mb-0">
                               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 Colour

                                 <i class="now-ui-icons arrows-1_minimal-down"></i>
                               </a>
                           </h6>
                           </div>
                           <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                             <div class="card-body">
                                 <div class="checkbox">
                                  <input id="checkbox27" type="checkbox">
                                  <label for="checkbox27">
                                      All
                                  </label>
                                </div>
                                <div class="checkbox">
                                 <input id="checkbox28" type="checkbox">
                                 <label for="checkbox28">
                                     Black
                                 </label>
                               </div>

                               <div class="checkbox">
                                <input id="checkbox29" type="checkbox">
                                <label for="checkbox29">
                                    Blue
                                </label>
                              </div>

                              <div class="checkbox">
                               <input id="checkbox30" type="checkbox">
                               <label for="checkbox30">
                                   Brown
                               </label>
                             </div>

                             <div class="checkbox">
                               <input id="checkbox31" type="checkbox">
                               <label for="checkbox31">
                                   Gray
                               </label>
                             </div>

                             <div class="checkbox">
                               <input id="checkbox32" type="checkbox">
                               <label for="checkbox32">
                                   Green
                               </label>
                             </div>

                             <div class="checkbox">
                                <input id="checkbox33" type="checkbox">
                                <label for="checkbox33">
                                    Neutrals
                                </label>
                              </div>

                              <div class="checkbox">
                                 <input id="checkbox34" type="checkbox">
                                 <label for="checkbox34">
                                     Purple
                                 </label>
                               </div>
                             </div>
                           </div>
                         </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                         <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="../assets/img/polo.jpg" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">Polo Ralph Lauren</h4>
                                     </a>
                                     <p class="card-description">
                                        Impeccably tailored in Italy from lightweight navy wool.
                                     </p>
                                     <div class="card-footer">
                                         <div class="price-container">
                                            <span class="price"> &euro; 300</span>
                                         </div>

                                         <button class="btn btn-danger btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                             <i class="now-ui-icons ui-2_favourite-28"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>

                          <div class="col-lg-4 col-md-6">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="../assets/img/tom-ford.jpg" alt="..."/>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Tom Ford</h4>
                                    </a>
                                    <p class="card-description">
                                       Immaculate tailoring is TOM FORD's forte.
                                   </p>
                                    <div class="card-footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 879</span>
                                        </div>

                                        <button class="btn btn-neutral btn-icon btn-round pull-right"  rel="tooltip" title="Add to wishlist" data-placement="left">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                         </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="../assets/img/wooyoungmi.jpg" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">Wooyoungmi</h4>
                                     </a>
                                     <p class="card-description">
                                         Dark-grey slub wool, pintucked notch lapels.
                                     </p>
                                     <div class="card-footer">
                                         <div class="price-container">
                                            <span class="price">&euro; 555</span>
                                         </div>

                                         <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                             <i class="now-ui-icons ui-2_favourite-28"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>


                           <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="../assets/img/sweeney.jpg" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">Thom Sweeney</h4>
                                     </a>
                                     <p class="card-description">
                                        It's made from lightweight grey wool woven.
                                   </p>
                                     <div class="card-footer">
                                         <div class="price-container">
                                            <span class="price"> &euro; 680</span>
                                         </div>

                                         <button class="btn btn-neutral btn-icon btn-round pull-right"  rel="tooltip" title="Add to wishlist" data-placement="left">
                                             <i class="now-ui-icons ui-2_favourite-28"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>

                          <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="../assets/img/kingsman.jpg" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">Kingsman</h4>
                                     </a>
                                     <p class="card-description">
                                        Crafted from khaki cotton and fully canvassed.
                                     </p>
                                     <div class="card-footer">
                                         <div class="price-container">
                                             <span class="price"> &euro; 725</span>
                                         </div>

                                         <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
                                             <i class="now-ui-icons ui-2_favourite-28"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>
                          <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="../assets/img/boglioli.jpg" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">Boglioli</h4>
                                     </a>
                                     <p class="card-description">
                                        Masterfully crafted in Northern Italy.
                                     </p>
                                     <div class="card-footer">
                                         <div class="price-container">
                                            <span class="price">&euro; 699</span>
                                         </div>

                                         <button class="btn btn-neutral btn-icon btn-round pull-right" rel="tooltip" title="Add to wishlist" data-placement="left">
                                             <i class="now-ui-icons ui-2_favourite-28"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>
                          <div class="col-md-3 ml-auto mr-auto">
                               <button rel="tooltip" class="btn btn-primary btn-round">Load more...</button>
                          </div>
                    </div>
                </div>
            </div>
</div>
    </div><!-- section -->

    <div class="container">
        <h2 class="section-title">News in fashion</h2>
    </div>
    <div class="projects-4" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="card card-fashion card-background" style="background-image: url('../assets/img/bg35.jpg')">
                        <div class="card-body">
                            <div class="card-title text-left">
                                <h2>
                                    <a href="#pablo">
                                        The New York Times Todd Snyder and Raf Simons Party During Men’s Fashion Week
                                    </a>
                                </h2>
                            </div>

                            <div class="card-footer text-left">
                                <div class="stats">
                                    <span>
                                        <i class="now-ui-icons users_circle-08"></i>Emy Grace
                                    </span>

                                    <span>
                                        <i class="now-ui-icons tech_watch-time"></i> June 6, 2017
                                    </span>
                                </div>

                                <div class="stats-link pull-right">
                                    <a href="#pablo" class="footer-link">Fashion Week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 px-0">
                    <div class="card-container">
                        <div class="card card-fashion">
                            <div class="card-title">
                                <a href="#pablo">
                                    </a><h4><a href="#pablo">
                                        </a><a href="#pablo">
                                            Valentina Garavani Holds a Summer Lunch in Honor of Sofia Coppola...
                                        </a>
                                    </h4>

                            </div>
                            <div class="card-body">
                                <div class="card-footer text-left">
                                    <div class="stats">
                                        <span>
                                            <i class="now-ui-icons users_circle-08"></i>Jerry McGregor
                                        </span>

                                        <span>
                                            <i class="now-ui-icons tech_watch-time"></i> June 10, 2017
                                        </span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card card-fashion card-background" style="background-image: url('../assets/img/bg40.jpg')">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
           <div class="container">
               <h2 class="section-title">Latest Offers</h2>
               <div class="row">
                    <div class="col-md-4">

                        <div class="card card-product card-plain">
                            <div class="card-image">
                                <img class="img rounded" src="../assets/img/saint-laurent1.jpg"/>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#pablo">Saint Laurent</a>
                                </h4>
                                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
                                <div class="card-footer">
                                    <div class="price-container">
                                        <span class="price price-old"> &euro;1,430</span>
                                        <span class="price price-new"> &euro;743</span>
                                    </div>
                                    <div class="stats stats-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral" data-original-title="Saved to Wishlist">
                                           <i class="now-ui-icons ui-2_favourite-28"></i>
                                       </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="card card-product card-plain">
                            <div class="card-image">
                                <img class="img rounded" src="../assets/img/saint-laurent.jpg"/>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">
                                    <h4 class="card-title">Saint Laurent</h4>
                                </h4>
                                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
                                <div class="card-footer">
                                    <div class="price-container">
                                        <span class="price price-old"> &euro;1,430</span>
                                        <span class="price price-new">&euro;743</span>
                                    </div>
                                    <div class="stats stats-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral" data-original-title="Saved to Wishlist">
                                            <i class="now-ui-icons ui-2_favourite-28"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="card card-product card-plain">
                            <div class="card-image">
                                <img class="img rounded" src="../assets/img/gucci.jpg"/>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">
                                    <h4 class="card-title">Gucci</h4>
                                </h4>
                                <p class="card-description">The smooth woven-wool is water resistant to ensure you stay pristine after a long-haul flight. Cut in a trim yet comfortable regular fit.</p>
                                <div class="card-footer">
                                    <div class="price-container">
                                        <span class="price price-old"> &euro;2,430</span>
                                        <span class="price price-new">&euro;890</span>
                                    </div>
                                    <div class="stats stats-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral btn-default" data-original-title="Add to Wishlist">
                                           <i class="now-ui-icons ui-2_favourite-28"></i>
                                       </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

               </div>
           </div>
    </div><!-- section -->


    <div class="subscribe-line subscribe-line-image" style="background-image: url('../assets/img/bg43.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="text-center">
                        <h4 class="title">Subscribe to our Newsletter</h4>
                        <p class="description">
                            Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                        </p>
                    </div>

                    <div class="card card-raised card-form-horizontal">
                        <div class="card-body">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email Here...">
                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div> <!-- end-main-raised -->
@endsection