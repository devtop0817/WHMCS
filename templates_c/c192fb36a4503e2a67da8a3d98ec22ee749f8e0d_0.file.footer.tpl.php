<?php
/* Smarty version 3.1.36, created on 2023-03-12 06:00:53
  from 'D:\WHMCS\whmcs_v8.6.1\admin\templates\blend\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_640d5c85cae184_88616600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c192fb36a4503e2a67da8a3d98ec22ee749f8e0d' => 
    array (
      0 => 'D:\\WHMCS\\whmcs_v8.6.1\\admin\\templates\\blend\\footer.tpl',
      1 => 1669716554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640d5c85cae184_88616600 (Smarty_Internal_Template $_smarty_tpl) {
?>        </div>
        <div class="clear"></div>
    </div>

    <div class="footerbar">
        <div class="copyright">
            <!-- Removal of the WHMCS copyright notice is strictly prohibited -->
            <!-- Branding removal entitlement does not permit this line to be removed -->
            Copyright &copy;
            <a href="https://www.whmcs.com/" target="_blank">WHMCS</a> <?php echo date('Y');?>
.
            All Rights Reserved.
        </div>
        <div class="links">
            <a href="https://www.whmcs.com/report-a-bug" target="_blank">Report a Bug</a>
            |
            <a href="https://docs.whmcs.com/" target="_blank">Documentation</a>
            |
            <a href="https://www.whmcs.com/contact" target="_blank">Contact Us</a>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/intellisearch-results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
