<?php include get_theme_file_path('includes/tools.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header class="content-box--flex-col header">
        <div class="container container--border-bottom container--primary-nav">
            <nav class="nav nav--primary">
                <div class="nav__section nav__section--90deg">
                    <button class="action action--nav-menu">|||</button>
                </div>
                <div class="nav__logo-container">
                    <a href=""><img class="nav__logo" src="https://themagnoliapost-com.local/wp-content/uploads/2026/09/full-logo.svg" alt="" class="logo__img" /></a>
                </div>
                <ul class="menu menu--nav">
                    <li>
                        <a class="menu__item" href="/categories/news">News</a>
                    </li>
                    <li>
                        <span class="menu__item" href="">Communities<span style="display: inline-block; transform: rotate(180deg);">^</span></span>
                        <ul class="menu menu__dropdown">
                            <?php 
                                $terms = get_terms( array(
                                        'taxonomy' => 'community',
                                        'hide_empty' => false
                                    ) 
                                );

                                foreach ($terms as $term) {
                                    echo '<li><a href="' . esc_attr( get_term_link( $term ) ) . '" class="menu__item">' . $term->name . '</a></li>';
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a class="menu__item" href="/videos">Videos</a>
                    </li>
                    <li>
                        <a class="menu__item" href="/about">About</a>
                    </li>
                </ul>
                <div class="spacer"></div>
                <div class="nav__section">
                    <button class="action action--nav-newsletter">Newsletter</button>
                </div>
            </nav>
        </div>
        <div class="container container--border-bottom container--subnav">
            <nav class="nav nav--subnav">
                <ul class="menu menu--subnav">
                    <?php 
                        $categories = get_categories();
                        if ( !$categories ) {
                            return;
                        }

                        foreach ($categories as $category) {
                            echo '<li><a href="' . get_category_link( $category ) . '" class="menu__item menu__title--subnav">' . $category->name . '</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    
