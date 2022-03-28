wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );
	
wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
} );

$(window).scroll(function () {
	var sc = $(window).scrollTop()
	if (sc > 150) {
		$("#main-navbar").addClass("navbar-scroll")
	} 
	else {
		$("#main-navbar").removeClass("navbar-scroll")
	}
});

$(document).foundation();
var stickyElem = new Foundation.Sticky($(".top-bar"), {
  marginTop: 0
});

$(".top-bar").on("sticky.zf.stuckto:top", function () {
  $(".sticky-container").fadeIn();
});
$(".top-bar").on("sticky.zf.unstuckfrom:top", function () {
  $(".sticky-container").fadeOut();
});