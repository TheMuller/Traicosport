//<script>

elgg.provide('elgg.river.update');

elgg.river.update.init = function() {
	var form = $('form[name=elgg-wire]');
	form.find('input[type=submit]').live('click', elgg.river.update.submit);
};

elgg.river.update.submit = function(e) {
	var form = $(this).parents('form');
	var data = form.serialize();

	elgg.action('nuevo/add', {
		data: data,
		success: function(json) {

			var river = $('.elgg-list-river');
						
			if (river.length < 1) {
				river.append(json.output);
			} else {
				$(json.output).find('li:first').hide().prependTo(river).slideDown(500);
			};
			form.find('textarea').val('');
			$("#thewire-characters-remaining span").html("140");
		}
	});
	e.preventDefault();
};
elgg.register_hook_handler('init', 'system', elgg.river.update.init);
