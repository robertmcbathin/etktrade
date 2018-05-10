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
  <div class="section section-search">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 ml-auto">
                        <div class="input-group">
                <input type="search" class="form-control search-control" placeholder="Поиск среди товаров">
              </div>
        </div>

      </div>
    </div>
  </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="collapse-panel">
                        <div class="card-body">

                          @foreach ($categories as $category)
                          @if($category->level == 1)
                          <div class="card card-refine card-plain">
                           <div class="card-header" role="tab" id="headingTwo">
                             <h6 class="mb-0">
                                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $category->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                     {{ $category->title }}

                                     <i class="now-ui-icons arrows-1_minimal-down"></i>
                                   </a>
                               </h6>
                           </div>

                           <div id="collapse-{{ $category->id }}" class="collapse" role="tabpanel" aria-labelledby="heading-{{ $category->id }}">
                             <div class="card-body">
                              @foreach ($categories as $subcategory)
                              @if($subcategory->level == 2) 
                                @if($subcategory->parent == $category->id)
                                <p>
                                     <a class="catalog-item">{{ $subcategory->title }}</a>
                                 </p>
                                 @endif
                               @endif
                              @endforeach
                             </div>
                           </div>
                         </div>
                         @endif
                      @endforeach

                </div>
              </div>
            </div>

                <div class="col-md-9">
                    <div class="section" id="carousel">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
              </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item">
                      <img class="d-block" src="assets/img/bg1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nature, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <img class="d-block" src="assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Somewhere Beyond, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item active">
                      <img class="d-block" src="assets/img/bg4.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Yellowstone National Park, United States</h5>
                    </div>
                  </div>
              </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
                    <div class="row">

                      @foreach($top_products as $top_product)
                          <div class="col-lg-4 col-md-6">
                             <div class="card card-product card-plain">
                                 <div class="card-image">
                                     <a href="#">
                                         <img src="{{ $top_product->image_small }}" alt="..."/>
                                     </a>
                                 </div>
                                 <div class="card-body">
                                     <a href="#">
                                         <h4 class="card-title">{{ $top_product->name }}</h4>
                                     </a>
                                     <div class="card-footer">
                                         <div class="price-container">
                                            <span class="price"><i class="fa fa-ruble"> {{ $top_product->price_cost }}</i></span>
                                         </div>

                                        <button class="btn btn-primary btn-icon pull-right"  rel="tooltip" title="Добавить в корзину" data-placement="left">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                     </div>
                                 </div>
                             </div> <!-- end card -->
                          </div>
                      @endforeach

                          <div class="col-md-3 ml-auto mr-auto">
                               <button rel="tooltip" class="btn btn-primary">Все популярные товары</button>
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