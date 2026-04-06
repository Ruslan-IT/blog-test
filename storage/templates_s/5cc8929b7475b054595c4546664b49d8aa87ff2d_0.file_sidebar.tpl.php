<?php
/* Smarty version 5.8.0, created on 2026-04-06 11:04:45
  from 'file:partials/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d34cfdb37398_46361586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc8929b7475b054595c4546664b49d8aa87ff2d' => 
    array (
      0 => 'partials/sidebar.tpl',
      1 => 1775455484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d34cfdb37398_46361586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\partials';
?><div class="widget sidebar-product-categories mb-5">
    <h5 class="widget-title text-uppercase">Categories</h5>
    <ul class="product-categories sidebar-list list-unstyled">
        <li class="cat-item">
            <a href="/">All Articles</a>
        </li>
        <hr>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
            <li class="cat-item">
                <a href="/category/<?php echo $_smarty_tpl->getValue('cat')['slug'];?>
"
                   class="<?php if ((true && ($_smarty_tpl->hasVariable('category') && null !== ($_smarty_tpl->getValue('category') ?? null))) && $_smarty_tpl->getValue('category')['slug'] == $_smarty_tpl->getValue('cat')['slug']) {?>active<?php }?>">
                    <?php echo $_smarty_tpl->getValue('cat')['name'];?>

                </a>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </ul>
</div><?php }
}
