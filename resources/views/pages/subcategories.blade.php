@extends('layouts.master')
@section('title')
ЕТК Трейд - {{ $meta->title }}
@endsection
@section('description')
ЕТК Трейд - {{ $meta->title }}
@endsection
@section('keywords')

@endsection
@section('content')
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
  <div class="page-header page-header-xs">

    <div class="page-header-image" data-parallax="true" style="background-image: url('/assets/img/pp-cov.jpg'); transform: translate3d(0px, 0px, 0px);">
    </div>
    <div class="content-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title">{{ $category->title }}</h1>
                    </div>
                </div>
            </div>
        
</div>
<div class="main">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="collapse-panel">
            <div class="card-body">

              <div class="card card-refine card-plain">
               <div class="card-header" role="tab" id="headingTwo">
                 <h6 class="mb-0">
                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $category->id }}" aria-expanded="false" aria-controls="collapseTwo">
                     {{ $category->title }}

                     <i class="now-ui-icons arrows-1_minimal-down"></i>
                   </a>
                 </h6>
               </div>

               <div id="collapse-{{ $category->id }}" class="collapse show" role="tabpanel" aria-labelledby="heading-{{ $category->id }}">
                 <div class="card-body">
                  @foreach ($subcategories as $subcategory)
                  @if($subcategory->level == 3) 
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

         </div>
       </div>
     </div>

     <div class="col-md-9">
      <div class="row">
        <span><a class="btn btn-link btn-info">{{ $parent_category->title }}</a> / <a class="btn btn-link btn-info">{{ $category->title }}</a></span>
      </div>
      <div class="row">

        @foreach($products as $product)
        <div class="col-lg-4 col-md-6">
         <div class="card card-product">
           <div class="card-image">
             <a href="{{ route('site.show-product-page.get',[ 'product_id' => $product->id ]) }}">
               <img src="{{ $product->image_small }}" alt="..."/>
             </a>
           </div>
           <div class="card-body">
             <a href="{{ route('site.show-product-page.get',[ 'product_id' => $product->id ]) }}">
               <h4 class="card-title">{{ $product->name }}</h4>
             </a>
             <div class="card-footer">
               <div class="price-container">
                <span class="price"><i class="fa fa-ruble"> {{ $product->price_cost }}</i></span>
              </div>

              <button class="btn btn-primary btn-icon pull-right"  rel="tooltip" title="Добавить в корзину" data-placement="left">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div> <!-- end card -->
      </div>
      @endforeach

   </div>
          <div class="row">
            <div class="text-center">
                <?php echo $products->links(); ?>
            </div>
          </div>
 </div>
</div>
</div>
</div><!-- section -->




</div> <!-- end-main-raised -->
@endsection