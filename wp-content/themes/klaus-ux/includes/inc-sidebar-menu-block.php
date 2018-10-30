<div class="sidebar-menu__wrap">
    <div class="menu-block">
        <h2 class="title-ribbon">Навігація</h2>
        <nav class="sidebar__menu" id="sidebar-nav">
            <?php
            $nav_args = array(
                'theme_location' => 'sidebar_menu',
                'container' => '',
                'depth' => 2
            );
            wp_nav_menu($nav_args);
            ?>
        </nav>
    </div>
</div>