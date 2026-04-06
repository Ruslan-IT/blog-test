<div class="widget sidebar-product-categories mb-5">
    <h5 class="widget-title text-uppercase">Categories</h5>
    <ul class="product-categories sidebar-list list-unstyled">
        <li class="cat-item">
            <a href="/">All Articles</a>
        </li>
        <hr>

        {foreach $categories as $cat}
            <li class="cat-item">
                <a href="/category/{$cat.slug}"
                   class="{if isset($category) && $category.slug == $cat.slug}active{/if}">
                    {$cat.name}
                </a>
            </li>
        {/foreach}

    </ul>
</div>