<?php /* Smarty version Smarty-3.1.19, created on 2025-04-03 23:21:29
         compiled from "/var/www/html/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104193233867eefbd913cba4-88349554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5b1584ffcf7c8b56d0c79b9f00a62f9454dc0f' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104193233867eefbd913cba4-88349554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67eefbd91472b4_83504161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67eefbd91472b4_83504161')) {function content_67eefbd91472b4_83504161($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<?php }} ?>
