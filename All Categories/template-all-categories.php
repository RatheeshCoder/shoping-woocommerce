<?php
/*
 * Template Name: All Categories
 */

 get_template_part("header1");

// Get all product categories
$product_categories = get_terms( array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
) );

// Loop through categories
if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
    foreach ( $product_categories as $category ) {
        $category_slug = $category->slug;
        $category_link = get_permalink( $page_id ) . $category_slug;
        echo '<h2><a href="' . esc_url( $category_link ) . '">' . esc_html( $category->name ) . '</a></h2>';

        // Query products for the current category
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => $category_slug,
                ),
            ),
        );

        $products = new WP_Query( $args );

        if ( $products->have_posts() ) {
            echo '<ul>';
            while ( $products->have_posts() ) {
                $products->the_post();
                echo '<li><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
        } else {
            echo 'No products found.';
        }

        wp_reset_postdata();
    }
} else {
    echo 'No categories found.';
}

get_template_part("footer2");
?>
