<?php
/* Smarty version 3.1.36, created on 2023-03-12 06:07:26
  from 'D:\WHMCS\whmcs_v8.6.1\templates\twenty-one\includes\flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_640d5e0edef462_87523731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23362e6fdc2eff1de1970f59b38be082d92b113f' => 
    array (
      0 => 'D:\\WHMCS\\whmcs_v8.6.1\\templates\\twenty-one\\includes\\flashmessage.tpl',
      1 => 1669716554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d5e0edef462_87523731 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }
if ((isset($_smarty_tpl->tpl_vars['align']->value))) {?> text-<?php echo $_smarty_tpl->tpl_vars['align']->value;
}?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

    </div>
<?php }
}
}
