
jQuery(document).ready(function($) {

	// Loadmore posts
	$('.dw-loadmore-posts').on('click',function() {
		var button = $(this);
		data = {
			'action': 'loadmore_posts',
			'page' : vars.current_page,
			'postsperpage' : vars.postsperpage,
			'cat' : vars.cat,
			's' : vars.s,
		};
		$.ajax({
			url : vars.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
        button.html(vars.tr_loading);
			},
			success : function( data ) {
				if( data ) { 
					button.html(vars.tr_seemore).prev().append(data);
					vars.current_page++;
					if ( vars.current_page >= vars.max_page ) {
						button.remove();
					}
				} else {
					button.remove();
				}
			}
		});
	});

});