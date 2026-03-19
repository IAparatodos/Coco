jQuery(document).ready(function($) {

	if (!$('.dw-spinner').length ) {
		$('body').append('<div class="dw-spinner"><div class="spin-loader"></div></div>');
	}
	
	$('.doo-load-more').on('click', function(e) {
		e.preventDefault();
		var cont = $(this).closest('.doo-category-banner');
		var offset = cont.data('offset');
		var parentId = cont.data('parent');
		var total = cont.data('total');
		$.ajax({
			type: 'POST',
			url: dooAjax.ajax_url,
			data: {
				action: 'doo_load_more_categories',
				nonce: dooAjax.nonce,
				offset: offset,
				parent_id: parentId,
				categories: cont.find('input[name="banner-cats"]').val()
			},
			beforeSend : function ( xhr ) {
				$('.dw-spinner').addClass('active');
			},
			success: function(response) {
				cont.find('.doo-category-grid').append(response);
				offset += 6;
				cont.data('offset', offset);
				if (offset >= total) {
					cont.find('.doo-load-more').hide();
				}
				$('.dw-spinner').removeClass('active');
			},
			error: function(xhr, status, error) {
				console.log('Error:', error);
				$('.dw-spinner').removeClass('active');
			}
		});
	});
});
