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

  <div class="page-header-image" data-parallax="true" style="background-image: url({{ $category->image }}); transform: translate3d(0px, 0px, 0px);">
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
              <button class="btn btn-default btn-icon btn-neutral pull-right" rel="tooltip" title="" data-original-title="Сбросить фильтр">
                <i class="arrows-1_refresh-69 now-ui-icons"></i>
              </button>
              @foreach($attributes as $attribute)
              <div class="card card-refine card-plain">
               <div class="card-header" role="tab" id="heading-{{ $attribute->id }}">
                 <h6 class="mb-0">
                   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $attribute->id }}" aria-expanded="true" aria-controls="collapse-{{ $attribute->id }}">
                     {{ $attribute->title }}

                     <i class="now-ui-icons arrows-1_minimal-down"></i>
                   </a>
                 </h6>
               </div>
               <div id="collapse-{{ $attribute->id }}" class="collapse show" role="tabpanel" aria-labelledby="heading-{{ $attribute->id }}" style="">
                 <div class="card-body">
                  @foreach($product_attributes as $product_attribute)
                  @if($product_attribute->attribute_id == $attribute->id)
                  <div class="checkbox">
                   <input id="checkbox-{{ $product_attribute->attribute_id }}" type="checkbox">
                   <label for="checkbox-{{ $product_attribute->attribute_id }}">
                    {{ $product_attribute->value }} 
                  </label>
                  <span class="tag badge badge-default pull-right">{{ $product_attribute->attr_count }}</span>
                </div>
                @endif

                @endforeach

              </div>
            </div>
          </div>

         @endforeach

       </div>
     </div>
   </div>

   <div class="col-md-9">
    <div class="row">
      <span><a class="btn btn-link btn-danger" href="/">Главная</a> / <a class="btn btn-link btn-danger" href="{{ route('site.show-categories-page.get', ['category_id' => $grandparent_category->id]) }}">{{ $grandparent_category->title }}</a> / <a class="btn btn-link btn-danger" href="{{ route('site.show-subcategories-page.get', ['subcategory_id' => $category->parent]) }}">{{ $parent_category->title }}</a> / <a class="btn btn-link btn-info">{{ $category->title }}</a></span>
    </div>
    <div class="row">

      @foreach($products as $product)
      <div class="col-lg-4 col-md-6">
       <div class="card card-product card-plain">
         <div class="card-image">
           <a href="{{ route('site.show-product-page.get',[ 'product_id' => $product->id ]) }}">
             <img src="{{ $product->image_small }}" alt=""/>
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