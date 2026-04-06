<?php
/* Smarty version 5.8.0, created on 2026-04-06 12:09:20
  from 'file:home/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d35c206d8a32_91760707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba2be8efff6f1aabe0c2e8fda7474f69af0585e7' => 
    array (
      0 => 'home/index.tpl',
      1 => 1775459360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/sidebar.tpl' => 1,
  ),
))) {
function content_69d35c206d8a32_91760707 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\home';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_32180536269d35c206a7e87_16257029', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'main.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_32180536269d35c206a7e87_16257029 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\home';
?>

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


                            <?php $_smarty_tpl->renderSubTemplate("file:partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


                        </div>
                    </div>
                </aside>


                <main class="col-md-9">
                    <div class="row">

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categoriesWithPosts'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>

                            <h2><?php echo $_smarty_tpl->getValue('item')['category']['name'];?>
</h2>

                            <div class="row mb-4" data-category-row="<?php echo $_smarty_tpl->getValue('item')['category']['id'];?>
">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['posts'], 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <div class="card border-none">
                                            <div class="card-image">
                                                <img src="images/post-<?php echo $_smarty_tpl->getValue('post')['image'];?>
.jpg" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="card-body text-uppercase">
                                            <h3 class="card-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h3>
                                            <div class="card-meta text-muted">
                                                <span class="meta-date"><?php echo $_smarty_tpl->getValue('post')['created_at'];?>
</span>
                                            </div>
                                            <p><?php echo $_smarty_tpl->getValue('item')['category']['description'];?>
</p>
                                            <a class="link" href="/post/<?php echo $_smarty_tpl->getValue('post')['slug'];?>
">Read More</a>
                                        </div>

                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>

                            <div class="mb-5">
                                <button class="btn btn-primary show-more-btn" data-category-id="<?php echo $_smarty_tpl->getValue('item')['category']['id'];?>
">
                                    View All Articles
                                </button>
                            </div>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                    </div>

                </main>
            </div>
        </div>
    </section>




<?php
}
}
/* {/block "content"} */
}
