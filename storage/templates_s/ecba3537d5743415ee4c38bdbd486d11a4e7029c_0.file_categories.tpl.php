<?php
/* Smarty version 5.8.0, created on 2026-04-05 23:16:36
  from 'file:blog/categories.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d2a704c78415_48934162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecba3537d5743415ee4c38bdbd486d11a4e7029c' => 
    array (
      0 => 'blog/categories.tpl',
      1 => 1775412982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d2a704c78415_48934162 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\blog';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_90891521569d2a704c24175_59046130', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'main.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_90891521569d2a704c24175_59046130 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\blog';
?>


    <section class="hero-section position-relative bg-light-blue padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-dark"><?php echo $_smarty_tpl->getValue('category')['name'];?>
</h1>
                        <div class="breadcrumbs">
                            <span class="item">
                              <p><?php echo $_smarty_tpl->getValue('category')['description'];?>
</p>
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

                                <h5 class="widget-title text-uppercase">Сортировка</h5>


                                <a href="?sort=date"
                                   style="<?php if ($_smarty_tpl->getValue('sort') == 'date') {?>color:#72AEC8<?php }?>">
                                    По дате |
                                </a>

                                <a href="?sort=views"
                                   style="<?php if ($_smarty_tpl->getValue('sort') == 'views') {?>color:#72AEC8<?php }?>">
                                    По просмотрам
                                </a>

                            </div>

                            <div class="widget sidebar-product-categories mb-5">

                                <h5 class="widget-title text-uppercase">Categories</h5>

                                <ul class="product-categories sidebar-list list-unstyled">

                                    <li class="cat-item">
                                        <a href="/">All</a>
                                    </li>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                                        <li class="cat-item">
                                            <a href="/category/<?php echo $_smarty_tpl->getValue('category')['slug'];?>
">
                                                <?php echo $_smarty_tpl->getValue('category')['name'];?>

                                            </a>
                                        </li>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                </ul>
                            </div>

                        </div>
                    </div>
                </aside>


                <main class="col-md-9">
                    <div class="row">

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post', false, 'k');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>

                            <div class="col-lg-4">

                                <div class="card border-none">
                                    <div class="card-image">
                                        <img src="/images/post-<?php echo $_smarty_tpl->getValue('k')+1;?>
.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="card-body text-uppercase">
                                    <div class="card-meta text-muted">
                                        <span class="meta-date">Дата: <?php echo $_smarty_tpl->getValue('post')['created_at'];?>
</span>
                                        <span class="meta-category">- Gadgets</span>
                                        <small>Просмотры: <?php echo $_smarty_tpl->getValue('post')['views'];?>
</small><br>


                                    </div>
                                    <h3 class="card-title">
                                        <a href="/post/<?php echo $_smarty_tpl->getValue('post')['slug'];?>
"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</a>
                                    </h3>
                                </div>

                            </div>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                    </div>
                    <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                        <h3>Страницы:</h3>

                        <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
                            <a href="#">
                                <svg class="chevron-left pe-3">
                                    <use xlink:href="#chevron-left"></use>
                                </svg>
                            </a>

                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('totalPages')+1 - (1) : 1-($_smarty_tpl->getValue('totalPages'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

                                <a class="page-numbers pe-3" href="?page=<?php echo $_smarty_tpl->getValue('i');?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
">
                                    <?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('currentPage')) {?>
                                        <strong style="color:#000"><?php echo $_smarty_tpl->getValue('i');?>
</strong>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getValue('i');?>

                                    <?php }?>
                                </a>

                            <?php }
}
?>

                            <a href="#">
                                <svg class="chevron-right ps-3">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </main>
            </div>
        </div>
    </section>




<?php
}
}
/* {/block "content"} */
}
