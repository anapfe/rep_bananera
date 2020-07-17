window.addEventListener('load', function() {

  //hamburguesa
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
  //hamburguesa -end

  //scroll to top
  var backTop = document.querySelector('#backTop');
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      backTop.style.opacity = "0";
      backTop.style.visibility = "hidden";
    } else {
      backTop.style.opacity = "1";
      backTop.style.visibility = "visible";
    }
    prevScrollpos = currentScrollPos;
  }
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
      var menuWord = child.innerHTML;
      if (currentUrl === menuUrl || currentUrl.includes(menuWord) && !currentUrl.includes('es')) {
        child.classList.add('current-url');
      };
    });
  } catch(error) {
  };
  // current page menu -end

  //current page tag
  try {
    var currentUrl = window.location.href;
    var homeUrl = window.location.hostname;
    var tags = document.querySelectorAll('.tag');
    if (currentUrl == 'http://' + homeUrl + ':8000/' || currentUrl == 'http://' + homeUrl + '/' ) {
      // do nosing
    } else {
      tags.forEach(function(element) {
        var tag = element.children[0];
        var tagUrl = tag.href;
        if (currentUrl === tagUrl) {
          tag.classList.add('tag-selected');
        } else {
          // tag.classList.add('tag-not-selected');
        };
      });
    };
  } catch (error) {

  };
  //current page tag -end

});
