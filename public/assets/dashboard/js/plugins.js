$(window).on('load', function () {
  setTimeout(function () {
    $('body').addClass('loaded');
  }, 200);
});

$(function () {

  "use strict";

  var window_width = $(window).width();


  // Plugin initialization

  // Notification, Profile & Settings Dropdown
  $('.notification-button, .profile-button, .dropdown-settings').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false,
    hover: true,
    gutter: 0,
    belowOrigin: true,
    alignment: 'right',
    stopPropagation: false
  });


  //Main Left Sidebar Menu
  $('.sidebar-collapse').sideNav({
    edge: 'left', // Choose the horizontal origin
  });

  // Overlay Menu (Full screen menu)
  $('.menu-sidebar-collapse').sideNav({
    menuWidth: 240,
    edge: 'left', // Choose the horizontal origin
    //closeOnClick:true, // Set if default menu open is true
    menuOut: false // Set if default menu open is true
  });


  // Perfect Scrollbar
  $('select').not('.disabled').material_select();
  var leftnav = $(".page-topbar").height();
  var leftnavHeight = window.innerHeight - leftnav;
  if (!$('#slide-out.leftside-navigation').hasClass('native-scroll')) {
    $('.leftside-navigation').perfectScrollbar({
      suppressScrollX: true
    });
  }
  var righttnav = $("#chat-out").height();
  $('.rightside-navigation').perfectScrollbar({
    suppressScrollX: true
  });

});