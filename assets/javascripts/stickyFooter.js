var delay, stickyFooter;

stickyFooter = function() {
  var current, offset;
  $("footer").removeAttr("style");
  if (window.innerHeight !== document.body.offsetHeight) {
    offset = window.innerHeight - document.body.offsetHeight;
    current = parseInt($("footer").css("margin-top"));
    if (current + offset > parseInt($("footer").css("margin-top"))) {
      return $("footer").css({
        "margin-top": (current + offset) + "px"
      });
    }
  }
};

$(window).load(function() {
  return stickyFooter();
});

$(window).resize(function() {
  return delay((function() {
    return stickyFooter();
  }), 500);
});

delay = (function() {
  var timer;
  timer = 0;
  return function(callback, ms) {
    clearTimeout(timer);
    return timer = setTimeout(callback, ms);
  };
})();
