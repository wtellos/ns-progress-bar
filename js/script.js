(function($) {
  // Your JavaScript code here
  $(document).ready(function() {
      // Get the total height of the webpage
      var totalHeight = $(document).height();
    
      // Get the height of the window
      var windowHeight = $(window).height();
    
      // Bind the scroll event to the window
      $(window).on('scroll', function() {
        // Get the current scroll position
        var scrollPos = $(window).scrollTop();
    
        // Calculate the percentage of the page that has been scrolled
        var scrollPercent = (scrollPos / (totalHeight - windowHeight)) * 100;
    
        // Update the width of the progress bar
        $('#ns--progress').width(scrollPercent + '%');
      });
    });
})(jQuery);