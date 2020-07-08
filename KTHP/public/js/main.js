$(document).ready(function(){
	$(".less-sidebar").click(function(){
	    $("#more-product").hide();
	    $(".less-sidebar").hide();
	    $(".more-sidebar").show();
	});
	$(".more-sidebar").click(function(){
	    $("#more-product").show();
	    $(".less-sidebar").show();
	});
});

function searchMobile() {
    var x = document.getElementById("form-search-mobile");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function fastContact() {
    var y = document.getElementById("fast-contact");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}

$(window).on('scroll', function() {		
	if ($(this).scrollTop() > 100) {
		$('.back-to-top').fadeIn();
	} else {
		$('.back-to-top').fadeOut();
	}
});
$(document).ready(function(){
	$('.back-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},300);
		return false;
	});
});

var maxheight = 0;

$('.author-name').each(function () {
    maxheight = ($(this).height() > maxheight ? $(this).height() : maxheight); 
});

$('.author-name').height(maxheight);
