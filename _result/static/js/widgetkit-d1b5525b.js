window["WIDGETKIT_URL"]="";
function wk_ajax_render_url(widgetid){return"/index.php?option=com_widgetkit&amp;tmpl=raw&amp;id="+widgetid}
(function(f,e){var a={};e.$widgetkit={lazyloaders:{},load:function(b){a[b]||(a[b]=f.getScript(b));return a[b]},lazyload:function(a){f("[data-widgetkit]",a||document).each(function(){var a=f(this),b=a.data("widgetkit"),e=a.data("options")||{};!a.data("wk-loaded")&&$widgetkit.lazyloaders[b]&&($widgetkit.lazyloaders[b](a,e),a.data("wk-loaded",true))})}};f(function(){$widgetkit.lazyload()})})(jQuery,window);(function(f){f.browser.msie&&parseInt(f.browser.version)<9&&(f(document).ready(function(){f("body").addClass("wk-ie wk-ie"+parseInt(f.browser.version))}),f.each("abbr,article,aside,audio,canvas,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,time,video".split(","),function(){document.createElement(this)}))})(jQuery);(function(f,e){e.$widgetkit.trans={__data:{},addDic:function(a){f.extend(this.__data,a)},add:function(a,b){this.__data[a]=b},get:function(a){if(!this.__data[a])return a;var b=arguments.length==1?[]:Array.prototype.slice.call(arguments,1);return this.printf(String(this.__data[a]),b)},printf:function(a,b){if(!b)return a;var c="",d=a.split("%s");if(d.length==1)return a;for(var e=0;e<b.length;e++)d[e].lastIndexOf("%")==d[e].length-1&&e!=b.length-1&&(d[e]+="s"+d.splice(e+1,1)[0]),c+=d[e]+b[e];return c+
d[d.length-1]}}})(jQuery,window);(function(f){f.easing.jswing=f.easing.swing;f.extend(f.easing,{def:"easeOutQuad",swing:function(e,a,b,c,d){return f.easing[f.easing.def](e,a,b,c,d)},easeInQuad:function(e,a,b,c,d){return c*(a/=d)*a+b},easeOutQuad:function(e,a,b,c,d){return-c*(a/=d)*(a-2)+b},easeInOutQuad:function(e,a,b,c,d){return(a/=d/2)<1?c/2*a*a+b:-c/2*(--a*(a-2)-1)+b},easeInCubic:function(e,a,b,c,d){return c*(a/=d)*a*a+b},easeOutCubic:function(e,a,b,c,d){return c*((a=a/d-1)*a*a+1)+b},easeInOutCubic:function(e,a,b,c,d){return(a/=d/2)<1?c/2*a*a*a+b:c/2*((a-=2)*a*a+2)+b},easeInQuart:function(e,a,b,c,d){return c*(a/=d)*a*a*a+b},easeOutQuart:function(e,a,b,c,d){return-c*((a=a/d-1)*a*a*a-1)+b},easeInOutQuart:function(e,a,b,c,d){return(a/=d/2)<1?c/2*a*a*a*a+b:-c/2*((a-=2)*a*a*a-2)+b},easeInQuint:function(e,a,b,c,d){return c*(a/=d)*a*a*a*a+b},easeOutQuint:function(e,a,b,c,d){return c*((a=a/d-1)*a*a*a*a+1)+b},easeInOutQuint:function(e,a,b,c,d){return(a/=d/2)<1?c/2*a*a*a*a*a+b:c/2*((a-=2)*a*a*a*a+2)+b},easeInSine:function(e,a,b,c,d){return-c*Math.cos(a/d*(Math.PI/2))+c+b},easeOutSine:function(e,a,b,c,d){return c*Math.sin(a/d*(Math.PI/2))+b},easeInOutSine:function(e,a,b,c,d){return-c/2*(Math.cos(Math.PI*a/d)-1)+b},easeInExpo:function(e,a,b,c,d){return a==0?b:c*Math.pow(2,10*(a/d-1))+b},easeOutExpo:function(e,a,b,c,d){return a==d?b+c:c*(-Math.pow(2,-10*a/d)+1)+b},easeInOutExpo:function(e,a,b,c,d){return a==0?b:a==d?b+c:(a/=d/2)<1?c/2*Math.pow(2,10*(a-1))+b:c/2*(-Math.pow(2,-10*--a)+2)+b},easeInCirc:function(e,a,b,c,d){return-c*(Math.sqrt(1-(a/=d)*a)-1)+b},easeOutCirc:function(e,a,b,c,d){return c*Math.sqrt(1-(a=a/d-1)*a)+b},easeInOutCirc:function(e,a,b,c,d){return(a/=d/2)<1?-c/2*(Math.sqrt(1-a*a)-1)+b:c/2*(Math.sqrt(1-(a-=2)*a)+1)+b},easeInElastic:function(e,a,b,c,d){var e=1.70158,g=0,f=c;if(a==0)return b;if((a/=d)==1)return b+c;g||(g=d*0.3);f<Math.abs(c)?(f=c,e=g/4):e=g/(2*Math.PI)*Math.asin(c/f);return-(f*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/g))+b},easeOutElastic:function(e,a,b,c,d){var e=1.70158,g=0,f=c;if(a==0)return b;if((a/=d)==1)return b+c;g||(g=d*0.3);f<Math.abs(c)?(f=c,e=g/4):e=g/(2*Math.PI)*Math.asin(c/f);return f*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/g)+c+b},easeInOutElastic:function(e,a,b,c,d){var e=1.70158,g=0,f=c;if(a==0)return b;if((a/=d/2)==2)return b+c;g||(g=d*0.3*1.5);f<Math.abs(c)?(f=c,e=g/4):e=g/(2*Math.PI)*Math.asin(c/f);return a<1?-0.5*f*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/g)+b:f*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/g)*0.5+c+b},easeInBack:function(e,a,b,c,d,f){f==void 0&&(f=1.70158);return c*(a/=d)*a*((f+1)*a-f)+b},easeOutBack:function(e,a,b,c,d,f){f==void 0&&(f=1.70158);return c*((a=a/d-1)*a*((f+1)*a+f)+1)+b},easeInOutBack:function(e,a,b,c,d,f){f==void 0&&(f=1.70158);return(a/=d/2)<1?c/2*a*a*(((f*=1.525)+1)*a-f)+b:c/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+b},easeInBounce:function(e,a,b,c,d){return c-f.easing.easeOutBounce(e,d-a,0,c,d)+b},easeOutBounce:function(e,a,b,c,d){return(a/=d)<1/2.75?c*7.5625*a*a+b:a<2/2.75?c*(7.5625*(a-=1.5/2.75)*a+0.75)+
b:a<2.5/2.75?c*(7.5625*(a-=2.25/2.75)*a+0.9375)+b:c*(7.5625*(a-=2.625/2.75)*a+0.984375)+b},easeInOutBounce:function(e,a,b,c,d){return a<d/2?f.easing.easeInBounce(e,a*2,0,c,d)*0.5+b:f.easing.easeOutBounce(e,a*2-d,0,c,d)*0.5+c*0.5+b}})})(jQuery);(function(f){function e(a){var c=a||window.event,d=[].slice.call(arguments,1),e=0,i=0,h=0,a=f.event.fix(c);a.type="mousewheel";a.wheelDelta&&(e=a.wheelDelta/120);a.detail&&(e=-a.detail/3);h=e;c.axis!==void 0&&c.axis===c.HORIZONTAL_AXIS&&(h=0,i=-1*e);c.wheelDeltaY!==void 0&&(h=c.wheelDeltaY/120);c.wheelDeltaX!==void 0&&(i=-1*c.wheelDeltaX/120);d.unshift(a,e,i,h);return f.event.handle.apply(this,d)}var a=["DOMMouseScroll","mousewheel"];f.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var b=a.length;b;)this.addEventListener(a[--b],e,false);else this.onmousewheel=e},teardown:function(){if(this.removeEventListener)for(var b=a.length;b;)this.removeEventListener(a[--b],e,false);else this.onmousewheel=null}};f.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery);
(function(d){var a=function(){};a.prototype=d.extend(a.prototype,{name:"accordion",options:{index:0,duration:500,easing:"easeOutQuart",animated:"slide",event:"click",collapseall:!0,matchheight:!0,toggler:".toggler",content:".content"},initialize:function(a,b){var b=d.extend({},this.options,b),c=a.find(b.toggler),g=function(a){var f=c.eq(a).hasClass("active")?d([]):c.eq(a),e=c.eq(a).hasClass("active")?c.eq(a):d([]);f.hasClass("active")&&(e=f,f=d([]));b.collapseall&&(e=c.filter(".active"));switch(b.animated){case"slide":f.next().stop().show().animate({height:f.next().data("height")},{easing:b.easing,duration:b.duration});e.next().stop().animate({height:0},{easing:b.easing,duration:b.duration,complete:function(){e.next().hide()}});break;default:f.next().show().css("height",f.next().data("height")),e.next().hide().css("height",0)}f.addClass("active");e.removeClass("active")},i=0;b.matchheight&&a.find(b.content).each(function(){i=Math.max(i,d(this).height())}).css("min-height",i);c.each(function(a){var c=d(this),e=c.next().css("overflow","hidden");e.data("height",e.height()).addClass("content-wrapper");a==b.index||b.index=="all"?(c.addClass("active"),e.show()):e.hide().css("height",0);c.bind(b.event,function(){g(a)})})}});d.fn[a.prototype.name]=function(){var h=arguments,b=h[0]?h[0]:null;return this.each(function(){var c=d(this);if(a.prototype[b]&&c.data(a.prototype.name)&&b!="initialize")c.data(a.prototype.name)[b].apply(c.data(a.prototype.name),Array.prototype.slice.call(h,1));else if(!b||d.isPlainObject(b)){var g=new a;a.prototype.initialize&&g.initialize.apply(g,d.merge([c],h));c.data(a.prototype.name,g)}else d.error("Method "+b+" does not exist on jQuery."+a.name)})};window.$widgetkit&&($widgetkit.lazyloaders.accordion=function(a,b){d(a).accordion(b)})})(jQuery);
(function(){$widgetkit.lazyloaders["gallery-slider"]=function(b,a){var d=b.find(".slides:first"),c=d.children(),e=a.total_width=="auto"?b.width():a.total_width;c.css({width:e/c.length-a.spacing,"margin-right":a.spacing});d.width(c.eq(0).width()*c.length*2);b.css({width:e,height:a.height});$widgetkit.load(WIDGETKIT_URL+"/widgets/gallery/js/slider.js").done(function(){b.galleryslider(a)})}})(jQuery);
$widgetkit.load('static/js/lightbox.js').done(function(){jQuery(function($){$('a[data-lightbox]').lightbox({"titlePosition":"float","transitionIn":"fade","transitionOut":"fade","overlayShow":1,"overlayColor":"#777","overlayOpacity":0.7});});});
(function(){$widgetkit.lazyloaders.googlemaps=function(a,b){$widgetkit.load(WIDGETKIT_URL+"/widgets/map/js/map.js").done(function(){a.googlemaps(b)})}})(jQuery);
$widgetkit.trans.addDic({"FROM_ADDRESS":"From address: ","GET_DIRECTIONS":"Get directions","FILL_IN_ADDRESS":"Please fill in your address.","ADDRESS_NOT_FOUND":"Sorry, address not found!","LOCATION_NOT_FOUND":", not found!"});
if(!window['mejs']){$widgetkit.load('static/js/mediaelement-and-player.js').done(function(){jQuery(function($){mejs.MediaElementDefaults.pluginPath='/media/widgetkit/widgets/mediaplayer/mediaelement/';$('video,audio').mediaelementplayer({"pluginPath":"\/media\/widgetkit\/widgets\/mediaplayer\/mediaelement\/"});});});}else{jQuery(function($){mejs.MediaElementDefaults.pluginPath='/media/widgetkit/widgets/mediaplayer/mediaelement/';$('video,audio').mediaelementplayer({"pluginPath":"\/media\/widgetkit\/widgets\/mediaplayer\/mediaelement\/"});});;}
(function(d){$widgetkit.lazyloaders.slideset=function(a,b){var c=a.find("ul.set").show();gwidth=b.width=="auto"?a.width():b.width;d.browser.msie&&d.browser.version<8&&c.children().css("display","inline");var e=b.height=="auto"?c.eq(0).outerHeight(!0):b.height;c.eq(0).parent().css({height:e});a.css({width:gwidth});c.css({height:e});
$widgetkit.load(WIDGETKIT_URL+"static/js/slideset.js").done(function(){a.slideset(b).css("visibility","visible");a.find("img[data-src]").each(function(){var a=d(this),b=a.data("src");setTimeout(function(){a.attr("src",b)},1)})})}})(jQuery);
(function(c){$widgetkit.lazyloaders.slideshow=function(b,a){b.css("visibility","hidden");var d=0,f=0,g=b.find("ul.slides:first");g.children().each(function(){d=Math.max(d,c(this).height());f=Math.max(f,c(this).width())});if(a.height=="auto")a.height=d;if(a.width=="auto")a.width=b.width();b.css({position:"relative",width:a.width});g.css({position:"relative",overflow:"hidden",height:a.height}).children().css({top:"0px",left:"0px",position:"absolute",width:b.width(),height:a.height});$widgetkit.load(WIDGETKIT_URL+"/widgets/slideshow/js/slideshow.js").done(function(){b.slideshow(a).css("visibility","visible");b.find("img[data-src]").each(function(){var a=c(this),b=a.data("src");setTimeout(function(){a.attr("src",b)},1)})})};$widgetkit.lazyloaders.showcase=function(b,a){var d=b.find(".wk-slideshow").css("visibility","hidden"),f=b.find(".wk-slideset").css("visibility","hidden"),g=f.find("ul.set > li"),h=0,i=0,e=b.find("ul.slides:first");e.children().each(function(){h=Math.max(h,c(this).height());i=Math.max(i,c(this).width())});if(a.height=="auto")a.height=h;if(a.width=="auto")a.width=b.width();d.css({position:"relative",width:a.width});e.css({position:"relative",overflow:"hidden",height:a.height}).children().css({top:"0px",left:"0px",position:"absolute",width:b.width(),height:a.height});e=b.find("ul.set");gwidth=a.width=="auto"?b.width():a.width;c.browser.msie&&c.browser.version<8&&e.children().css("display","inline");var j=e.eq(0).outerHeight(!0);b.css({width:gwidth});e.css({height:j}).hide();f.css("height",f.height()+j);e.show();c.when($widgetkit.load(WIDGETKIT_URL+"/widgets/slideset/js/slideset.js"),$widgetkit.load(WIDGETKIT_URL+"/widgets/slideshow/js/slideshow.js")).done(function(){d.slideshow(a).css("visibility","visible");f.slideset(c.extend({},a,{height:"auto",autoplay:!1,duration:a.slideset_effect_duration,index:parseInt(a.index/a.items_per_set)})).css("visibility","visible");var b=d.data("slideshow"),e=f.data("slideset");g.eq(b.index).addClass("active");d.bind("slideshow-show",function(a,b,c){if(!g.removeClass("active").eq(c).addClass("active").parent().is(":visible"))e[c>b?"next":"previous"]()});g.each(function(a){c(this).bind("click",function(){b.stop();b.show(a)})});d.find("img[data-src]").each(function(){var a=c(this),b=a.data("src");setTimeout(function(){a.attr("src",b)},1)})})}})(jQuery);
$widgetkit.load('static/js/spotlight.js').done(function(){jQuery(function($){$('[data-spotlight]').spotlight({"duration":300});});});
jQuery(function(b){var f=function(b){var a=new Date(Date.parse(b.replace(/(\d+)-(\d+)-(\d+)T(.+)([-\+]\d+):(\d+)/g,"$1/$2/$3 $4 UTC$5$6"))),a=parseInt(((arguments.length>1?arguments[1]:new Date).getTime()-a)/1E3);return a<60?$widgetkit.trans.get("LESS_THAN_A_MINUTE_AGO"):a<120?$widgetkit.trans.get("ABOUT_A_MINUTE_AGO"):a<2700?$widgetkit.trans.get("X_MINUTES_AGO",parseInt(a/60).toString()):a<5400?$widgetkit.trans.get("ABOUT_AN_HOUR_AGO"):a<86400?$widgetkit.trans.get("X_HOURS_AGO",parseInt(a/3600).toString()):a<172800?$widgetkit.trans.get("ONE_DAY_AGO"):$widgetkit.trans.get("X_DAYS_AGO",parseInt(a/86400).toString())};b(".wk-twitter time").each(function(){b(this).html(f(b(this).attr("datetime")))});var d=b(".wk-twitter-bubbles");if(d.length){var e=function(){d.each(function(){var c=0;b(this).find("p.content").each(function(){var a=b(this).height();a>c&&(c=a)}).css("min-height",c)})};e();b(window).bind("load",e)}});
$widgetkit.trans.addDic({"LESS_THAN_A_MINUTE_AGO":"less than a minute ago","ABOUT_A_MINUTE_AGO":"about a minute ago","X_MINUTES_AGO":"%s minutes ago","ABOUT_AN_HOUR_AGO":"about an hour ago","X_HOURS_AGO":"about %s hours ago","ONE_DAY_AGO":"1 day ago","X_DAYS_AGO":"%s days ago"});