jQuery(document).ready(function() {
	// change tabindex value respectively, 5 is default for WordPress form
	var tabindex = 5;
	
	// use both IDs just in case of conflict with #submit
	var submit = jQuery('#commentform .form-submit #submit');
	 
	// if element exists
	if( submit.length !== 0 ) {
		jQuery(submit).attr( 'tabindex', tabindex );
	}
});