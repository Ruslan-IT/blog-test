{extends  file='main.tpl'}

{block name="content"}

    <section class="hero-section position-relative bg-light-blue padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-dark">{$category.name}</h1>
                        <div class="breadcrumbs">
                            <span class="item">
                              <p>{$category.description}</p>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="post-grid padding-large">
        <div class="container">

            <div class="row d-flex flex-wrap">
                <aside class="col-md-3">
                    <div class="sidebar">

                        <div class="sidebar-filter pt-5">

                            <div class="widget sidebar-product-categories mb-5">

                                <h5 class="widget-title text-uppercase">Sort By</h5>


                                <a href="?sort=date"
                                   style="{if $sort == 'date'}color:#72AEC8{/if}">
                                    By Date |
                                </a>

                                <a href="?sort=views"
                                   style="{if $sort == 'views'}color:#72AEC8{/if}">
                                    By Views
                                </a>

                            </div>

                            {include file="partials/sidebar.tpl"}

                        </div>
                    </div>
                </aside>
                <main class="col-md-9">
                    <div class="row">

                                {foreach $posts as $k => $post}

                                    <div class="col-lg-4">

                                        <div class="card border-none">
                                            <div class="card-image">
                                                <img src="/images/post-{$k+1}.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card-body text-uppercase">

                                            <h3 class="card-title">
                                                {$post.title}
                                            </h3>

                                            <div class="card-meta text-muted">
                                                <small>Просмотры: {$post.views}</small><br>
                                                <span class="meta-date">{$post.created_at}</span>
                                            </div>

                                            <p>
                                                {$post.description}
                                            </p>

                                            <h3 class="card-title">
                                                <a class="link" href="/post/{$post.slug}">Details</a>
                                            </h3>
                                        </div>

                                    </div>

                                {/foreach}


                    </div>
                    <nav class="navigation paging-navigation text-center padding-medium" role="navigation">


                        <div class="pagination loop-pagination d-flex justify-content-center align-items-center">


                            {if $currentPage > 1}
                                <a href="?page={$currentPage-1}&sort={$sort}">
                                    <svg class="chevron-left pe-3">
                                        <use xlink:href="#chevron-left"></use>
                                    </svg>
                                </a>
                            {/if}


                            {for $i=1 to $totalPages}

                                <a class="page-numbers pe-3" href="?page={$i}&sort={$sort}">
                                    {if $i == $currentPage}
                                        <strong style="color:#000">{$i}</strong>
                                    {else}
                                        {$i}
                                    {/if}
                                </a>

                            {/for}


                            {if $currentPage < $totalPages}
                                <a href="?page={$currentPage+1}&sort={$sort}">
                                    <svg class="chevron-right ps-3">
                                        <use xlink:href="#chevron-right"></use>
                                    </svg>
                                </a>
                            {/if}
                        </div>
                    </nav>
                </main>
            </div>
        </div>
    </section>




{/block}