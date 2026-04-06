document.addEventListener('DOMContentLoaded', function() {

    document.querySelectorAll('.show-more-btn').forEach(function(button) {
        button.addEventListener('click', function() {

            const categoryId = this.dataset.categoryId;
            const btn = this;

            //
            const row = document.querySelector(`[data-category-row="${categoryId}"]`);



            if (!row) {
                console.error('Row not found for category', categoryId);
                return;
            }

            fetch(`/ajax/category-posts?category_id=${categoryId}`)
                .then(res => res.json())
                .then(posts => {


                    // очищаем старые посты
                    row.innerHTML = '';

                    posts.forEach(post => {
                        const col = document.createElement('div');
                        col.classList.add('col-lg-4', 'col-md-6', 'mb-4');

                        col.innerHTML = `
                            <div class="card border-none">
                                <div class="card-image">
                                    <img src="images/post-${post.image}.jpg" class="img-fluid">
                                </div>
                            </div>
                            <div class="card-body text-uppercase">
                                <h3 class="card-title">${post.title}</h3>
                                <div class="card-meta text-muted">
                                    <span class="meta-date">${post.created_at}</span>
                                </div>
                                <a class="link" href="/post/${post.slug}">Read More</a>
                            </div>
                        `;
                        row.appendChild(col);
                    });




                    btn.style.display = 'none';
                })
                .catch(err => console.error(err));

        });
    });

});