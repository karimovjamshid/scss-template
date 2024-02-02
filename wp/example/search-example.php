<?php
global $wp_query;
$cur_page = $_GET['paged'] ?? 1;
$posts_per_page = get_option('posts_per_page');
get_header(); ?>

<div class="blue-wrapper top bottom">
    <div class="search__wrapper">
        <h1 class="search__h1">Results for
            “
            <?php echo $_GET['s']; ?>”
        </h1>

        <div class="search__numbers">
            <?php
            if ($wp_query->found_posts) {
                if ($wp_query->found_posts == $posts_per_page || $wp_query->found_posts > $posts_per_page) {
                    echo 'Displaying ' . ($posts_per_page * $cur_page) . ' of ' . $wp_query->found_posts . ' results for "' . $_GET['s'] . '"';
                } else {
                    echo 'Displaying ' . $wp_query->found_posts . ' of ' . $wp_query->found_posts . ' results for "' . $_GET['s'] . '"';
                }
            } else {
                echo 'Sorry, nothing was found.';
            }
            ?>
        </div>

        <div class="search__results">

            <!-- <?php printf(__('Search Results for: %s', ''), '' . get_search_query() . ''); ?> -->
            <?php if (isset($_GET['s']) && $_GET['s'] == ''): ?>
                Please enter keywords..
            <?php else: ?>
                <?php
                $args = array_merge($wp_query->query, array('post_type' => array("post", "page", 'news', 'calf-notes')));
                query_posts($args); ?>
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <div class="search__row">
                            <div class="search__post-type">
                                <?php $currentPostType = get_post_type(get_the_ID());
                                $post_type_obj = get_post_type_object($currentPostType);
                                $post_type_name = $post_type_obj->labels->singular_name;
                                echo $post_type_name;
                                ?>
                            </div>
                            <h3 class="search__heading">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="search__texting">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    Nothing Found
                <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>
</div>





<?php get_footer(); ?>