<?php /* Smarty version Smarty-3.1.19, created on 2025-04-03 19:38:28
         compiled from "/var/www/html/themes/default-bootstrap/modules/loyalty/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158362317667eee3b4456c99-45518088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8c52606828e27ff7174afa9d3af2ff4d872d5e' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/loyalty/views/templates/hook/product.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158362317667eee3b4456c99-45518088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points' => 0,
    'total_points' => 0,
    'voucher' => 0,
    'no_pts_discounted' => 0,
    'point_rate' => 0,
    'point_value' => 0,
    'points_in_cart' => 0,
    'none_award' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67eee3b4479755_50735394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67eee3b4479755_50735394')) {function content_67eee3b4479755_50735394($_smarty_tpl) {?>
<p id="loyalty" class="align_justify">
	<?php if ($_smarty_tpl->tpl_vars['points']->value) {?>
		<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="loyalty_points"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1) {?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>. 
		<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty'),$_smarty_tpl);?>
 <b><span id="total_loyalty_points"><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</span> 
		<?php if ($_smarty_tpl->tpl_vars['total_points']->value>1) {?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b> <?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 
		<span id="loyalty_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
</span>.
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['no_pts_discounted']->value)&&$_smarty_tpl->tpl_vars['no_pts_discounted']->value==1) {?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty'),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</p>
<br class="clear" />
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('point_rate'=>$_smarty_tpl->tpl_vars['point_rate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('point_value'=>$_smarty_tpl->tpl_vars['point_value']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('points_in_cart'=>$_smarty_tpl->tpl_vars['points_in_cart']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('none_award'=>$_smarty_tpl->tpl_vars['none_award']->value),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_willcollect')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_willcollect'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_willcollect'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_already')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_already'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_already'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_nopoints')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_nopoints'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_nopoints'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_points')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_points'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_points'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_point')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_point'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_point'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_total')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_total'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_total'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'loyalty_converted')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_converted'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'loyalty_converted'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
