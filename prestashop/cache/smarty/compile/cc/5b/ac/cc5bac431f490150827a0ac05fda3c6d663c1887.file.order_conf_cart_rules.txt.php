<?php /* Smarty version Smarty-3.1.19, created on 2025-04-05 19:04:46
         compiled from "/var/www/html/mails/en/order_conf_cart_rules.txt" */ ?>
<?php /*%%SmartyHeaderCode:186605609967f162ae624738-28235076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc5bac431f490150827a0ac05fda3c6d663c1887' => 
    array (
      0 => '/var/www/html/mails/en/order_conf_cart_rules.txt',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186605609967f162ae624738-28235076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'cart_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67f162ae627da4_30030422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67f162ae627da4_30030422')) {function content_67f162ae627da4_30030422($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cart_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->key => $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_reduction'];?>

<?php } ?><?php }} ?>
