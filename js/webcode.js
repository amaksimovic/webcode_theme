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

/** Sidebar **/

  function openNav() {
    document.getElementById("sidebar-info").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("sidebar-info").style.width = "0";
  }
