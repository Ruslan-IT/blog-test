<?php
/* Smarty version 5.8.0, created on 2026-04-04 14:05:29
  from 'file:home/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69d0d459e84576_15048631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f72e0cdfb98fdebb6b0c9f6ff93dc261c6d588b' => 
    array (
      0 => 'home/index.tpl',
      1 => 1775293528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d0d459e84576_15048631 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\home';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_123672856369d0d459e818e6_00686634', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, '../layouts/main.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_123672856369d0d459e818e6_00686634 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OSPanel\\home\\54ts.local\\main\\templates\\home';
?>

    <h2><?php echo $_smarty_tpl->getValue('title');?>
</h2>
    <p>Если ты видишь это, Smarty и layout работают!</p>
<?php
}
}
/* {/block "content"} */
}
