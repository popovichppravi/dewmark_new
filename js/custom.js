/*BLOCK MENU*/
$(document).ready(function() {
$(".block-item .mini-item:nth-child(1)").animate({backgroundColor: 'rgba(255, 105, 31, 1)'});
$(".block-item .mini-item:nth-child(2)").delay(300).animate({backgroundColor: 'rgba(224, 203, 24, 1)'});
$(".block-item .mini-item:nth-child(3)").delay(500).animate({backgroundColor: 'rgba(60, 171, 80, 1)'});
$(".block-item .mini-item:nth-child(4)").delay(700).animate({backgroundColor: 'rgba(37, 184, 215, 1)'});
$(".block-item .mini-item:nth-child(5)").delay(900).animate({backgroundColor: 'rgba(204, 55, 23, 1)'});
$(".block-item .mini-item:nth-child(6)").delay(1100).animate({backgroundColor: 'rgba(187, 149, 34, 1)'});
$(".block-item .mini-item:nth-child(7)").delay(1300).animate({backgroundColor: 'rgba(77, 51, 139, 1)'});
setTimeout( function(){
    $(".block-item .mini-item").attr("style", "");
  },2000);

$(".block-item.waterproof .middle-item:nth-child(1)").delay(1500).animate({backgroundColor: 'rgba(31, 106, 184, 1)'});
$(".block-item.waterproof .middle-item:nth-child(2)").delay(1700).animate({backgroundColor: 'rgba(0, 79, 130, 1)'});
$(".block-item.waterproof .middle-item:nth-child(3)").delay(1900).animate({backgroundColor: 'rgba(0, 121, 200, 1)'});

setTimeout( function(){
    $(".block-item.waterproof .middle-item").attr("style", "");
  },2600);

$(".block-item.protect  .middle-item:nth-child(1)").delay(2100).animate({backgroundColor: 'rgba(222, 0, 0, 1)'});
$(".block-item.protect  .middle-item:nth-child(2)").delay(2300).animate({backgroundColor: 'rgba(239, 60, 60, 1)'});
$(".block-item.protect  .middle-item:nth-child(3)").delay(2500).animate({backgroundColor: 'rgba(167, 42, 42, 1)'});
setTimeout( function(){
    $(".block-item .mini-item").attr("style", "");
    $(".block-item .middle-item").attr("style", "");
  },3200);
});
/*--//--*/
/*TOP SEARCH*/
$(".menu-search").on("click",function(){
   $(".top-search").slideToggle();
   $(".top-search").toggleClass("active-search");
});
$(".top-filter .close-btn").on("click",function(){
   $(".top-search").slideToggle();
   $(".top-search").toggleClass("active-search");
});
/*--//--*/
$( document ).ready(function() {
  $('.filter-inputs [data-toggle="popover"]').popover({
  	trigger: 'hover'
  });
})
/*OPEN AJAX MODAL*/
$( document ).ready(function() {
  $('.open-ajax-modal').on("click", function(){
      url=$(this).attr("data-remote");
      title=$(this).attr("data-title");
    	$('#ajaxModal .modal-inner').load(url,function(result){
          $("#ajaxModalLabel").html(title);
  	    $('#ajaxModal').modal({show:true});
  	});
  });
});
