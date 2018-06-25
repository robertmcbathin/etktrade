@extends('layouts.master')
@section('title')
Оформление заказа
@endsection
@section('description')
Оформление заказа
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


	<div class="page-header-image" data-parallax="true" style="background-image: url(&quot;/assets/img/bg1.jpg&quot;); background-repeat: repeat; transform: translate3d(0px, 0px, 0px);">
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
			<div class="col-md-12">
				<div class="card card-plain">

					<h6>ПОДГОТОВКА ЗАКАЗА №{{ $order->id }}</h6>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead class="">
									<tr><th class="text-center">
										#
									</th>
									<th>
										Артикул
									</th>
									<th>
										
									</th>
									<th class="text-center">
										Количество
									</th>
									<th class="text-right">
										Цена
									</th>
									<th class="text-right">
										
									</th>
								</tr></thead>
								<tbody>
									@foreach($order_items as $order_item)
									<tr>
										<td class="text-center">
											{{ $order_item->id }}
										</td>
										<td>
											{{ $order_item->product_article }}
										</td>
										<td>	
											{{ $order_item->name }}
										</td>
										<td class="text-center">
											{{ $order_item->product_count }}
										</td>
										<td class="text-right">
											<i class="fa fa-ruble"></i> {{ $order_item->price }}
										</td>
										<td class="text-right">
											<i class="fa fa-ruble"></i> {{ $order_item->amount }}
										</td>
									</tr>
									@endforeach
									<tr>
										<td colspan="4"></td>
										<td class="text-right">Итого по заказу</td>
										<td class="text-right"><i class="fa fa-ruble"></i> <span id="order-summary">{{ $order->summary }}</span></td>
									</tr>
									<tr id="delivery-row">
										<td colspan="4"></td>
										<td class="text-right">Самовывоз</td>
										<td class="text-right"><i class="fa fa-ruble"></i> 0 </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row pick-size">
			<div class="col-lg-6 col-md-8 col-sm-6">
				<label>Выберите способ оплаты</label>
				<select class="selectpicker" data-style="select-with-transition btn btn-block" data-size="7" tabindex="-98" name="payment_method">
					@foreach($payment_methods as $payment_method)
					<option value="{{ $payment_method->id }}">{{ $payment_method->text }}</option>
					@endforeach
				</select>

			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<label>Выберите способ получения</label>
				<select class="selectpicker" data-style="select-with-transition btn btn-block" data-size="7" tabindex="-98" name="delivery_method" id="delivery-method">
					@foreach($delivery_methods as $delivery_method)
					<option value="{{ $delivery_method->id }}">{{ $delivery_method->text }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-8 col-sm-6">
				<a href="{{ route('profile.show-profile-page.get') }}" rel="tooltip" class="btn btn-info" data-original-title="" title=""><i class="now-ui-icons arrows-1_minimal-left"></i> Обратно в корзину</a>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<a href="" rel="tooltip" class="btn btn-primary pull-right" data-original-title="" title="">Перейти к заказу <i class="now-ui-icons arrows-1_minimal-right"></i></a>
			</div>
		</div>
	</div>

</div>
@endsection
<script>
	var token = '{{ Session::token() }}';
	var selectDeliveryMethodUrl = '{{ route('ajax.select-delivery-method.post') }}';
</script>