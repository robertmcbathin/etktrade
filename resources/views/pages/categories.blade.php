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

     <div class="col-md-12">
      <div class="row">
        <span><a class="btn btn-link btn-danger" href="/">Главная</a> / <a class="btn btn-link btn-info">{{ $category->title }}</a></span>
      </div>
      <div class="row">
    @foreach($subcategories as $subcategory)
    <div class="col-md-4 col-sm-6">
      <div class="card card-blog">
                <div class="card-image">
                  <a href="{{ route('site.show-subcategories-page.get', ['subcategory_id' => $subcategory->id]) }}">
                    <img class="img rounded" src="{{ $subcategory->image }}">
                  </a>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">
                    {{ $subcategory->title }}
                  </h5>
                  <div class="card-footer">
                    <a href="{{ route('site.show-subcategories-page.get', ['subcategory_id' => $subcategory->id]) }}" class="btn btn-primary">Перейти</a>
                  </div>
                </div>
              </div>
    </div>
    @endforeach

   </div>
 </div>
</div>
</div>
</div><!-- section -->




</div> <!-- end-main-raised -->
@endsection