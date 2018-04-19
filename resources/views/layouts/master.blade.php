<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> Ecommerce - Now UI Kit Pro by Creative Tim | Premium Bootstrap 4 UI Kit </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/css/now-ui-kit.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="/assets/css/demo.css" rel="stylesheet" />

	<!-- Canonical SEO -->
	<link rel="canonical" href="https://www.creative-tim.com/product/now-ui-kit-pro" />
	<!--  Social tags      -->
	<meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit pro, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
	<meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit.">
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Now UI Kit Pro by Creative Tim">
	<meta itemprop="description" content="Start your development with a beautiful Bootstrap 4 UI kit.">
	<meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/62/original/opt_nukp_thumbnail.jpg">
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="@creativetim">
	<meta name="twitter:title" content="Now UI Kit Pro by Creative Tim">
	<meta name="twitter:description" content="Start your development with a beautiful Bootstrap 4 UI kit.">
	<meta name="twitter:creator" content="@creativetim">
	<meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/62/original/opt_nukp_thumbnail.jpg">
	<meta name="twitter:data1" content="Now UI Kit Pro by Creative Tim">
	<meta name="twitter:label1" content="Product Type">
	<meta name="twitter:data2" content="$69">
	<meta name="twitter:label2" content="Price">
	<!-- Open Graph data -->
	<meta property="fb:app_id" content="655968634437471">
	<meta property="og:title" content="Now UI Kit Pro by Creative Tim" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" />
	<meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/62/original/opt_nukp_thumbnail.jpg" />
	<meta property="og:description" content="Start your development with a beautiful Bootstrap 4 UI kit." />
	<meta property="og:site_name" content="Creative Tim" />




</head>

<body>

	@include('includes.top_nav')
	<div class="wrapper">
		@yield('content')
		@include('includes.footer')
	</div>
</body>

   <!--   Core JS Files   -->
<script src="/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/plugins/moment.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<!-- Plugins for Presentation Page -->
<!-- Sharrre Library -->
<script src="/assets/js/plugins/presentation-page/jquery.sharrre.js" type="text/javascript"></script>

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-kit.js" type="text/javascript"></script>



<script type="text/javascript">
    $(document).ready(function(){

        var slider2 = document.getElementById('sliderRefine');

        noUiSlider.create(slider2, {
            start: [42, 880],
            connect: true,
            range: {
               'min': [30],
               'max': [900]
            }
        });

        var limitFieldMin = document.getElementById('price-left');
        var limitFieldMax = document.getElementById('price-right');

        slider2.noUiSlider.on('update', function( values, handle ){
            if (handle){
                limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
            } else {
                limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
            }
        });
    });
</script>




</html>