// makes the parallax elements
function parallaxIt() {

  // create variables
  var $fwindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // on window scroll event
  $fwindow.on('scroll resize', function() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  });

  // for each of content parallax element
  $('[data-type="content"]').each(function(index, e) {
    var $contentObj = $(this);
    var fgOffset = parseInt($contentObj.offset().top);
    var yPos;
    var speed = ($contentObj.data('speed') || 1);

    $fwindow.on('scroll resize', function() {
      yPos = fgOffset - scrollTop / speed;

      $contentObj.css('top', yPos);
    });
  });

  // for each of background parallax element
  $('[data-type="background"]').each(function() {
    var $backgroundObj = $(this);
    var bgOffset = parseInt($backgroundObj.offset().top);
    var yPos;
    var coords;
    var speed = ($backgroundObj.data('speed') || 0);

    $fwindow.on('scroll resize', function() {
      yPos = -((scrollTop - bgOffset) / speed);
      coords = '50% ' + yPos + 'px';

      $backgroundObj.css({
        backgroundPosition: coords
      });
    });
  });

  // triggers winodw scroll for refresh
  $fwindow.trigger('scroll');
};

parallaxIt();


// Scrolled Navigation Bar
$(function() {
  $(window).scroll(function() {
    if ($(window).scrollTop() >= 200) {
      $('nav').addClass('scrolled');
    } else {
      $('nav').removeClass('scrolled');
    }
  });
});


// Back to Top
var btn = $('#topBack');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});


const captcha = document.querySelector('#recaptcha');

function validateReCaptcha() {
  response = grecaptcha.getResponse();
  response ? msg.textContent = 'checked' : msg.textContent = 'unchecked';
  console.log(response);
}


// Radio Other Show/hiden
function radioShow() {
  $('.other-form').addClass('other-form-show');
}

function customQuery() {
  $('.other-form').removeClass('other-form-show');
}


// Dropdown Hover Animation
$('body').on('mouseenter mouseleave', '.dropdown-hover', function(e) {
  let dropdown = $(e.target).closest('.dropdown-hover');
  dropdown.addClass('show');

  setTimeout(function() {
    dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
  }, 300);
});


$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target).
  prev().
  find("i:last-child").
  toggleClass("fa-minus fa-plus");
});

$(function() {
  // close all pages for this example
  $(".collapse").collapse("hide");
  // check the url hash when we first load the page
  if (window.location.hash != "") {

    if (window.location.hash === "#uniUK") {
      $("#collapseTwo").collapse("hide");
      $("#collapseThree").collapse("hide");
      $("#collapseFour").collapse("hide");
      $("#collapseFive").collapse("hide");
      $("#collapseSix").collapse("hide");
      $("#collapseOne").collapse("show");
    } else if (window.location.hash === "#uniUSA") {
      $("#collapseOne").collapse("hide");
      $("#collapseThree").collapse("hide");
      $("#collapseFour").collapse("hide");
      $("#collapseFive").collapse("hide");
      $("#collapseSix").collapse("hide");
      $("#collapseTwo").collapse("show");
    } else if (window.location.hash === "#uniAustralia") {
      $("#collapseOne").collapse("hide");
      $("#collapseTwo").collapse("hide");
      $("#collapseFour").collapse("hide");
      $("#collapseFive").collapse("hide");
      $("#collapseSix").collapse("hide");
      $("#collapseThree").collapse("show");
    } else if (window.location.hash === "#uniCanada") {
      $("#collapseOne").collapse("hide");
      $("#collapseTwo").collapse("hide");
      $("#collapseThree").collapse("hide");
      $("#collapseFive").collapse("hide");
      $("#collapseSix").collapse("hide");
      $("#collapseFour").collapse("show");
    } else if (window.location.hash === "#uniChina") {
      $("#collapseOne").collapse("hide");
      $("#collapseTwo").collapse("hide");
      $("#collapseThree").collapse("hide");
      $("#collapseFour").collapse("hide");
      $("#collapseSix").collapse("hide");
      $("#collapseFive").collapse("show");
    }
    else if (window.location.hash === "#uniOthers") {
      $("#collapseOne").collapse("hide");
      $("#collapseTwo").collapse("hide");
      $("#collapseThree").collapse("hide");
      $("#collapseFour").collapse("hide");
      $("#collapseFive").collapse("hide");
      $("#collapseSix").collapse("show");
    }
  }

  // attach click event handlers to the links with the class page-link
  $("a.uni-link").on("click", function() {
    var ref = $(this).data("page");

    // show the selected page
    $(ref).collapse("show");
  });

});
