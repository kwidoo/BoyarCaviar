
window._ = require('lodash');
window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

jQuery(document).ready(function(){
	jQuery('.btn-buy').on('click', function(e){
		var self = this;
		jQuery.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
			}
		});
		jQuery.ajax({
			type: 'POST',
			url: '/buy',
			data: jQuery(self).attr('href').replace('/buy?',''),
			success: function(data, textStatus, jqXHR){
		   		jQuery('#cart').html(data);
		   		window.scrollTo(0,0);
		   		$('#myCart').modal('show');
			},
			error: function(jqXHR) {
			},
		});
		e.preventDefault();
	});
	jQuery('.btn-delete').on('click', function(e){
		var self = this;
		jQuery.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
			}
		});
		jQuery.ajax({
			type: 'POST',
			url: '/delete',
			data: {row_id: jQuery(self).data('row')},
			success: function(data, textStatus, jqXHR){
		   		jQuery('#cart-list').html(data);
			},
			error: function(jqXHR) {
			},
		});
		e.preventDefault();
	});

	(function change() {
		jQuery('.qty').on('change', function(e){
			var self = this;
			jQuery.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});
			jQuery.ajax({
				type: 'POST',
				url: '/update',
				data: {row_id: jQuery(self).data('row'), qty: jQuery(self).val() },
				success: function(data, textStatus, jqXHR){
			   		jQuery('#cart-list').html(data);
			   		change();
				},
				error: function(jqXHR) {
				},
			});
			e.preventDefault();
		});
	})();


	
	jQuery('.btn-empty').on('click', function(e){
		var self = this;
		jQuery.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
			}
		});
		jQuery.ajax({
			type: 'GET',
			url: '/empty',
			success: function(data, textStatus, jqXHR){
		   		jQuery('#cart-list').html(data);
			},
			error: function(jqXHR) {
			},
		});
		e.preventDefault();
	});
});

