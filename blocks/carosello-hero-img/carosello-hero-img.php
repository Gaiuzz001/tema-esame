<?php
/**
 * Template per il blocco Carosello Immagini.
 */

// Recupera il campo gallery. Assicurati che si chiami 'carosello-hero-img'
// e che il tipo di ritorno sia "Array Immagine" (Image Array) nelle impostazioni del campo ACF.
$images = get_field('carosello-hero-img');

// Gestione ID e Classi
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'carosello-hero-img-wrapper'; // Diamo un nome diverso al wrapper esterno
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>
    
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>">
    <?php if ( $images ) : ?>
        <div class="carosello-hero-img">
            <?php foreach ( $images as $image ) : ?>
                <div class="carosello-slide">
                    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                    
                    <?php if ( $image['caption'] ) : ?>
                        <p class="slide-caption"><?php echo esc_html( $image['caption'] ); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <?php if ( is_admin() ) : ?>
            <p style="padding: 1rem; background: #f0f0f0; text-align: center; border: 2px dashed #ccc;">
                Aggiungi immagini al carosello.
            </p>
        <?php endif; ?>
    <?php endif; ?>
</div>