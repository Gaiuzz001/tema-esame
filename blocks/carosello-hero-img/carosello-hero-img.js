(function ($) {

    /**
     * Funzione riutilizzabile per inizializzare un carosello Slick.
     * @param {jQuery} $carousel - L'elemento jQuery .carosello-hero-img da inizializzare.
     */
    var initializeSlick = function ($carousel) {
        // Se il carosello è già un'istanza slick (importante per l'editor),
        // lo "distrugge" prima di ricrearlo.
        if ($carousel.hasClass('slick-initialized')) {
            $carousel.slick('unslick');
        }

        // Inizializza Slick
        $carousel.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
            // Aggiungi qui altre impostazioni di Slick se necessario
            // ad es. dots: true, arrows: true,
        });
    };

    // 1. Inizializzazione sul FRONTEND
    // Esegui quando il documento è pronto
    $(document).ready(function () {
        // Cerca tutti i caroselli sulla pagina e inizializzali
        $('.carosello-hero-img').each(function () {
            initializeSlick($(this));
        });
    });

    // 2. Inizializzazione nell'EDITOR (Admin)
    // Esegui solo se ACF e i suoi hook esistono
    if (window.acf) {
        // Hook per quando un blocco viene caricato o aggiornato nell'editor
        // Specifica il nome del blocco per essere più efficiente
        window.acf.addAction('render_block_preview/name=acf/carosello-hero-img', function ($block) {
            // $block è il wrapper del blocco. Trova il carosello al suo interno.
            var $carousel = $block.find('.carosello-hero-img');

            // Assicurati che esista prima di provare a inizializzarlo
            if ($carousel.length) {
                initializeSlick($carousel);
            }
        });
    }

})(jQuery);