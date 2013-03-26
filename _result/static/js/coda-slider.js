function code_slider() {
	if ($('#order-step').length == 0) {
		return;
	}
	
    var horizontal = true;
    var $panels = $('#order-step .scrollContainer > div');
    var $container = $('#order-step .scrollContainer');
    var $scroll = $('#order-step .scroll').css('overflow', 'hidden');
	
    if (horizontal) {
        $panels.css({ 'float' : 'left', 'position' : 'relative' });
        $container.css('width', $panels[0].offsetWidth * $panels.length);
    }
	
    function selectNav() {
        $(this)
            .parents('ul:first')
                .find('a')
                    .removeClass('selected')
                .end()
            .end()
            .addClass('selected');
    }

    $('#order-step .navigation').find('a').click(selectNav);

    // go find the navigation link that has this target and select the nav
    function trigger(data) {
        var el = $('#order-step .navigation').find('a[href$="' + data.id + '"]').get(0);
        selectNav.call(el);
    }

    if (window.location.hash) {
        trigger({ id : window.location.hash.substr(1) });
    } else {
        $('ul.navigation a:first').click();
    }

    // offset is used to move to *exactly* the right place, since I'm using
    // padding on my example, I need to subtract the amount of padding to
    // the offset.  Try removing this to get a good idea of the effect
    var offset = parseInt((horizontal ? 
        $container.css('paddingTop') : 
        $container.css('paddingLeft')) 
        || 0) * -1;


    var scrollOptions = {
        target: $scroll, // the element that has the overflow

        // can be a selector which will be relative to the target
        items: $panels,

        navigation: '.navigation a',

        // selectors are NOT relative to document, i.e. make sure they're unique
        prev: 'img.left', 
        next: 'img.right',

        // allow the scroll effect to run both directions
        axis: 'xy',

        onAfter: trigger, // our final callback

        offset: offset,

        // duration of the sliding effect
        duration: 500,

        // easing - can be used with the easing plugin: 
        // http://gsgd.co.uk/sandbox/jquery/easing/
        easing: 'swing'
    };

    // apply serialScroll to the slider - we chose this plugin because it 
    // supports// the indexed next and previous scroll along with hooking 
    // in to our navigation.
    $('#order-step').serialScroll(scrollOptions);
}