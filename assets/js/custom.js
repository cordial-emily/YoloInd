window.onload = function() {

  /* This replaces the @ symbol in the Events Calendar list on the front page with 2 spaces */
  jQuery(document).ready(function(){
  jQuery('li.ecs-event').html(jQuery('li.ecs-event').html().replace("@",",  "));
  jQuery('li.ecs-event').html(jQuery('li.ecs-event').html().replace("@",",  "));
  });

  /* This prints a hello message in the console. (Don't forget to check. :) ) ************************************************/

  function sayHelloInTheConsole() {
      console.log("Hey there!\nThanks for checking my console.\n\nIf you'd like to see some JS I've written, go to: http://cordial-emily.com/js/custom.js. \n\nPlease contact me with questions, comments, and work opportunities. Thanks! \n\nEmail: Cordial.Emily@gmail.com");
  }
  sayHelloInTheConsole();

  /* Keep jQuery versions from fighting */
  jQuery.noConflict();

};
