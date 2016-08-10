<div class="ad970">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php // WP_Query arguments
                    $args = array (
                        'page_id'                => '2122',
                        'post_type'              => 'banners',
                    );

                    // The Query
                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            // do something
                            the_content();
                        }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
