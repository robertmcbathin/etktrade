<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> @yield('title') </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="/assets/css/star-rating.css" rel="stylesheet" />
	<link href="/assets/css/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<link href="/assets/css/default-skin.css" rel="stylesheet" />
	<link href="/assets/css/photoswipe.css" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/app.css">
	<!--  Social tags      -->
	<meta name="keywords" content="@yield('keywords')">
	<meta name="description" content="@yield('description')">




</head>

<body class="@yield('body-class')">

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

    <!--  Photoswipe files -->
<script src="/assets/js/photoswipe.min.js"></script>
<script src="/assets/js/photoswipe-ui-default.min.js"></script>
 <script>
        $(document).ready(function(){
           var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            } 

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#co-card-search-result').hide();
        });
    </script>
    <script>
        $('#co-find-card').on('click',function(){
            if ($('#co-card-input-number').val().length > 8){

                /**
                 * LOADER
                 */
                
                /**
                 * REQUEST
                 */
                $.ajax({
                    method: 'POST',
                    url: checkCardUrl,
                    data: {
                        card_number: $('#co-card-input-number').val(),
                        partner_id: partnerId,
                        _token: token
                    }
                })
                .done(function(msg){
                    console.log(JSON.stringify(msg));
                    if (msg['message'] == 'success'){
                        $('#co-card-search').hide(500);
                        $('#co-card-search-result').show(500);
                        $('#top-progress').replaceWith('<div class=\"progress\" id=\"top-progress\"></div>');
                        $('#co-search-status').addClass('has-success');
                        $('#co-search-status').removeClass('has-error');

                        $('#co-card-number').replaceWith("<h6 class=\"card-category \" id=\"co-card-number\"><span class=\"pull-left\">Номер: </span><span class=\"upper-text\">" + msg['card'].num + "</span></h6>");
                        $('#co-bonuses').replaceWith("<h6 class=\"card-category \" id=\"co-bonuses\"><span class=\"pull-left\">Бонусы на карте: </span><span class=\"upper-text\">" + msg['user_bonuses'] + "</span></h6>");
                        $('#co-operations-count').replaceWith("<h6 class=\"card-category \" id=\"co-operations-count\"><span class=\"pull-left\">Количество посещений: </span><span class=\"upper-text\">" + msg['visit_count'] + "</span></h6>");
                        $('#co-operations-summary').replaceWith("<h6 class=\"card-category \" id=\"co-operations-summary\"><span class=\"pull-left\">Сумма посещений: </span><span class=\"upper-text\">" + msg['visit_summary'] + "</span></h6>");

                        $('#co-card-number-input').val($('#co-card-input-number').val());
                    } else if (msg['message'] == 'error'){
                        $('#co-search-status').removeClass('has-success');
                        $('#co-search-status').addClass('has-error');
                    }
                    $('#co-card-info-loader').replaceWith('<i id="co-card-info-loader"></i>');
                    $('#co-max-bonuses').replaceWith('<b id="co-max-bonuses">' + msg['user_bonuses'] + '</b>');
                    $('#co-create-operation-loader').replaceWith('<i id="co-create-operation-loader"></i>');
                });

            } else {

            }
        });
    </script>

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

<script>
	$('.add-to-cart').on('click', function(){
		var productId = $(this).val();
        $.ajax({
            method: 'POST',
            url: addToCartUrl,
            data: {
                productId : productId,
                _token : token
            }
        })
        .done(function(msg){
            console.log(JSON.stringify(msg));
            if (msg['message'] == 'success'){
                $('#top-nav-cart').html('(' + msg['item_count'] + ')');
            } else {
            }
        });
	});
</script>

<script>
  var token = '{{ Session::token() }}';
  var checkCartUrl = '{{ route('ajax.check-cart.post') }}';
	$(document).ready(function(){
        $.ajax({
            method: 'POST',
            url: checkCartUrl,
            data: {
                _token : token
            }
        })
        .done(function(msg){
            console.log(JSON.stringify(msg));
            if (msg['message'] == 'success'){
                $('#top-nav-cart').html('(' + msg['item_count'] + ')');
            } else {
            }
        });
	});
</script>

<script>
    $('.decrease-item-count').on('click', function(){
        var cartItemId = $(this).val();
        $.ajax({
            method: 'POST',
            url: decreaseItemCountUrl,
            data: {
                cartItemId : cartItemId,
                _token : token
            }
        })
        .done(function(msg){
            console.log(JSON.stringify(msg));
            if (msg['message'] == 'success'){
                $('#cart-item-count-' + cartItemId).html(msg['item_count']);
                $('#cart-item-amount-' + cartItemId).html(msg['item_amount']);
                $('#cart-total').html(msg['cart_total']);
            } else {
            }
        });
    });
</script>

<script>
    $('.increase-item-count').on('click', function(){
        var cartItemId = $(this).val();
        $.ajax({
            method: 'POST',
            url: increaseItemCountUrl,
            data: {
                cartItemId : cartItemId,
                _token : token
            }
        })
        .done(function(msg){
            console.log(JSON.stringify(msg));
            if (msg['message'] == 'success'){
                $('#cart-item-count-' + cartItemId).html(msg['item_count']);
                $('#cart-item-amount-' + cartItemId).html(msg['item_amount']);
                $('#cart-total').html(msg['cart_total']);
            } else {
            }
        });
    });
</script>


</html>