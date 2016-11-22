 
function t142_checkSize(recid){
  var el=$("#rec"+recid).find(".t142__submit");
  if(el.length){
    var btnheight = el.height() + 5;
    var textheight = el[0].scrollHeight;
    if (btnheight < textheight) {
      var btntext = el.text();
      el.addClass("t142__submit-overflowed");
      el.html("<span class=\"t142__text\">" + btntext + "</span>");
    }
  }
} 
function t260_init(){
	$(".t260").each(function() {
		var el=$(this);
		if(el.attr('data-block-init')=='yes'){
		}else{
		  el.attr('data-block-init','yes');

          var toggler = el.find(".t260__header");
          var content = el.find(".t260__content");

          toggler.click(function() {
			$(this).toggleClass("t260__opened");
			if($(this).hasClass("t260__opened")==true){
				content.slideDown();
			}else{
				content.slideUp();
			}
          })

		}
	});
} 
window.t266showvideo = function(recid){
    $(document).ready(function(){
        var el = $('#coverCarry'+recid);
        var videourl = '';

        var youtubeid=$("#rec"+recid+" .t266__video-container").attr('data-content-popup-video-url-youtube');
        if(youtubeid > '') {
            videourl = 'https://www.youtube.com/embed/' + youtubeid;
        }

        $("body").addClass("t266__overflow");
		$("#rec"+recid+" .t266__cover").addClass("t266__hidden");
        $("#rec"+recid+" .t266__video-container").removeClass("t266__hidden");
        $("#rec"+recid+" .t266__video-carier").html("<iframe id=\"youtubeiframe"+recid+"\" class=\"t266__iframe\" width=\"100%\" height=\"540\" src=\"" + videourl + "?autoplay=1\" frameborder=\"0\" allowfullscreen></iframe><a class=\"t266__close-link\" href=\"javascript:t266hidevideo('"+recid+"');\"><div class=\"t266__close\"></div></a>");
    });
}

window.t266hidevideo = function(recid){
    $(document).ready(function(){
        $("body").removeClass("t266__overflow");
        $("#rec"+recid+" .t266__cover").removeClass("t266__hidden");
        $("#rec"+recid+" .t266__video-container").addClass("t266__hidden");
        $("#rec"+recid+" .t266__video-carier").html("<div class=\"t266__video-bg2\"></div>");
    });
} 
function t330_showPopup(recid){
  var el=$('#rec'+recid).find('.t330');
  $('body').addClass('t330__body_popupshowed');
  if(el.find('.t330__popup').attr('style') && el.find('.t330__popup').attr('style') > '') {
    el.find('.t330__popup').attr('style','');
  }
  el.addClass('t330__popup_show');
  el.find('.t330__close, .t330__content, .t330__bg').click(function(){
  t330_closePopup();
  });
  $('.t330__mainblock').click(function( event ) {
    event.stopPropagation();
  });
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
     $('body').removeClass('t330__body_popupshowed');
      $('.t330').removeClass('t330__popup_show');
    }
});
}

function t330_closePopup(){
  $('body').removeClass('t330__body_popupshowed');
  $('.t330').removeClass('t330__popup_show');
  $('.t330__mainblock').click(function( event ) {
    event.stopPropagation();
  });
}

function t330_resizePopup(recid){
  var el = $("#rec"+recid);
  var div = el.find(".t330__mainblock").height();
  var win = $(window).height() - 170;
  var popup = el.find(".t330__content");
  if (div > win ) {
    popup.addClass('t330__content_static');
  }
  else {
    popup.removeClass('t330__content_static');
  }
}

function t330_initPopup(recid){
  var el=$('#rec'+recid).find('.t330');
  var hook=el.attr('data-tooltip-hook');
  if(hook!==''){
      var obj = $('a[href="'+hook+'"]');
      obj.click(function(e){
        t330_showPopup(recid);
        t330_resizePopup(recid);
        e.preventDefault();
      });
  }
} 
function t341_showCaptions(recid){
  var el=$("#t-carousel"+recid);
  var caption = el.find('.item:nth-child(1) .t-carousel__caption-inside');
  var captioncontainer = el.find('.t-carousel__caption__container');
  captioncontainer.html(caption.html());
  caption.css('display','none');

  $("#t-carousel"+recid).on('slide.bs.carousel', function(evt) {
    var el=$("#t-carousel"+recid);
    var caption = el.find('.item:nth-child(' + ($(evt.relatedTarget).index()+1) + ') .t-carousel__caption-inside');
    var captioncontainer = el.find('.t-carousel__caption__container');
    captioncontainer.html(caption.html());
    caption.css('display','none');
  });
}

function t341_checkSize(recid){
  var el=$("#rec"+recid);
  var containerinside = el.find(".t-carousel__arrows__container_inside");
  var containeroutside = el.find(".t-carousel__arrows__container_outside");
  var inner = el.find(".t-carousel__inner");
  var arrowleft = el.find(".t-carousel__arrow_left");
  var arrowright = el.find(".t-carousel__arrow_right");
  containeroutside.css({'max-width':(arrowleft.width()+arrowright.width()+inner.width()+ 60 +'px')});
  containerinside.css({'max-width':(inner.width()+'px')});

  var sizer = el.find('.t-carousel__height');
  var height = sizer.height();
  var width = sizer.width();
  if (width==0) {
    var width = $(window).width();
  }
  var ratio = width/height;
  var gallerywrapper = el.find(".t-carousel__checksize");
  var gallerywidth = gallerywrapper.width();

  if (height != $(window).height()) {
    gallerywrapper.css({'height':((gallerywidth/ratio)+'px')});
  }
} 
function t366_showPopup(recid){
  var el=$('#rec'+recid).find('.t366');
  $('body').addClass('t366__body_popupshowed');
  el.addClass('t366__popup_show');
  el.find('.t366__close, .t366__bg, .t366__closer, a[href*=#]:not([href=#],.carousel-control,.t-carousel__control)').click(function(e){
    t366_closePopup();
  });
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
     t366_closePopup();
    }
  });
}

function t366_closePopup(){
  $('body').removeClass('t366__body_popupshowed');
  $('.t366').removeClass('t366__popup_show');
}

function t366_resizePopup(recid){
  var el = $("#rec"+recid);
  var div = el.find(".t366__mainblock").height();
  var win = $(window).height() - 170;
  var popup = el.find(".t366__content");
  if (div > win ) {
    popup.addClass('t366__content_static');
  }
  else {
    popup.removeClass('t366__content_static');
  }
}

function t366_initPopup(recid){
  var el=$('#rec'+recid).find('.t366');
  var hook=el.attr('data-tooltip-hook');
  if(hook!==''){
      var obj = $('a[href="'+hook+'"]');
      obj.click(function(e){
        t366_closePopup();
        t366_showPopup(recid);
        t366_resizePopup(recid);
        t366_resizeGallery(recid);
        e.preventDefault();
      });
  }
}

function t366_resizeGallery(recid){
  var el=$("#rec"+recid);
  var element = el.find('.t-carousel__checksize');
  var sizer = el.find('.t-carousel__height');
  if (window.matchMedia('(max-width: 800px)').matches) {
    var ratio = 0.9;
    element.height(sizer.height() * ratio);
  }
  if (window.matchMedia('(max-width: 700px)').matches) {
    var ratio = 0.8;
    element.height(sizer.height() * ratio);
  }
  if (window.matchMedia('(max-width: 600px)').matches) {
    var ratio = 0.7;
    element.height(sizer.height() * ratio);
  }
  if (window.matchMedia('(max-width: 500px)').matches) {
    var ratio = 0.6;
    element.height(sizer.height() * ratio);
  }
  if (window.matchMedia('(max-width: 400px)').matches) {
    var ratio = 0.5;
    element.height(sizer.height() * ratio);
  }
  if (window.matchMedia('(min-width: 800px)').matches) {
    element.height(sizer.height());
  }
} 
function t409_unifyHeights(recid) {
  if($(window).width()>=960){
    var el = $("#rec"+recid);
    var imgwidth = el.find(".t409__img").width();
    var imgwrapperwidth = el.find(".t409__imgwrapper").css("max-width");
    var imgwrapperwidthpx = parseInt(imgwrapperwidth, 10);
    var margin = imgwrapperwidthpx - imgwidth;
    el.find(".t409__img").css("margin-left", margin);
  }
}
 
function t412_unifyHeights(recid) {
    $('#rec'+recid+' .t412 .t-container').each(function() {
        var highestBox2 = 0;
        $('.t412__descr', this).each(function(){
            if($(this).height() > highestBox2)highestBox2 = $(this).height(); 
        });  
        if($(window).width()>=960 && $(this).is(':visible')){
        	$('.t412__descr',this).css('height', highestBox2); 
        }else{
	        $('.t412__descr',this).css('height', "auto");    
        }
    });
    $('#rec'+recid+' .t412 .t-container').each(function() {
        var highestBox3 = 0;
        $('.t412__title', this).each(function(){
            if($(this).height() > highestBox3)highestBox3 = $(this).height(); 
        });  
        if($(window).width()>=960 && $(this).is(':visible')){
        	$('.t412__title',this).css('height', highestBox3); 
        }else{
	        $('.t412__title',this).css('height', "auto");    
        }
    });
    $('#rec'+recid+' .t412 .t-container').each(function() {
        var highestBox = 0;
        $('.t412__wrapper', this).each(function(){
            if($(this).height() > highestBox)highestBox = $(this).height();
        });  
        if($(window).width()>=960 && $(this).is(':visible')){
        	$('.t412__wrapper',this).css('height', highestBox); 
        }else{
	        $('.t412__wrapper',this).css('height', "auto");    
        }
    });
} 
function t425_unifyHeights(recid) {       	
    $('#rec'+recid+' .t425 .t-container').each(function() {
        var t425__highestBox = 0;
        $('.t425__col', this).each(function(){						
			var t425__curcol=$(this);	
			var t425__curcolchild=t425__curcol.find('.t425__col-wrapper');
			if(t425__curcol.height() < t425__curcolchild.height())t425__curcol.height(t425__curcolchild.height());
            if(t425__curcol.height() > t425__highestBox)t425__highestBox = t425__curcol.height();			
        });  
        if($(window).width()>=960){
        	$('.t425__col',this).css('height', t425__highestBox); 
        }else{
	        $('.t425__col',this).css('height', "auto");    
        }
    });
}; 
function t446_setLogoPadding(recid){
	if($(window).width()>980){			  
        var t446__menu = $('#rec'+recid+' .t446');
        var t446__logo=t446__menu.find('.t446__logowrapper');	  
        var t446__leftpart=t446__menu.find('.t446__leftwrapper');
        var t446__rightpart=t446__menu.find('.t446__rightwrapper');
        t446__leftpart.css("padding-right",t446__logo.width()/2+50);
        t446__rightpart.css("padding-left",t446__logo.width()/2+50);			        
	}
}

function t446_checkOverflow(recid, menuheight){    
  var t446__menu = $('#rec'+recid+' .t446');
  var t446__rightwr=t446__menu.find('.t446__rightwrapper');	  
  var t446__rightmenuwr=t446__rightwr.find('.t446__rightmenuwrapper');
  var t446__rightadditionalwr=t446__rightwr.find('.t446__additionalwrapper');
  var t446__burgeroverflow=t446__rightwr.find('.t446__burgerwrapper_overflow');  
  var t446__burgerwithoutoverflow=t446__rightwr.find('.t446__burgerwrapper_withoutoverflow');      

  if (menuheight>0) {var t446__height = menuheight;} else {var t446__height = 80;}  

  if($(window).width()>980 && (t446__rightmenuwr.width() + t446__rightadditionalwr.width()) > t446__rightwr.width()){    	  	  	  	  	  	  
		t446__menu.css("height", t446__height*2);
		t446__rightadditionalwr.css("float","right");

		t446__burgeroverflow.css("display","table-cell");
		t446__burgerwithoutoverflow.css("display","none");				
  } else {
		if(t446__menu.height()>t446__height) {t446__menu.css("height",t446__height);}
		if(t446__rightadditionalwr.css("float")=="right") {t446__rightadditionalwr.css("float","none");}

		t446__burgeroverflow.css("display","none");
		t446__burgerwithoutoverflow.css("display","table-cell");		
  }
}

function t446_highlight(){
  var url=window.location.href;
  var pathname=window.location.pathname;
  if(url.substr(url.length - 1) == "/"){ url = url.slice(0,-1); }
  if(pathname.substr(pathname.length - 1) == "/"){ pathname = pathname.slice(0,-1); }
  if(pathname.charAt(0) == "/"){ pathname = pathname.slice(1); }
  if(pathname == ""){ pathname = "/"; }
  $(".t446__list_item a[href='"+url+"']").addClass("t-active");
  $(".t446__list_item a[href='"+url+"/']").addClass("t-active");
  $(".t446__list_item a[href='"+pathname+"']").addClass("t-active");
  $(".t446__list_item a[href='/"+pathname+"']").addClass("t-active");
  $(".t446__list_item a[href='"+pathname+"/']").addClass("t-active");
  $(".t446__list_item a[href='/"+pathname+"/']").addClass("t-active");
}

function t446_setPath(){
}

function t446_setBg(recid){
  var window_width=$(window).width();
  if(window_width>980){
    $(".t446").each(function() {
      var el=$(this);
      if(el.attr('data-bgcolor-setbyscript')=="yes"){
        var bgcolor=el.attr("data-bgcolor-rgba");
        el.css("background-color",bgcolor);
      }
      });
      }else{
        $(".t446").each(function() {
          var el=$(this);
          var bgcolor=el.attr("data-bgcolor-hex");
          el.css("background-color",bgcolor);
          el.attr("data-bgcolor-setbyscript","yes");
      });
  }
}

function t446_appearMenu(recid) {
      var window_width=$(window).width();
      if(window_width>980){
           $(".t446").each(function() {
                  var el=$(this);
                  var appearoffset=el.attr("data-appearoffset");
                  if(appearoffset!=""){
                          if(appearoffset.indexOf('vh') > -1){
                              appearoffset = Math.floor((window.innerHeight * (parseInt(appearoffset) / 100)));
                          }

                          appearoffset=parseInt(appearoffset, 10);

                          if ($(window).scrollTop() >= appearoffset) {
                            if(el.css('visibility') == 'hidden'){
                                el.finish();
                                el.css("top","-50px");
                                el.css("visibility","visible");
                                el.animate({"opacity": "1","top": "0px"}, 200,function() {
                                });
                            }
                          }else{
                            el.stop();
                            el.css("visibility","hidden");
                          }
                  }
           });
      }

}

function t446_changebgopacitymenu(recid) {
  var window_width=$(window).width();
  if(window_width>980){
    $(".t446").each(function() {
      var el=$(this);
      var bgcolor=el.attr("data-bgcolor-rgba");
      var bgcolor_afterscroll=el.attr("data-bgcolor-rgba-afterscroll");
      var bgopacityone=el.attr("data-bgopacity");
      var bgopacitytwo=el.attr("data-bgopacity-two");
      var menushadow=el.attr("data-menushadow");
      if(menushadow=='100'){
        var menushadowvalue=menushadow;
      }else{
        var menushadowvalue='0.'+menushadow;
      }
      if ($(window).scrollTop() > 20) {
        el.css("background-color",bgcolor_afterscroll);
        if(bgopacitytwo=='0' || menushadow==' '){
          el.css("box-shadow","none");
        }else{
          el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+ menushadowvalue +")");
        }
      }else{
        el.css("background-color",bgcolor);
        if(bgopacityone=='0.0' || menushadow==' '){
          el.css("box-shadow","none");
        }else{
          el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+ menushadowvalue +")");
        }
      }
    });
  }
}

function t446_createMobileMenu(recid) {
  var window_width=$(window).width();
  var el=$("#rec"+recid);
  var menu = el.find(".t446");
  var burger = el.find(".t446__mobile");
  if(980>window_width){
    burger.click(function(e){
      menu.fadeToggle(300);
      $(this).toggleClass("t446_opened");
    });
  }
}