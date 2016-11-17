
(function($){
    var $sections = $("section")
      ;
    $('#fullpage').fullpage({
        anchors: $sections.map(function(){ return $(this).data('id'); }).get(),
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: $sections.map(function(){ return $(this).data('name'); }).get(),
        scrollOverflow: true,
        bigSectionsDestination: 'top',
        normalScrollElements: '.scrollTo'
    
        // recordHistory: false,
        // animateAnchor: false
    });

})(jQuery);