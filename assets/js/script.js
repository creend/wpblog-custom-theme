/*jshint jquery:true */
/*global $:true */

var $ = jQuery.noConflict();

$(document).ready(function ($) {
  'use strict';

  /*-------------------------------------------------*/
  /* =  portfolio isotope
	/*-------------------------------------------------*/

  var winDow = $(window);
  // Needed variables
  var $container = $('.blog-box, .portfolio-box');

  const socialMediaLabels = document.querySelectorAll(
    '.social-icons > li > a > span'
  );

  socialMediaLabels.forEach((socialMediaLabel) => {
    socialMediaLabel.innerHTML = '';
  });

  try {
    $container.imagesLoaded(function () {
      $container.show();
      $container.isotope({
        layoutMode: 'masonry',
        animationOptions: {
          duration: 750,
          easing: 'linear',
        },
      });
    });
  } catch (err) {}

  winDow.bind('resize', function () {
    try {
      $container.isotope({
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false,
        },
      });
    } catch (err) {}
    return false;
  });

  /*-------------------------------------------------*/
  /* =  preloader function
	/*-------------------------------------------------*/
  var body = $('body');
  body.addClass('active');

  winDow.load(function () {
    var mainDiv = $('#container'),
      preloader = $('.preloader');

    preloader.fadeOut(400, function () {
      mainDiv.delay(400).addClass('active');
    });
  });

  /*-------------------------------------------------*/
  /* =  flexslider
	/*-------------------------------------------------*/
  try {
    var SliderPost = $('.flexslider');

    SliderPost.flexslider({
      animation: 'fade',
      slideshowSpeed: 4000,
    });
  } catch (err) {}

  /*-------------------------------------------------*/
  /* =  header height fix
	/*-------------------------------------------------*/
  var content = $('#content');
  content.imagesLoaded(function () {
    var bodyHeight = $(window).outerHeight(),
      containerHeight = $('.inner-content').outerHeight(),
      headerHeight = $('header');

    if (bodyHeight > containerHeight) {
      headerHeight.css('height', bodyHeight);
    } else {
      headerHeight.css('height', containerHeight);
    }
  });

  winDow.bind('resize', function () {
    var bodyHeight = $(window).outerHeight(),
      containerHeight = $('.inner-content').outerHeight(),
      headerHeight = $('header');

    if (bodyHeight > containerHeight) {
      headerHeight.css('height', bodyHeight);
    } else {
      headerHeight.css('height', containerHeight);
    }
  });

  /* ---------------------------------------------------------------------- */
  /*	nice scroll
	/* ---------------------------------------------------------------------- */

  try {
    var HTMLcontainer = $('html');
    HTMLcontainer.niceScroll();
  } catch (err) {}

  /* ---------------------------------------------------------------------- */
  /*	project hover effects
	/* ---------------------------------------------------------------------- */

  try {
    var projectPost = $('.project-post ');
    projectPost.each(function () {
      $(this).hoverdir();
    });
  } catch (err) {}

  /* ---------------------------------------------------------------------- */
  /*	Contact Map
	/* ---------------------------------------------------------------------- */
  var contact = { lat: '51.51152', lon: '-0.104198' }; //Change a map coordinate here!

  try {
    var mapContainer = $('#map');
    mapContainer.gmap3(
      {
        action: 'addMarker',
        latLng: [contact.lat, contact.lon],
        map: {
          center: [contact.lat, contact.lon],
          zoom: 14,
        },
      },
      { action: 'setOptions', args: [{ scrollwheel: true }] }
    );
  } catch (err) {}

  /* ---------------------------------------------------------------------- */
  /*	magnific-popup
	/* ---------------------------------------------------------------------- */

  try {
    // Example with multiple objects
    var ZoomImage = $('.zoom, .zoom-image');
    ZoomImage.magnificPopup({
      type: 'image',
    });
  } catch (err) {}

  /*-------------------------------------------------*/
  /* =  Testimonial
	/*-------------------------------------------------*/
  try {
    var testimUl = $('.testimonial ul');

    testimUl.quovolver({
      transitionSpeed: 300,
      autoPlay: true,
    });
  } catch (err) {}

  /* ---------------------------------------------------------------------- */
  /*	Tabs
	/* ---------------------------------------------------------------------- */
  var clickTab = $('.tab-links li a');

  clickTab.on('click', function (e) {
    e.preventDefault();

    var $this = $(this),
      hisIndex = $this.parent('li').index(),
      tabCont = $('.tab-content'),
      tabContIndex = $('.tab-content:eq(' + hisIndex + ')');

    if (!$this.hasClass('active')) {
      clickTab.removeClass('active');
      $this.addClass('active');

      tabCont.slideUp(400);
      tabCont.removeClass('active');
      tabContIndex.delay(400).slideDown(400);
      tabContIndex.addClass('active');
    }
  });

  /*-------------------------------------------------*/
  /* = skills animate
	/*-------------------------------------------------*/

  try {
    var animateElement = $('.meter > span');
    animateElement.each(function () {
      $(this)
        .data('origWidth', $(this).width())
        .width(0)
        .animate(
          {
            width: $(this).data('origWidth'),
          },
          1200
        );
    });
  } catch (err) {}

  /* ---------------------------------------------------------------------- */
  /*	menu responsive
	/* ---------------------------------------------------------------------- */
  var menuClick = $('a.elemadded'),
    navbarVertical = $('.menu-box');

  menuClick.on('click', function (e) {
    e.preventDefault();

    if (navbarVertical.hasClass('active')) {
      navbarVertical.slideUp(300).removeClass('active');
    } else {
      navbarVertical.slideDown(300).addClass('active');
    }
  });

  winDow.bind('resize', function () {
    if (winDow.width() > 768) {
      navbarVertical.slideDown(300).removeClass('active');
    } else {
      navbarVertical.slideUp(300).removeClass('active');
    }
  });

  /* ---------------------------------------------------------------------- */
  /*	Contact Form
	/* ---------------------------------------------------------------------- */

  var submitContact = $('#submit_contact'),
    message = $('#msg');

  submitContact.on('click', function (e) {
    e.preventDefault();

    var $this = $(this);

    $.ajax({
      type: 'POST',
      url: 'contact.php',
      dataType: 'json',
      cache: false,
      data: $('#contact-form').serialize(),
      success: function (data) {
        if (data.info !== 'error') {
          $this
            .parents('form')
            .find('input[type=text],textarea,select')
            .filter(':visible')
            .val('');
          message
            .hide()
            .removeClass('success')
            .removeClass('error')
            .addClass('success')
            .html(data.msg)
            .fadeIn('slow')
            .delay(5000)
            .fadeOut('slow');
        } else {
          message
            .hide()
            .removeClass('success')
            .removeClass('error')
            .addClass('error')
            .html(data.msg)
            .fadeIn('slow')
            .delay(5000)
            .fadeOut('slow');
        }
      },
    });
  });
});
