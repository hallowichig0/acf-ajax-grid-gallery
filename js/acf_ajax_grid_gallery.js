(function( $ ){
    $(document).ready(function(){
        /* VenoBox LightBox */
        $('.venobox').venobox({
            titleattr: 'data-title',
            numeratio: true,
        });

        // infinite scroll dynamic
        $('.aa-grid-gallery').each(function(){
            var tis_gal = $(this);
            var maincontent = tis_gal.find('.aa-grid-gallery-row');
            var viewMoreButton = tis_gal.find('.aa-grid-gallery-viewmore');

            viewMoreButton.each(function(){

                $(this).on( 'click', function() {

                    var dataindex = $(this).attr('data-index');
                    
                    var $grid_container = maincontent.infiniteScroll({
                        // options
                        path: '.aa-grid-gallery-pagination .next.page-numbers, .aa-grid-gallery-pagination .page-link',
                        append: '.' + dataindex + ' .aa-grid-gallery-list',
                        history: false,
                        loadOnScroll: false,
                        hideNav: '.' + dataindex + ' .aa-grid-gallery-pagination .next.page-numbers, .aa-grid-gallery-pagination .page-link',
                        button: '.' + dataindex + ' .aa-grid-gallery-viewmore',
                        status: '.' + dataindex + ' .aa-grid-gallery-load-status',
                        // debug: true,
                    });

                    $grid_container.on( 'append.infiniteScroll', function( event, response, path, items ) {

                        $(this).each(function(){
                            var tis = $(this);
                            var progmedia = tis.find('.progressiveMedia');
                            var width = progmedia.attr('data-width');
                            var height = progmedia.attr('data-height');
                            var fill = height / width * 100;
                            var placeholderFill = tis.find('.aspectRatioPlaceholder-fill');
                            placeholderFill.attr('style', 'padding-bottom:'+fill+'%;');
                        });

                        /* VenoBox LightBox */
                        $('.venobox').venobox({
                            closeBackground: '#23282d',
                        });
                    });

                    // load next page
                    $grid_container.infiniteScroll('loadNextPage');

                });

            });
        }); 
    });
})( jQuery );