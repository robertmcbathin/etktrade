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

              @foreach ($spec_categories as $spec_category)
              @if($spec_category->level == 1)
              <div class="card card-refine card-paddinged">
               <div class="card-header" role="tab" id="headingTwo">
                 <h6 class="mb-0">
                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $spec_category->id }}" aria-expanded="false" aria-controls="collapseTwo">
                     {{ $spec_category->title }}

                     <i class="now-ui-icons arrows-1_minimal-down"></i>
                   </a>
                 </h6>
               </div>

               <div id="collapse-{{ $spec_category->id }}" class="collapse show" role="tabpanel" aria-labelledby="heading-{{ $spec_category->id }}">
                 <div class="card-body">
                  @foreach ($categories as $subcategory)
                  @if($subcategory->level == 2) 
                  @if($subcategory->parent == $spec_category->id)
                  <p class="catalog-item">
                   <a class="catalog-item" href="{{ route('site.show-subcategories-page.get',['subcategory_id' => $subcategory->id]) }}">{{ $subcategory->title }}</a>
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
                  <p class="catalog-item">
                   <a class="catalog-item" href="{{ route('site.show-subcategories-page.get',['subcategory_id' => $subcategory->id]) }}">{{ $subcategory->title }}</a>
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
      <!--       <div class="section" id="carousel">
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
       -->
      <div class="row">

        @foreach($top_products as $top_product)
        <div class="col-lg-4 col-md-6">
         <div class="card card-product">
           <div class="card-image">
             <a href="{{ route('site.show-product-page.get',[ 'product_id' => $top_product->id ]) }}">
               <img src="{{ $top_product->image }}" alt=""/>
             </a>
           </div>
           <div class="card-body">
             <a href="{{ route('site.show-product-page.get',[ 'product_id' => $top_product->id ]) }}">
              <!--             <div class="static rating">
               <input type="radio" id="star5" name="rating" value="5" disabled><label for="star5" title="Отлично">5 stars</label>
             </div> -->
               <h4 class="card-title catalog-item-card">{{ $top_product->name }}</h4>

             </a>
             <div class="card-footer">
               <div class="price-container">
                <span class="price"><i class="fa fa-ruble"> {{ $top_product->price }}</i></span>
              </div>

              <button class="btn btn-primary pull-right"  rel="tooltip" title="Добавить в корзину" data-placement="right">
                <i class="fa fa-shopping-cart"> В КОРЗИНУ</i>
              </button>
              <hr>
                            <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral" data-original-title="Добавить в список желаемого">
               <i class="far fa-heart"></i>
             </button>
            </div>
          </div>
        </div> <!-- end card -->
      </div>
      @endforeach

   </div>
   <div class="row">
           <div class="col-md-3 ml-auto mr-auto">
       <button rel="tooltip" class="btn btn-primary">Все популярные товары</button>
     </div>
   </div>
 </div>
</div>
</div>
</div><!-- section -->


<div class="section">
 <div class="container">
   <h2 class="section-title">Спецпредложения</h2>
   <div class="row">
    @foreach($spec_products as $spec_product)
    <div class="col-md-4">

      <div class="card card-product">
        <div class="card-image">
          <img class="img rounded" src="{{ $spec_product->image_small }}"/>
        </div>

        <div class="card-body">
          <h4 class="card-title">
            <a class=" catalog-item-card" href="{{ route('site.show-product-page.get',[ 'product_id' => $spec_product->id ]) }}">{{ $spec_product->name }}</a>
          </h4>
          <div class="card-footer">
            <div class="price-container">
              <span class="price price-old"> <i class="fa fa-ruble"></i> {{ $spec_product->price_without_discount }}</span>
              <span class="price price-new"> <i class="fa fa-ruble"></i> {{ $spec_product->price }}</span>
            </div>
            <div class="stats stats-right">
              <button type="button" rel="tooltip" title="" class="btn btn-icon btn-neutral" data-original-title="Добавить в список желаемого">
               <i class="far fa-heart"></i>
             </button>
           </div>
         </div>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>
</div><!-- section -->

</div> <!-- end-main-raised -->
@endsection