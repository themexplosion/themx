<?php get_header(); ?>
    <main id="error-page" class="main-404">
        <section class="content-404">
            <header class="page-header">
                <h1 class="page-title">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themx' ); ?>
                </h1>
            </header>

            <div class="page-content">
                <p class="error-message">
					<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try  a search?', 'themx' ); ?>
                </p>

                <div class="search-form-404">
					<?php get_search_form(); ?>
                </div>

                <div class="home-button">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go Back Home</a>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
