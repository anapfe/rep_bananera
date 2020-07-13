window.addEventListener('load', function() {

  var btn = document.querySelector('.menu-hamburger');
  btn.onclick = function() {
    document.querySelector(".menu-items").classList.toggle("show-menu");
    var hamburg = document.querySelector('.menu-hamburger');

    if ( hamburg.innerHTML.includes('<i class="fa fa-times" aria-hidden="true"></i>')) {
      hamburg.innerHTML = '<i class="fa fa-bars" aria-hidden="true"></i>';
    } else {
      hamburg.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
    };
  };

  //scroll to top
  //Get the button
  var backTop = document.querySelector("#backTop");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      backTop.style.display = "block";
    } else {
      backTop.style.display = "none";
    }
  };
  /// When the user clicks on the button, scroll to the top of the document
  backTop.onclick = function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  // scroll to top -end

  //project caption
  var projectCaption = document.querySelectorAll('.project-caption');
  projectCaption.forEach(function(element)
  {
    element.addEventListener('mouseover', function() {
      var parent = element.parentElement;
      var child = parent.children[1];
      child.classList.add('show-caption');
    });
  });

  projectCaption.forEach(function(element)
  {
    element.addEventListener('mouseout', function() {
      element.classList.remove('show-caption');
    });
  });
  //project caption -end

  // current page menu
  try {
    var currentUrl = window.location.href;
    var menuItem = document.querySelectorAll(".menu-item");
    menuItem.forEach(function(element) {
      var child = element.children[0];
      var menuUrl = child.href;
      if (currentUrl === menuUrl) {
        child.classList.add('current-url');
      };
    });
  } catch(error) {
  };
  // current page menu -end




});
