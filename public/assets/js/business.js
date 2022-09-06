$(document).ready(function(){
   $(".b2b-container").hide();
   $(".bbc-container").hide();   
});
 

$("#b2b_show").click(function(){
  $(".b2c-container").hide(200);
  $(".bbc-container").hide(200);
  $(".b2b-container").show(500);
 
});

$("#b2c_show").click(function(){  
  $(".b2b-container").hide(200);
  $(".bbc-container").hide(200);
  $(".b2c-container").show(500);
});


$("#bbc_show").click(function(){
  $(".b2c-container").hide(200);
  $(".b2b-container").hide(200);
  $(".bbc-container").show(500);
});
