<?php
/* Smarty version 3.1.36, created on 2023-03-12 06:07:03
  from 'D:\WHMCS\whmcs_v8.6.1\templates\twenty-one\includes\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_640d5df70cf8f9_44006956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fab19d2482d583ad1797726a755337a52a48c09a' => 
    array (
      0 => 'D:\\WHMCS\\whmcs_v8.6.1\\templates\\twenty-one\\includes\\breadcrumb.tpl',
      1 => 1669716554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d5df70cf8f9_44006956 (Smarty_Internal_Template $_smarty_tpl) {
?><ol class="breadcrumb">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_3_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <li class="breadcrumb-item<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> aria-current="page"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
        </li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
}
