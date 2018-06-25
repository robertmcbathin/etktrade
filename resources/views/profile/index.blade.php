@extends('layouts.master')
@section('title')
Личный кабинет
@endsection
@section('description')
Личный кабинет
@endsection
@section('keywords')

@endsection
@section('body-class')
profile-page
@endsection
@section('transparency')
navbar-transparent
@endsection
@section('content')
<div class="page-header page-header-xs" filter-color="primary">


	<div class="page-header-image" data-parallax="true" style="background-image: url(&quot;../assets/img/bg1.jpg&quot;); background-repeat: repeat; transform: translate3d(0px, 0px, 0px);">
	</div>




	<div class="content-center">
	<!-- <div class="photo-container">
			<img src="https://etk21.ru{{ Auth::user()->profile_image }}" alt="">
		</div>

		<h3 class="title">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>
		<p class="category"></p>

		<div class="content">
			<div class="social-description">
				<h2>26</h2>
				<p>Заказы</p>
			</div>
			<div class="social-description">
				<h2>0</h2>
				<p>Отзывы</p>
			</div>
		</div> -->	
	</div>


</div>

<div class="section">
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<div class="card card-testimonial">
                    <div class="card-avatar">
                        <a href="#">
                            <img class="img img-raised" src="https://etk21.ru{{ Auth::user()->profile_image }}">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-description">
                            <h4 class="title">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h4>
                        </p>
                    </div>
                    <div class="card-footer">
			<div class="social-description">
				<h2>26</h2>
				<p>Заказы</p>
			</div>
			<div class="social-description">
				<h2>0</h2>
				<p>Отзывы</p>
			</div>
                    </div>
                </div>
			</div>
			<div class="col-md-9">
				<div class="nav-align-center">
					<ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#cart" role="tablist">
								<i class="now-ui-icons shopping_cart-simple"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#orders" role="tablist">
								<i class="now-ui-icons shopping_box"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tablist">
								<i class="now-ui-icons ui-2_chat-round"></i>
							</a>
						</li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content gallery">

					<div class="tab-pane active" id="cart" role="tabpanel">
						<div class="row">
							<div class="card card-plain">

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-shopping">
											<thead class="">
												<tr><th class="text-center">
												</th>
												<th>
												</th>
												<th class="text-right">
													Цена
												</th>
												<th class="text-right">
													Количество
												</th>
												<th class="text-right">
													Сумма
												</th>
											</tr></thead>
											<tbody>
												@foreach($cart_items as $cart_item)
												<tr>
													<td>
														<div class="img-container">
															<img src="{{ $cart_item->image }}" alt="" width="50px">
														</div>
													</td>
													<td class="td-name">
														<a href="{{ route('site.show-product-page.get',['product_id' => $cart_item->product_id]) }}" target="_blank">{{ $cart_item->name }}</a>
													</td>
													<td class="td-number">
														<i class="fa fa-ruble"></i> {{ $cart_item->price }}
													</td>
													<td class="td-number">
														<span id="cart-item-count-{{ $cart_item->item_id }}">{{ $cart_item->product_count }}</span>
														<div class="btn-group">
															<button class="btn btn-info btn-sm decrease-item-count" data-action="0" value="{{ $cart_item->item_id }}"> <i class="now-ui-icons ui-1_simple-delete"></i> </button>
															<button class="btn btn-info btn-sm increase-item-count" data-action="1" value="{{ $cart_item->item_id }}"> <i class="now-ui-icons ui-1_simple-add"></i> </button>
														</div>
													</td>
													<td class="td-number">
														<i class="fa fa-ruble"></i> <span id="cart-item-amount-{{ $cart_item->item_id }}">{{ $cart_item->amount }}</span>
													</td>
													<td class="td-actions">
														<form action="{{ route('profile.delete-cart-item.post') }}" method="POST">
															{{ csrf_field() }}
															<input type="hidden" name="cart_item" value="{{ $cart_item->item_id }}">
													    	<button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-neutral" data-original-title="Удалить">
													    		<i class="now-ui-icons ui-1_simple-remove"></i>
													    	</button>
														</form>
													</td>
												</tr>

												@endforeach
												<tr>
													<td class="td-total">
														Итого
													</td>
													<td class="td-price">
														<i class="fa fa-ruble"></i> <span id="cart-total">{{ $cart_total }}</span>
													</td>
													<td colspan="3" class="text-right">
													    	<a href="{{ route('profile.create-order.get') }}" rel="tooltip" class="btn btn-primary" data-original-title="" title="">Перейти к заказу <i class="now-ui-icons arrows-1_minimal-right"></i>
															
														</a>															
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="tab-pane" id="orders" role="tabpanel">
						<div class="row">

							<div class="col-md-5 ml-auto mr-auto">
								<div class="card card-background card-background-product card-raised" style="background-image: url('../assets/img/project8.jpg')">
									<div class="card-body">
										<h2 class="card-title">Social Analytics</h2>
										<p class="card-description">
											Insight to help you create, connect, and convert. Understand Your Audience's Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
										</p>
										<label class="badge badge-neutral">Analytics</label>
									</div>
								</div>
							</div>

							<div class="col-md-5">
								<div class="info info-horizontal">
									<div class="icon icon-danger">
										<i class="now-ui-icons ui-2_chat-round"></i>
									</div>
									<div class="description">
										<h5 class="info-title">Listen to Social Conversations</h5>
										<p class="description">
											Gain access to the demographics, psychographics, and location of unique people who talk about your brand.
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-danger">
										<i class="now-ui-icons design-2_ruler-pencil"></i>
									</div>
									<div class="description">
										<h5 class="info-title">Social Conversions</h5>
										<p class="description">
											Track actions taken on your website that originated from social, and understand the impact on your bottom line.
										</p>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="tab-pane" id="reviews" role="tabpanel">
						<div class="row">

							<div class="col-md-5 ml-auto mr-auto">
								<div class="card card-background card-background-product card-raised" style="background-image: url('../assets/img/bg25.jpg')">
									<div class="card-body">
										<h2 class="card-title">Interior Redesign</h2>
										<p class="card-description">
											Insight to help you create, connect, and convert. Understand Your Audience's Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
										</p>
										<label class="badge badge-neutral">Interior</label>
									</div>
								</div>

							</div>

							<div class="col-md-5">
								<div class="info info-horizontal">
									<div class="icon icon-info">
										<i class="now-ui-icons design_palette"></i>
									</div>
									<div class="description">
										<h5 class="info-title">Colors adjustments</h5>
										<p class="description">
											Gain access to the demographics, psychographics, and location of unique people who talk about your brand.
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-info">
										<i class="now-ui-icons design_scissors"></i>
									</div>
									<div class="description">
										<h5 class="info-title">Performance Clothing</h5>
										<p class="description">
											Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights from easy-to-use reports.
										</p>
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
<script>
  var token = '{{ Session::token() }}';
  var decreaseItemCountUrl = '{{ route('ajax.decrease-item-count.post') }}';
  var increaseItemCountUrl = '{{ route('ajax.increase-item-count.post') }}';
</script>