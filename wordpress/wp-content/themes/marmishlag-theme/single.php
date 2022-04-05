<?php

$duration = get_post_meta(get_the_ID(), 'marmishlag_recipe_duration')[0];
$comments = get_comments();
get_header();
?>
<?php the_post(); ?>
<div class="row">
    <h1><?= the_title() ?></h1>
</div>
<div class="row">
    <p><?= $duration ?> min.</p>
</div>

<div class="row">
    <div class="col-4">
        <div class="row marmishlag-list">
            <h2 class="marmishlag-list__title">Ingrédients</h2>

            <div class="marmishlag-list__list">
                <?php
                if (get_post_meta(get_the_ID(), 'marmishlag_recipe_ingredients')[0]) {
                    foreach (get_post_meta(get_the_ID(), 'marmishlag_recipe_ingredients')[0] as $ingredient):
                        ?>
                        <div>
                            <hr/>

                            <p>
                                <strong><?= $ingredient['quantity'] . $ingredient['unit'] ?></strong> <?= $ingredient['ingredient'] ?>
                            </p>
                        </div>

                    <?php endforeach;
                }
                ?>
            </div>
        </div>
        <div class="row marmishlag-list">
            <h2 class="marmishlag-list__title">Ustensiles</h2>
            <div class="marmishlag-list__list">
                <?php
                if (get_post_meta(get_the_ID(), 'marmishlag_recipe_ustensils')[0]) {
                    foreach (get_post_meta(get_the_ID(), 'marmishlag_recipe_ustensils')[0] as $ingredient):
                        ?>
                        <div>
                            <hr/>

                            <p>
                                <strong><?= $ingredient['quantity'] ?></strong> <?= $ingredient['ustensil'] ?>
                            </p>
                        </div>
                    <?php endforeach;
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col-8">

        <h2>Préparation</h2>

        <div>
            <?php  the_content()?>
        </div>
        <div>
            <h2>Avis de la communauté</h2>
            <?php
            comments_template();

            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
