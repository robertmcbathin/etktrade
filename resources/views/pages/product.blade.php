@extends('layouts.master')
@section('title')
{{ $product->name }} на SpaceTrade.in
@endsection
@section('description')
{{ $product->name }} на SpaceTrade.in
@endsection
@section('keywords')

@endsection
@section('body-class')
product-page
@endsection
@section('content')
<div class="page-header page-header-mini">

    <div class="page-header-image" data-parallax="true" style="background-image: url({{ $product->image }}); transform: translate3d(0px, 0px, 0px); -webkit-filter: blur(15px); filter: blur(15px); -moz-filter: blur(15px); -o-filter: blur(15px);">
    </div>
    <div class="content-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
            </div>
        </div>
    </div>

</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
                        @isset($gallery_items)
                        @if(count($gallery_items) > 0)
                        @for($i = 0; $i < count($gallery_items); $i++)
                        <li data-target="#productCarousel" data-slide-to="{{ $i }}" class=""></li>
                        @endfor
                        @endif
                        @endisset
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-raised" src="{{ $product->image }}" alt="{{ $product->name }}">
                        </div>

                        @isset($gallery_items)
                        @if(count($gallery_items) > 0)
                        @foreach($gallery_items as $gallery_item)

                        <div class="carousel-item">
                            <img class="d-block img-raised" src="http://etkplus.ru/{{ $gallery_item->image_path }}" alt="">
                        </div>

                        @endforeach
                        @endif
                        @endisset

                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </button>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </button>
                    </a>
                </div>

                @isset($product->quote)
                <p class="blockquote blockquote-primary">
                    {{ $product->quote }}
                    <br><br>
                    
                </p>
                @endisset

                <br>
                @isset($gallery_items)
                @if(count($gallery_items) > 0)
                <div>
                    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        @if (count($gallery_items) > 0)
                        @foreach ($gallery_items as $gallery_item)
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                           <a href="http://etkplus.ru/{{ $gallery_item->image_path }}" itemprop="contentUrl" data-size="{{ $gallery_item->image_width }}x{{ $gallery_item->image_height }}">
                             <img src="http://etkplus.ru/{{ $gallery_item->image_path }}" itemprop="thumbnail" alt="" class="horizontal-image img-rounded img-responsive">
                         </a>
                         <figcaption itemprop="caption description">{{ $gallery_item->image_caption }}</figcaption>
                     </figure>
                     @endforeach
                     @endif
                 </div>

                 <!-- Root element of PhotoSwipe. Must have class pswp. -->
                 <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
        It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

          <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
          <!-- don't modify these 3 pswp__item elements, data is added later on. -->
          <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

              <!--  Controls are self-explanatory. Order can be changed. -->

              <div class="pswp__counter"></div>

              <button class="pswp__button pswp__button--close" title="Закрыть (Esc)"></button>

              <button class="pswp__button pswp__button--share" title="Скачать"></button>

              <button class="pswp__button pswp__button--fs" title="Полный экран"></button>

              <button class="pswp__button pswp__button--zoom" title="Увеличить / уменьшить"></button>

              <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
              <!-- element will get class pswp__preloader--active when preloader is running -->
              <div class="pswp__preloader">
                <div class="pswp__preloader__icn">
                  <div class="pswp__preloader__cut">
                    <div class="pswp__preloader__donut"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
      <div class="pswp__share-tooltip"></div> 
  </div>

  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
  </button>

  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
  </button>

  <div class="pswp__caption">
      <div class="pswp__caption__center"></div>
  </div>

</div>

</div>

</div> 
</div>

@endif
@endisset




</div>
<div class="col-md-6 ml-auto mr-auto">

    @if($category->level == 3)
    <div class="row">
      <span><a class="btn btn-link btn-danger" href="{{ route('site.show-stock-page.get', ['category_id' => $product->category_id]) }}">{{ $product->category }}</a> / <a class="btn btn-link btn-info">{{ $product->name }}</a></span>
  </div>
  @elseif($category->level == 2)
  <div class="row">
      <span><a class="btn btn-link btn-danger" href="{{ route('site.show-subcategories-page.get', ['category_id' => $product->category_id]) }}">{{ $product->category }}</a> / <a class="btn btn-link btn-info">{{ $product->name }}</a></span>
  </div>
  @endif


  <h2 class="title"> {{ $product->name }} </h2>
  @isset($product->diff_shop_article)
  <h5 class="category">{{ $product->diff_shop_article }}</h5>
  @endisset
  <h5 class="category">{{ $product->category }}</h5>
  @if(($product->price_without_discount != null) || ($product->price_without_discount != 0))
  <h2 class="main-price">
    <div class="price-container product-discount">
      <span class="price price-old"> <i class="fa fa-ruble"></i> {{ $product->price_without_discount }}</span>
      <span class="price price-new"> <i class="fa fa-ruble"></i> {{ $product->price }}</span>
  </div>
</h2>
@else
<h2 class="main-price"><i class="fa fa-ruble"></i> {{ $product->price }}</h2>
@endif

<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingOne">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Описание
            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
        <p>{{ $product->description }}</p>
    </div>
</div>
</div>


<div class="card card-plain">
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Характеристики

            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    @isset($attributes)
                    @foreach($attributes as $attribute)
                    <tr>
                        <td>
                            {{ $attribute->title }}
                        </td>
                        <td class="text-right">
                            {{ $attribute->value }} 
                            @isset($attribute->unit)
                            {{ $attribute->unit }}
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

@isset($product->delivery_info)
<div class="card card-plain">
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Доставка и получение

            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>
    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-body">
        {{ $product->delivery_info }}
    </div>
</div>
</div>
@endisset
</div>

<div class="row justify-content-end">
    <button class="btn btn-primary mr-3 add-to-cart"  value="{{ $product->id }}" >Добавить в корзину &nbsp;<i class="now-ui-icons shopping_cart-simple"></i></button>
</div>
</div>
</div>



</div>
</div>

@endsection
<script>
  var token = '{{ Session::token() }}';
  var addToCartUrl = '{{ route('ajax.add-to-cart.post') }}';
</script>