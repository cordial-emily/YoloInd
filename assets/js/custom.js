window.onload = function() {

  /* This is a click event to display the submenu in the main menu */
  $('.dropdown-submenu').click(function(){
    $('dropdown-menu').css('display','block');
    return false;
  });

  /* This prints a hello message in the console. (Don't forget to check. :) ) ************************************************/

  function sayHelloInTheConsole() {
      console.log("Hey there!\nThanks for checking my console.\n\nIf you'd like to see some JS I've written, go to: http://cordial-emily.com/js/custom.js. \n\nPlease contact me with questions, comments, and work opportunities. Thanks! \n\nEmail: Cordial.Emily@gmail.com");
  }
  sayHelloInTheConsole();

  /* Keep jQuery versions from fighting */
  jQuery.noConflict();

};
