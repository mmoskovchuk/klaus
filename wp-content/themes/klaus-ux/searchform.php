<form role="search" method="get" id="searchform" class="header__search-form" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" placeholder="Пошук" value="<?php echo get_search_query() ?>" name="s" id="s" class="header__search-text" />
    <input type="submit" id="searchsubmit" class="header__search-submit" value="пошук" />
    <i class="fas fa-search fa-2x"></i>
</form>