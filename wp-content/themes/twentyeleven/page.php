<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

    <div id="content" role="main">

<?php while (have_posts()) : the_post();

    $pagename = strtolower(get_the_title());
    $id = get_the_ID();
    $page = get_page($id);

        /**
         * Work Select Template
         *
         * ======================================================= */
    if ($pagename == 'work'):

        $category = get_category_by_slug('work');
        $posts = get_posts(array(
            'category'        => $category->term_id,
            'orderby'         => 'post_date',
            'order'           => 'ASC',
            'numberposts'     => 500,
            'offset'          => 0
        ));
?>

        <ul id="work">
            <?php foreach ($posts as $post): ?>
                <li class="row" style="background: url('<?php echo get_project_thumbnail($post->ID) ?>') center center;">
                    <a href="<?php echo site_url() ?>/<?php echo $post->post_name ?>">
                        <img class="row" src="<?php echo get_project_thumbnail($post->ID) ?>" />
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

    <?php elseif ($pagename == 'home') :

        /**
         * Home Template
         *
         * ======================================================= */

        $galleries = nggdb::search_for_galleries('Home');
        $galleries = current($galleries);

        $gallery = nggdb::get_gallery($galleries->gid, 'pid', 'DESC');
    ?>
        <div id="slideshow" class="ss">
            <ul>
            <?php foreach ($gallery as $i => $gallery_item) : ?>
                <li data-index="<?php echo $i ?>" style="background: url('<?php echo $gallery_item->imageURL ?>') center center no-repeat;">
                    <p class="caption"><a href="<?php echo $gallery_item->description ?>"><?php echo $gallery_item->alttext ?></a></p>
                </li>
            <?php endforeach ?>
            <?php foreach ($gallery as $i => $gallery_item) : ?>
                <li data-index="<?php echo $i ?>" style="background: url('<?php echo $gallery_item->imageURL ?>') center center no-repeat;">
                    <p class="caption"><a href="<?php echo $gallery_item->description ?>"><?php echo $gallery_item->alttext ?></a></p>
                </li>
            <?php endforeach ?>
            </ul>
        </div>​
        <div style="width: 20px;height:360px;"></div>
        <div class="copy">A DIGITAL CREATIVE AGENCY</div>

    <?php else:
        /**
         * Standard Template
         *
         * ======================================================= */
    ?>
        <div class="page-<?php echo $pagename ?>">

            <?php if ($image_url = get_first_image($id)) : ?>
                <div class="image">
                    <img src="<?php echo $image_url ?>" />
                </div>
            <?php endif ?>

            <div class="content">
                <?php echo $page->post_content ?>
            </div>

    	    <?php comments_template( '', true ); ?>
        </div>
    <?php endif ?>
<?php endwhile; ?>

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>