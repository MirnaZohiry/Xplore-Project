//Animate between register and login
$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});	