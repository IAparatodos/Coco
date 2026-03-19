jQuery(document).ready(function($) {

	
	// Function added to see if is visible an element
	$.fn.isVisible = function() {
		if (!$(this).length) return false;
		var elementTop = $(this).offset().top;
		var elementBottom = elementTop + $(this).outerHeight();
		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();
		var ok = elementBottom > viewportTop && elementTop < viewportBottom;
		return ok;
	};

	$(window).on('scroll', function() {
		// Recaptcha visibility
		if ($('.wpcf7-form').isVisible()) {
			$('.grecaptcha-badge').addClass('visible');
		} else {
			$('.grecaptcha-badge').removeClass('visible');
		}
	});

	// Search
	$('.site-search .search-button,.site-search .search-submit').on('click', function() {
		$(this).parent('.site-search').toggleClass('selected');
	});

	// Switcher
	$('#table').on('click', function() {
		$('.products').addClass('table');
	});
	$('#grid').on('click', function() {
		$('.products').removeClass('table');
	});

	// Change element position
	var html = $('.productinfo-show-discounts').remove();
	$('.woocommerce-product-details__short-description').append(html);

	// Thumbs gallery slider
	setTimeout(function() {
		var first_thumb = 1;
		var max_thumbs = 3;
		var number_thumbs = $('.flex-control-thumbs li').length;
		if (number_thumbs > 0) {
			$('.flex-control-thumbs').append(
				'<div class="slider-btn-gallery left"></div>' +
				'<div class="slider-btn-gallery right"></div>'
			);
		}
		function update_slider() {
			var i = 0;
			$('.flex-control-thumbs li').each(function() {
				i++;
				if (i < first_thumb || i >= first_thumb + max_thumbs) {
					$(this).addClass('dw-hidden');
				} else {
					$(this).removeClass('dw-hidden');
				}
			});
			if (first_thumb > 1) {
				$('.slider-btn-gallery.left').removeClass('dw-hidden');
			} else {
				$('.slider-btn-gallery.left').addClass('dw-hidden');
			}
			if (first_thumb > number_thumbs - max_thumbs) {
				$('.slider-btn-gallery.right').addClass('dw-hidden');
			} else {
				$('.slider-btn-gallery.right').removeClass('dw-hidden');
			}
		}
		update_slider();
		$('.slider-btn-gallery.left').on('click', function() {
			if (first_thumb > 1) first_thumb--;
			update_slider();
		});
		$('.slider-btn-gallery.right').on('click', function() {
			if (first_thumb <= number_thumbs - max_thumbs) first_thumb++;
			update_slider();
		});
	}, 100);

	// Up-sell products slider
	var first_prod = 1;
	var max_prods = 3;
	var number_prods = $('.up-sells .products li').length;
	if (number_prods > 0) {
		$('.upsells-title').append(
			'<div class="slider-btn-prod left"></div>' +
			'<div class="slider-btn-prod right"></div>'
		);
	}
	function update_prods_slider() {
		var i = 0;
		$('.up-sells .products li').each(function() {
			i++;
			if (i < first_prod || i >= first_prod + max_prods) {
				$(this).addClass('dw-hidden');
			} else {
				$(this).removeClass('dw-hidden');
			}
		});
		if (first_prod > 1) {
			$('.slider-btn-prod.left').removeClass('dw-hidden');
		} else {
			$('.slider-btn-prod.left').addClass('dw-hidden');
		}
		if (first_prod > number_prods - max_prods) {
			$('.slider-btn-prod.right').addClass('dw-hidden');
		} else {
			$('.slider-btn-prod.right').removeClass('dw-hidden');
		}
	}
	update_prods_slider();
	$('.slider-btn-prod.left').on('click', function() {
		if (first_prod > 1) first_prod--;
		update_prods_slider();
	});
	$('.slider-btn-prod.right').on('click', function() {
		if (first_prod <= number_prods - max_prods) first_prod++;
		update_prods_slider();
	});

	// Popup close
	$('.popup-container .close').on('click', function() {
		$('.popup-container').remove();
		$('.wc-block-components-notice-banner').remove();
	});

	// Slider related products
	var max_products = 4;
	if (screen.width <= 1100 ) {
		max_products = 3;
	}
	if (screen.width <= 800 ) {
		max_products = 2;
	}
	if (screen.width <= 374 ) {
		max_products = 1;
	}
	var first_product = 1;
	var number_products = $('.slider-products li').length;
	function update_slider_products() {
		var i = 0;
		$('.slider-products li').each(function() {
			i++;
			if (i < first_product || i >= first_product + max_products) {
				$(this).addClass('dw-hidden');
			} else {
				$(this).removeClass('dw-hidden');
			}
		});
		if (first_product > 1) {
			$('.slider-btn.left').removeClass('dw-hidden');
		} else {
			$('.slider-btn.left').addClass('dw-hidden');
		}
		if (first_product > number_products - max_products) {
			$('.slider-btn.right').addClass('dw-hidden');
		} else {
			$('.slider-btn.right').removeClass('dw-hidden');
		}
	}
	update_slider_products();
	$('.slider-btn.left').on('click', function() {
		if (first_product > 1) first_product--;
		update_slider_products();
	});
	$('.slider-btn.right').on('click', function() {
		if (first_product <= number_products - max_products) first_product++;
		update_slider_products();
	});

	// Menu mobile
	$('.menu-item-has-children').on('click', function(e) {
		if (screen.width <= 1100) {
			if ( $(e.target).hasClass('menu-item-has-children') || $(e.target).parent().hasClass('menu-item-has-children') ) {
				e.preventDefault();
				$(this).toggleClass('active');
			}
		}
	});


	// On resize screen
	$(window).resize(function(){
		resizing();
	});

	resizing();

	function resizing() {
		// Single-post social-media change position
		if (screen.width <= 600) {
			var post_social_media = $('.post-footer .social-media').remove();
			var html_sm = post_social_media.wrap('<div></div>').parent().html();
			$('article.post').append(html_sm);
		}
	
		// Single-product brand and upsells change position
		if (screen.width <= 800) {
			var bu = $('.brand-upsells').remove();
			var html_bu = bu.wrap('<div></div>').parent().html();
			$('.woocommerce-tabs').after(html_bu);
		}
	}

	// Add class for css
	// $('li.product-category.product').each(function() {
	// 	$(this).parent('ul').addClass('products-category');
	// });

	// Cart Coupon
	function enable_coupon() {
		$('.coupon-control').on('click', function() {
			$('.coupon').addClass('enabled');
		});
	}


	$('#calc_shipping').on('click',function(e){
		e.preventDefault();
		var shipping_country_val    =    $("#calc_shipping_country").val();
		var shipping_state_val      =    $("#calc_shipping_state").val();
		var shipping_city_name      =    $("#calc_shipping_city").val();
		var shipping_postcode       =    $("#calc_shipping_postcode").val();

		$("#billing_country").val(shipping_country_val);
		$("#billing_state").val(shipping_state_val);
		$('#billing_city').val(shipping_city_name);
		$('#billing_postcode').val(shipping_postcode);
		$("#shipping_country").val(shipping_country_val);
		$("#shipping_state").val(shipping_state_val);
		$('#shipping_city').val(shipping_city_name);
		$('#shipping_postcode').val(shipping_postcode);

		$('#billing_country , #shipping_country').trigger('change');
		$('#billing_state, #shipping_state').trigger('change');
	});

	// checkout inputs required marked
	$('#customer_details .validate-required input').each( function() {
		if ($(this).val().length == 0) {
			var txt = $(this).attr('placeholder');
			var tmpSpan = $('<span/>').html(txt).css({
				position: 'absolute',
				left: -99999,
				top: -9999,
				'font-size' : '15px',
			}).appendTo('body');
			var textWidth = tmpSpan.width() + 18 ;
			tmpSpan.remove();
			if (textWidth > 0) {
				$(this).before('<span class="sel" style="left:'+ textWidth +'px">*</span>');
			}
		} else {
			$(this).parent().find('.sep').remove();
		}
	});
	$('#customer_details .validate-required input').keyup( function(e) {
		if ($(this).val().length === 0) {
			var txt = $(this).attr('placeholder');
			var tmpSpan = $('<span/>').html(txt).css({
				position: 'absolute',
				left: -99999,
				top: -9999,
				'font-size' : '15px',
			}).appendTo('body');
			var textWidth = tmpSpan.width() + 18 ;
			tmpSpan.remove();
			if (textWidth > 0) {
				$(this).before('<span class="sel" style="left:'+ textWidth +'px">*</span>');
			}
		} else {
			$(this).parent().children('span.sel').remove();
		}
	});

	// update price with bulk discount in single product
	$('input.qty').on('change', function() {
		if ($('input[name="_bulkdiscount_quantity"]').length > 0) {
			var b_qty = parseFloat($('input[name="_bulkdiscount_quantity"]').val());
			var b_dct = parseFloat($('input[name="_bulkdiscount_discount"]').val());
			var price = parseFloat($('input[name="_price"]').val());
			var qty = $(this).val();
			var span = $('.quantity-price .price ins bdi span').outerHTML();
			var new_price = price;
			if (b_qty > 0 && b_dct > 0 && qty >= b_qty) {
				new_price = parseFloat($('input[name="_new_price"]').val());
			}
			$('.quantity-price .price ins bdi').html(number_format(new_price, 2, ',', '.') + span);
			var box_price_html = $('.box-price bdi');
			if (box_price_html.length > 0) {
				var box_price = parseFloat($('input[name="_price_box"]').val());
				if (b_qty > 0 && b_dct > 0 && qty >= b_qty) {
					box_price = parseFloat($('input[name="_new_price_box"]').val());
				}
				box_price_html.html(number_format(box_price, 2, ',', '.') + span);
			}
		}
	});

	// format number
	number_format = function(number, decimals, dec_point, thousands_sep) {
		number = number.toFixed(decimals);
		var nstr = number.toString();
		nstr += '';
		x = nstr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? dec_point + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1))
			x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');
		return x1 + x2;
	}

	// get outer html
	$.fn.outerHTML = function() {
		return $('<div />').append(this.eq(0).clone()).html();
	};


	// quantity control in cart
	function enable_update_cart() {
    $('[name="update_cart"]').removeAttr('disabled');
	}
	function quantity_step_btn() {
    var timeoutPlus;
    $('.qty-wrapper .up').one().on('click', function() {
			var input = $(this).parent().find('input.qty');
			var oldVal = parseFloat(input.val());
			var stepAttr = input.attr('step');
			var step = (stepAttr && stepAttr.length) ? parseFloat(stepAttr) : 1; 
			var newVal = oldVal + parseFloat(step);
			var maxAttr = input.attr('max');
			var max = (maxAttr && maxAttr.length) ? parseFloat(maxAttr) : 0;
			var minAttr = input.attr('min');
			var min = (minAttr && minAttr.length) ? parseFloat(minAttr) : 0;
			if (max && newVal > max) {
				newVal = parseFloat(max);
			}
			if (min && newVal < min) {
				newVal = parseFloat(min);
			}
      newVal = Math.round(newVal / step) * step;
      input.val(newVal.toFixed(2)).trigger('change');
			if( timeoutPlus != undefined ) {
				clearTimeout(timeoutPlus);
			}
			timeoutPlus = setTimeout(function(){
				$('[name="update_cart"]').trigger('click');
			}, 500);
		});
		var timeoutMinus;
		$('.qty-wrapper .down').one().on('click', function() {
			var input = $(this).parent().find('input.qty');
			var oldVal = parseFloat(input.val());
			var stepAttr = input.attr('step');
			var step = (stepAttr && stepAttr.length) ? parseFloat(stepAttr) : 1; 
			var newVal = oldVal - parseFloat(step);
			var maxAttr = input.attr('max');
			var max = (maxAttr && maxAttr.length) ? parseFloat(maxAttr) : 0;
			var minAttr = input.attr('min');
			var min = (minAttr && minAttr.length) ? parseFloat(minAttr) : 0;
			if (max && newVal > max) {
				newVal = parseFloat(max);
			}
			if (min && newVal < min) {
				newVal = parseFloat(min);
			}
      newVal = Math.round(newVal / step) * step;
      input.val(newVal.toFixed(2)).trigger('change');
			if( timeoutMinus != undefined ) {
				clearTimeout(timeoutMinus);
			}
			timeoutMinus = setTimeout(function(){
				$('[name="update_cart"]').trigger('click');
			}, 500);
		});
		var timeoutInput;
		$('div.woocommerce').on('change', '.qty', function(){
			if( timeoutInput != undefined ) {
				clearTimeout(timeoutInput);
			}
			timeoutInput = setTimeout(function(){
				$('[name="update_cart"]').trigger('click');
			}, 500);
		});
	}
	enable_update_cart();
	quantity_step_btn();
	enable_coupon();
	enable_shipping();
	// reinitialize the function on update_cart
	$( document ).on( 'updated_cart_totals', function() {
		enable_update_cart();
		quantity_step_btn();
		enable_coupon();
		enable_shipping();
	});

	// Cart Coupon
	function enable_coupon() {
		$('.coupon-control').on('click', function() {
			$('.coupon').addClass('enabled');
		});
	}

	function enable_shipping() {
		$('.shipping-calculator-button').on('click', function() {
			$(this).toggleClass('open');
		});
	}

	// Advanced search with selects
	$('.search-content .terms').on('change',function(e) {
		e.preventDefault();
		$('#search-submit').trigger('click');
	});

	// Advanced search with ul list
	$('.advanced-search-inputs .term-value').on('click', function() {
		var element = $(this).parent();
		element.parent().children('.focus').each(function() {
			if (!$(this).is(element)) {
				$(this).removeClass('focus');
			}
		});
		element.toggleClass('focus');
	});
	$('.advanced-search-inputs li').on('click', function(e) {
		e.preventDefault();
		var value = $(this).attr('value');
		var name = $(this).html();
		var input = $(this).parent().parent().find('input');
		var term = $(this).parent().parent().find('.term-value');
		input.val(value);
		input.html(name);
		term.attr('value',value);
		term.html(name);
		$(this).parent().parent().removeClass('focus');
		$('#search-submit').trigger('click');
	});

	// $('.woocommerce-price-suffix').each(function() {
	// 	var content = $.trim($(this).html());
	// 	if (content.substr(0,1) == '/') {
	// 		content = content.substr(1, content.length - 1 );
	// 	}
	// 	$(this).html(content);
	// });

	const stuckClass = 'sticky';
	const $stickyTopElements = $('.advanced-filter');
	function determineSticky() {
		$stickyTopElements.each(function() {
			const el = this;
			const $el = $(el);
			const stickPoint = parseInt($el.css('top'));
			const currTop = parseInt(el.getBoundingClientRect().top);
			const isStuck = currTop <= stickPoint;
			$el.toggleClass(stuckClass, isStuck);
		});
	}
	determineSticky();
	$(window).on('resize scroll', () => {
		determineSticky();
	});


	if ($('.advanced-search').length && !$('.dw-spinner').length ) {
		$('body').append('<div class="dw-spinner"><div class="spin-loader"></div></div>');
	}

	$('.filter-search-btn .filter').on('click', function() {
		$(this).closest('.advanced-filter').addClass('active');
		$(this).hide();
		$(this).parent().find('.close').show();
		$('.advanced-search').show();
	});
	$('.filter-search-btn .close').on('click', function() {
		$(this).closest('.advanced-filter').removeClass('active');
		$(this).hide();
		$(this).parent().find('.filter').css('display','flex');
		$('.advanced-search').hide();
	});



	// Spinner page transition
	$('#search-submit,.reset-filter').on('click', function() {
		var spin = $('.dw-spinner');
		if (spin.length) {
			spin.addClass( 'active' );
		}
	});

	// Menu with children add title on submenu:after
	$('.main-navigation .menu-item.menu-item-has-children').each(function() {
		var submenu_item_after = $(this).find('a').first().html();
		if (submenu_item_after) {
			$(this).find('.submenu::after').css('content',submenu_item_after);
		}
	});


	// Cetelem accordion
	if (var_cus.accordion) {
		$('.single-product').addClass('cetelem-accordion');
		$('#eCalculadoraCetelemDiv').on('click','header', function() {
			$(this).toggleClass('focus');
		});
		setTimeout(function() {
			var c_origen = $('.single-product #eCalculadoraCetelemDiv');
			var c_destino = $('.single-product .sequra-promotion-widget').last();
			if (c_origen.length && c_destino.length) {
				c_origen.insertAfter(c_destino);
			}
		}, 300);
	}


	// Proyectos
	$('.block-questions > .wp-block-group__inner-container > .wp-block-group > p').on('click', function() {
		$(this).toggleClass('active');
	});


	// Menu customizer

  // $('.menu-item.custom-menu-category .sub-menu').html(var_cus.custom_menu_cats).wrap('<div class="sub-menu-container"></div>');
	$('.menu-item.custom-menu-category .sub-menu').html(var_cus.custom_menu_cats).wrapInner('<div class="sub-menu-content"></div>');
	$('.menu-item.parent').on('click','.more,.minus', function(e) {
		e.preventDefault();
		$(this).closest('.parent').toggleClass('focus');
	});


  // Decimales en el input de cantidad
  $('.qty[type="number"]').on('blur change', function () {
    let $input = $(this);
    let value = parseFloat($input.val());
    let step = parseFloat($input.attr('step')) || 1; 
    if (!isNaN(value)) {
      let roundedValue = Math.round(value / step) * step;
      $input.val(roundedValue.toFixed(2));
    }
  }).trigger('blur');

});