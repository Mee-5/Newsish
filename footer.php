<?php wp_footer(); ?>
<footer class="footer">
    <div class="footer__body page-section flex flex--dt-row flex--mb-col">
        <?php ob_start(); ?>
        <div>
            <div class="nav__logo-container">
                <a href="/"><img class="nav__logo" src="https://themagnoliapost-com.local/wp-content/uploads/2026/09/full-logo.svg" alt="" class="logo__img" /></a>
            </div>
        </div>
        <details>
            <summary>Categories</summary>
            <div>
                <ul>
                    <?php
                        $categories = get_categories();
                        foreach ( $categories as $category ) {
                            echo '<li><a href="' . esc_url( get_category_link( $category ) ) . '"></a>' . $category->name . '</li>';
                        }
                    ?>
                </ul>
            </div>
        </details>
        <details>
            <summary>Series</summary>
            <div>
                <ul>
                    <a href="">The Magnolia Post Spotlight</a>
                </ul>
            </div>
        </details>
        <details>
            <summary>The Magnolia Post</summary>
            <div>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="videos">Videos</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Advertising</a></li>
                </ul>
            </div>
        </details>
    </div>
</footer>
</body>
</html>