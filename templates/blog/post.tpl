{extends file="main.tpl"}

{block name="content"}


    <div class="post-wrap padding-large overflow-hidden">
        <div class="container">
            <div class="row">
                <main class="post-grid">
                    <div class="row">
                        <h1 style="text-align: center" class="post-title">{$post.title}</h1>
                        <aside class="col-md-3">
                            {include file="partials/sidebar.tpl"}
                        </aside>
                        <div class="col-md-9">
                            <article class="post-item mt-5">
                                <div class="post-content">


                                    <div class="hero-image col-lg-12 mt-5">
                                        <img src="/images/post-{$post.image}.jpg" alt="single-post" class="img-fluid">
                                    </div>
                                    <div class="post-description review-item padding-medium">


                                        <blockquote>
                                            {$post.description}
                                        </blockquote>

                                    </div>
                                    <div class="post-meta text-uppercase">
                                        <span class="post-category">{$post.created_at} </span> <span class="meta-date"></span>
                                        <p><strong>Views:</strong> {$post.views}</p>
                                    </div>

                                </div>
                            </article>
                        </div>





                    </div>
                    <div class="row">
                        <section id="related-posts" class="padding-large">
                            <div class="container">
                                <div class="row">
                                    <div class="display-header d-flex justify-content-between pb-3">
                                        <h2 class="display-7 text-dark text-uppercase">Related Articles</h2>
                                        <div class="btn-right">
                                            <a href="#" class="btn btn-medium btn-normal text-uppercase"></a>
                                        </div>
                                    </div>
                                    <div class="post-grid d-flex flex-wrap ">
                                        {foreach $relatedPosts as $related}

                                            <div class="col-lg-4 col-sm-12 pe-3">
                                                <div class="card border-none">
                                                    <div class="card-image">
                                                        <img src="/images/post-{$related.image}.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="card-body text-uppercase">
                                                    <div class="card-meta text-muted">
                                                        <span class="meta-date">{$related.created_at}</span>
                                                        <span class="meta-category"></span>
                                                    </div>
                                                    <h3 class="card-title">
                                                        <a href="/post/{$related.slug}">{$related.title}</a>
                                                    </h3>
                                                </div>
                                            </div>

                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </main>
            </div>
        </div>
    </div>

{/block}