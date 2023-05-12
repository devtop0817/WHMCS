<?php
/* Smarty version 3.1.36, created on 2023-03-12 06:07:03
  from 'D:\WHMCS\whmcs_v8.6.1\templates\twenty-one\includes\social-accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_640d5df7511274_06660267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4145c028447f8938e7a7f7b80a51bdea5857ccfa' => 
    array (
      0 => 'D:\\WHMCS\\whmcs_v8.6.1\\templates\\twenty-one\\includes\\social-accounts.tpl',
      1 => 1669716554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d5df7511274_06660267 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['socialAccounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
    <li class="list-inline-item">
        <a class="btn btn-icon mb-1" href="<?php echo $_smarty_tpl->tpl_vars['account']->value->getUrl();?>
" target="_blank">
            <i class="<?php echo $_smarty_tpl->tpl_vars['account']->value->getFontAwesomeIcon();?>
"></i>
        </a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
