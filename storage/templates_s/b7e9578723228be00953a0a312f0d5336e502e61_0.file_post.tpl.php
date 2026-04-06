<?php
/* Smarty version 5.8.0, created on 2026-04-05 23:50:16
  from 'file:blog/post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d2aee8b32ea9_71367184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e9578723228be00953a0a312f0d5336e502e61' => 
    array (
      0 => 'blog/post.tpl',
      1 => 1775415015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/sidebar.tpl' => 1,
  ),
))) {
function content_69d2aee8b32ea9_71367184 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\blog';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_50862888469d2aee8af8b70_05517372', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_50862888469d2aee8af8b70_05517372 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\blog';
?>



    <div class="post-wrap padding-large overflow-hidden">
        <div class="container">
            <div class="row">
                <main class="post-grid">
                    <div class="row">
                        <h1 style="text-align: center" class="post-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h1>
                        <aside class="col-md-3">
                            <?php $_smarty_tpl->renderSubTemplate("file:partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        </aside>
                        <div class="col-md-9">
                            <article class="post-item mt-5">
                                <div class="post-content">


                                    <div class="hero-image col-lg-12 mt-5">
                                        <img src="/images/post-<?php echo $_smarty_tpl->getValue('post')['image'];?>
.jpg" alt="single-post" class="img-fluid">
                                    </div>
                                    <div class="post-description review-item padding-medium">


                                        <blockquote>
                                            <?php echo $_smarty_tpl->getValue('post')['description'];?>

                                        </blockquote>

                                    </div>
                                    <div class="post-meta text-uppercase">
                                        <span class="post-category"><?php echo $_smarty_tpl->getValue('post')['created_at'];?>
 </span> <span class="meta-date"></span>
                                        <p><strong>Просмотры:</strong> <?php echo $_smarty_tpl->getValue('post')['views'];?>
</p>
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
                                        <h2 class="display-7 text-dark text-uppercase">Похожие статьи</h2>
                                        <div class="btn-right">
                                            <a href="#" class="btn btn-medium btn-normal text-uppercase"></a>
                                        </div>
                                    </div>
                                    <div class="post-grid d-flex flex-wrap ">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('relatedPosts'), 'related');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('related')->value) {
$foreach0DoElse = false;
?>

                                            <div class="col-lg-4 col-sm-12 pe-3">
                                                <div class="card border-none">
                                                    <div class="card-image">
                                                        <img src="/images/post-<?php echo $_smarty_tpl->getValue('related')['image'];?>
.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="card-body text-uppercase">
                                                    <div class="card-meta text-muted">
                                                        <span class="meta-date"><?php echo $_smarty_tpl->getValue('related')['created_at'];?>
</span>
                                                        <span class="meta-category"></span>
                                                    </div>
                                                    <h3 class="card-title">
                                                        <a href="/post/<?php echo $_smarty_tpl->getValue('related')['slug'];?>
"><?php echo $_smarty_tpl->getValue('related')['title'];?>
</a>
                                                    </h3>
                                                </div>
                                            </div>

                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </main>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
