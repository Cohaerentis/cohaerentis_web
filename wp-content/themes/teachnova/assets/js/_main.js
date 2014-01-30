// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);

// AEA
$(document).ready(function($) {
  $('#yt-video-mosaic .modal-header button.close').click(function() {
    var $this = $(this);
    var $parent = $this.closest('.modal');
    $parent.find('iframe').each(function() {
      this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    });
  });

  $('.mosaic-item').mouseover(function(e){
    var $this = $(this);
    $this.find('.hide').stop().fadeTo(300, 1.0);
    e.preventDefault();
  });

  $('.mosaic-item').mouseout(function(e){
    var $this = $(this);
    $this.find('.hide').stop().fadeTo(300, 0);
    e.preventDefault();
  });

  // Sample to make text fit to div width
  // $('.article_title').lettering('words').fitText(0.66);});
  // $('.article_title').fitText(0.66);});
});

