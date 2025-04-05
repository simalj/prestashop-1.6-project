<?php /* Smarty version Smarty-3.1.19, created on 2025-04-05 18:58:44
         compiled from "/var/www/html/admin586htm3z8/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90804132267f16144bbe1c2-16347625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7872b9450d1c7df625cb8349158fac4da4eb504a' => 
    array (
      0 => '/var/www/html/admin586htm3z8/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90804132267f16144bbe1c2-16347625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67f16144bc1469_42698510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67f16144bc1469_42698510')) {function content_67f16144bc1469_42698510($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
