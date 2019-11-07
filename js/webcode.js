// WebCode custom JavaScript and jQuery

/** Scroll back to top button **/

  //Get the button
  var mybutton = document.getElementById("scrollTop");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  // Smooth scroll jQuery
  jQuery(document).ready(function(){
    // Add smooth scrolling to all links
    jQuery("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        jQuery('html, body').animate({
          scrollTop: jQuery(hash).offset().top
        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });

      // Social icons hover effect on everything but the hovered link
      jQuery('.header-social a').mouseover(function () {
          jQuery('.header-social a').not(jQuery(this)).addClass('hover');
      });

      jQuery('.header-social a').mouseout(function () {
          jQuery('.header-social a').not(jQuery(this)).removeClass('hover');
      });

      // Primary menu hover effect on everything but the hovered link
      // jQuery('.header-social a').mouseover(function () {
      //     jQuery('.header-social a').not(jQuery(this)).addClass('hover');
      // });
      //
      // jQuery('.header-social a').mouseout(function () {
      //     jQuery('.header-social a').not(jQuery(this)).removeClass('hover');
      // });

  });

    jQuery(document).ready(function(){

  });

/** Sidebar **/

  function openNav() {
    document.getElementById("sidebar-info").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("sidebar-info").style.width = "0";
  }
