{extends  file='main.tpl'}

{block name="content"}
    <style>
        .padding-medium {
             padding-top: 2em;
             padding-bottom: 2em;
        }
    </style>


    <section class="hero-section position-relative bg-light-blue padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-dark">Blog</h1>
                        <div class="breadcrumbs">
                            <span class="item">
                              <a href="/">Главная страница </a>
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


                            {include file="partials/sidebar.tpl"}


                        </div>
                    </div>
                </aside>


                <main class="col-md-9">
                    <div class="row">

                        {foreach $categoriesWithPosts as $item}

                            <h2>{$item.category.name}</h2>

                            <div class="row mb-4" data-category-row="{$item.category.id}">
                                {foreach $item.posts as $post}
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <div class="card border-none">
                                            <div class="card-image">
                                                <img src="images/post-{$post.image}.jpg" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="card-body text-uppercase">
                                            <h3 class="card-title">{$post.title}</h3>
                                            <div class="card-meta text-muted">
                                                <span class="meta-date">{$post.created_at}</span>
                                            </div>
                                            <p>{$item.category.description}</p>
                                            <a class="link" href="/post/{$post.slug}">Read More</a>
                                        </div>

                                    </div>
                                {/foreach}
                            </div>

                            <div class="mb-5">
                                <button class="btn btn-primary show-more-btn" data-category-id="{$item.category.id}">
                                    View All Articles
                                </button>
                            </div>

                        {/foreach}


                    </div>

                </main>
            </div>
        </div>
    </section>




{/block}