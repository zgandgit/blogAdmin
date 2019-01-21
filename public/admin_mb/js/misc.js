(function($) {
  'use strict';
  $(function() {
    var body = $('body');
    var contentWrapper = $('.content-wrapper');
    var scroller = $('.container-scroller');
    var footer = $('.footer');
    var sidebar = $('.sidebar');

    //Add active class to nav-link based on url dynamically
    //Active class can be hard coded directly in html file also as required
        // var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');//获取最后的地址
        // console.log(current);
        // $('.nav li a', sidebar).each(function() {
        //   var $this = $(this);
        //   if (current === "") {
        //     //for root url
        //     if ($this.attr('href').indexOf("index.html") !== -1) {
        //       $(this).parents('.nav-item').last().addClass('active');
        //       if ($(this).parents('.sub-menu').length) {
        //         $(this).closest('.collapse').addClass('show');
        //         $(this).addClass('active');
        //       }
        //     }
        //   } else {
        //     //for other url
        //     if ($this.attr('href').indexOf(current) !== -1) {
        //       $(this).parents('.nav-item').last().addClass('active');
        //       if ($(this).parents('.sub-menu').length) {
        //         $(this).closest('.collapse').addClass('show');
        //         $(this).addClass('active');
        //       }
        //     }
        //   }
        // })
    //  菜单栏变色
      let navBg = localStorage.getItem('nav-bg');
      let listCode = localStorage.getItem('list-code');
      if(navBg){
          $('.'+navBg).addClass('active');
          if(listCode == navBg){
              $('.'+navBg+' .list-a').removeClass('collapsed');
              $('.'+navBg+' .list-a').attr('aria-expanded',true);
              $('.'+navBg+' .collapse').addClass('show');

          }
      }else{
          localStorage.setItem('nav-bg','nav-a');
          $('.nav-a').addClass('active');
      }


    //Close other submenu in sidebar on opening any

    sidebar.on('show.bs.collapse', '.collapse', function() {
      sidebar.find('.collapse.show').collapse('hide');
    });


    //Change sidebar and content-wrapper height
    applyStyles();

    function applyStyles() {
      //Applying perfect scrollbar
      if (!body.hasClass("rtl")) {
        if ($('.tab-content .tab-pane.scroll-wrapper').length) {
          const settingsPanelScroll = new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
        }
        if ($('.chats').length) {
          const chatsScroll = new PerfectScrollbar('.chats');
        }
      }
    }

    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

    //fullscreen
    $("#fullscreen-button").on("click", function toggleFullScreen() {
      if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
          document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
          document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      }
    })
  });

})(jQuery);

/**
 * 左侧菜单跳转 并赋值给
 * @param url
 */
function urlLink(cls,url){
    localStorage.setItem('nav-bg',cls);
    $('.'+cls).addClass('active');
    $isList = $('.'+cls).find(".collapse").length;
    if($isList > 0){
      //代表这个是一个下拉列表
      localStorage.setItem('list-code',cls);
    }else{
        localStorage.setItem('list-code',null);
    }

    window.location.replace(url);
}
