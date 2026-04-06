<?php
/* Smarty version 5.8.0, created on 2026-04-06 11:10:47
  from 'file:blog/category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d34e67eef977_50471529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc741c69911e82586c18dff783237f1ed986721' => 
    array (
      0 => 'blog/category.tpl',
      1 => 1775455838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/sidebar.tpl' => 1,
  ),
))) {
function content_69d34e67eef977_50471529 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\blog';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_41378147869d34e67e6b2a3_77252870', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'main.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_41378147869d34e67e6b2a3_77252870 extends \Smarty\Runtime\Block
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

                                <h5 class="widget-title text-uppercase">Sort By</h5>


                                <a href="?sort=date"
                                   style="<?php if ($_smarty_tpl->getValue('sort') == 'date') {?>color:#72AEC8<?php }?>">
                                    By Date |
                                </a>

                                <a href="?sort=views"
                                   style="<?php if ($_smarty_tpl->getValue('sort') == 'views') {?>color:#72AEC8<?php }?>">
                                    By Views
                                </a>

                            </div>

                            <?php $_smarty_tpl->renderSubTemplate("file:partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                        </div>
                    </div>
                </aside>
                <main class="col-md-9">
                    <div class="row">

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post', false, 'k');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>

                                    <div class="col-lg-4">

                                        <div class="card border-none">
                                            <div class="card-image">
                                                <img src="/images/post-<?php echo $_smarty_tpl->getValue('k')+1;?>
.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="card-body text-uppercase">

                                            <h3 class="card-title">
                                                <?php echo $_smarty_tpl->getValue('post')['title'];?>

                                            </h3>

                                            <div class="card-meta text-muted">
                                                <small>Просмотры: <?php echo $_smarty_tpl->getValue('post')['views'];?>
</small><br>
                                                <span class="meta-date"><?php echo $_smarty_tpl->getValue('post')['created_at'];?>
</span>
                                            </div>

                                            <p>
                                                <?php echo $_smarty_tpl->getValue('post')['description'];?>

                                            </p>

                                            <h3 class="card-title">
                                                <a class="link" href="/post/<?php echo $_smarty_tpl->getValue('post')['slug'];?>
">Details</a>
                                            </h3>
                                        </div>

                                    </div>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                    </div>
                    <nav class="navigation paging-navigation text-center padding-medium" role="navigation">


                        <div class="pagination loop-pagination d-flex justify-content-center align-items-center">


                            <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>
                                <a href="?page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
">
                                    <svg class="chevron-left pe-3">
                                        <use xlink:href="#chevron-left"></use>
                                    </svg>
                                </a>
                            <?php }?>


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


                            <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?>
                                <a href="?page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
">
                                    <svg class="chevron-right ps-3">
                                        <use xlink:href="#chevron-right"></use>
                                    </svg>
                                </a>
                            <?php }?>
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
