jQuery.noConflict();
     
jQuery(document).ready(function(){

	var $main = jQuery('#main_class');
	var $sidebar = jQuery('#sidebar_class');
	var $sidebar_first = jQuery('#sidebar_first_class');
	var framework = jQuery('.roots_css_frameworks select option:selected').val();
	var user_main_class = $main.val();
	var user_sidebar_class = $sidebar.val();
	var user_sidebar_first_class = $sidebar_first.val();

	jQuery('.roots_css_frameworks select').change(function (e) {
		var main_class = roots_css_frameworks[this.value].classes.main;
		var sidebar_class = roots_css_frameworks[this.value].classes.sidebar;
		var sidebar_first_class = roots_css_frameworks[this.value].classes.sidebar_first;

		// if the selected framework was the one originally set, load the original classes instead of the defaults
		if (this.value === framework) {
			$main.val(user_main_class);
			$sidebar.val(user_sidebar_class);
			$sidebar_first.val(user_sidebar_first_class);
		} else {
			$main.val(main_class);
			$sidebar.val(sidebar_class);
			$sidebar_first.val(sidebar_first_class);
		}
    
		$main.siblings('small').children().text(main_class);
		$sidebar.siblings('small').children().text(sidebar_class);
		$sidebar_first.siblings('small').children().text(sidebar_first_class);
	});
	
});
