$(".login__header").click(function(){
   $(".register").hide();
   $(".login").show();
   $(".login__header").removeClass("passive");
   $(".register__header").removeClass("active");
   $(".login__header").addClass('active');
   $(".register__header").addClass('passive');
   $(".register__button").hide();
   $(".login__button").show();
});
$(".register__header").click(function(){
   $(".register").show();
   $(".login").hide();
   $(".login__header").removeClass("active");
   $(".register__header").removeClass("passive");
   $(".login__header").addClass('passive');
   $(".register__header").addClass('active');
   $(".register__button").show();
   $(".login__button").hide();
});

	
