<?php
/**
 * Template pour afficher un article avec un style éducatif
 */

get_header(); ?>

<main id="primary" class="site-main" style="max-width: 900px; margin: 2rem auto; padding: 1rem; font-family: sans-serif;">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class("bg-white shadow-md rounded-2xl p-6"); ?> style="background:#fff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        
        <!-- Image mise en avant -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail" style="margin-bottom: 1rem; text-align:center;">
                <?php the_post_thumbnail('large', ['style' => 'border-radius: 12px; max-width: 100%; height: auto;']); ?>
            </div>
        <?php endif; ?>

        <!-- Titre -->
        <header class="entry-header" style="margin-bottom: 1rem;">
            <h1 style="font-size: 2rem; color: #1a365d; margin-bottom: .5rem;"><?php the_title(); ?></h1>
            <p style="color:#555; font-size: .9rem;">
                Publié le <?php echo get_the_date(); ?> · Par <?php the_author(); ?>
            </p>
        </header>

        <!-- Contenu -->
        <div class="entry-content" style="line-height: 1.8; color:#333; font-size: 1.05rem;">
            <?php the_content(); ?>
        </div>

        <!-- Catégories & tags -->
        <footer class="entry-footer" style="margin-top: 2rem; font-size: .9rem; color:#666;">
            <p><strong>Catégories :</strong> <?php the_category(', '); ?></p>
            <p><?php the_tags('<strong>Mots-clés :</strong> ', ', '); ?></p>
        </footer>

        <!-- Navigation articles -->
        <nav class="post-navigation" style="margin-top: 2rem; display: flex; justify-content: space-between;">
            <div class="nav-previous"><?php previous_post_link('← %link'); ?></div>
            <div class="nav-next"><?php next_post_link('%link →'); ?></div>
        </nav>

        <!-- Zone de commentaires -->
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

    </article>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
