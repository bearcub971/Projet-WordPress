<?php
// comments.php

if ( post_password_required() ) {
    return; // Ne pas afficher les commentaires si l’article est protégé par mot de passe
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                /* translators: %s = nombre de commentaires */
                esc_html( _nx( '%s commentaire', '%s commentaires', get_comments_number(), 'comments title', 'votre-textdomain' ) ),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 64,
            ) );
            ?>
        </ol>

        <?php
        // Pagination des commentaires si besoin
        the_comments_pagination( array(
            'prev_text' => '&larr; Précédent',
            'next_text' => 'Suivant &rarr;',
        ) );
        ?>

    <?php endif; // have_comments() ?>

    <?php
    // Formulaire de commentaire
    comment_form( array(
        'title_reply'        => 'Laissez un commentaire',
        'label_submit'       => 'Envoyer',
        'comment_notes_after'=> '', // supprime le texte derrière le textarea
    ) );
    ?>

    

</div>
