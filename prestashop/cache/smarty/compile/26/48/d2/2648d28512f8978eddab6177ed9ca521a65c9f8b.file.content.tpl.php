<?php /* Smarty version Smarty-3.1.19, created on 2025-04-05 18:51:24
         compiled from "/var/www/html/admin586htm3z8/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181784406967f15f8c179e01-43922897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2648d28512f8978eddab6177ed9ca521a65c9f8b' => 
    array (
      0 => '/var/www/html/admin586htm3z8/themes/default/template/content.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181784406967f15f8c179e01-43922897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67f15f8c17c9f4_20765229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67f15f8c17c9f4_20765229')) {function content_67f15f8c17c9f4_20765229($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
