$(document).ready(function(){
	// home
	$('.box_skitter').skitter( {
		dots: false, fullscreen: false, label: true,
		interval: 5000, navigation:false, label:true, 
		numbers:true, hideTools:false, thumbs: false,
		velocity:1, animation: "random", numbers_align:'left',
		animateNumberOut: {backgroundColor:'#333', color:'#fff'},
		animateNumberOver: {backgroundColor:'#000', color:'#fff'},
		animateNumberActive: {backgroundColor:'#cc3333', color:'#fff'}
	} );
	$('.standardlist a[title]').qtip({ position: {my: 'bottom right', at: 'top left',}, style: {classes: 'ui-tooltip-shadow'} } );
	$('#vertical-slide').liteAccordion();
	$('#showcase').bxSlider({
		mode: 'fade',			
		infiniteLoop: true,
		auto: true,
		pager: false,
		easing: 'easeInOutQuad'
	});
	$('#latest').bxSlider({
		mode: 'vertical',
		infiniteLoop: true,
		auto: true,
		pager: false,
		controls: false,
		easing: 'easeInOutQuad',
		pause: 6000
	});
	$('#testimonials').bxSlider({
		mode: 'fade',
		infiniteLoop: true,
		auto: true,
		pager: false,
		controls: false,
		easing: 'easeInOutQuad',
		pause: 6000
	});
	
	// about us
	$('.intro_slider').bxSlider({ auto: false, controls : false, mode: 'fade', pager: true });
	$('.bwWrapper').BlackAndWhite({ hoverEffect : true, webworkerPath : false, responsive:true, invertHoverEffect:false });
	
	// order
	code_slider();
});