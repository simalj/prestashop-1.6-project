<?php /* Smarty version Smarty-3.1.19, created on 2025-04-03 19:38:28
         compiled from "/var/www/html/themes/default-bootstrap/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103016671367eee3b42c4d03-98130067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3480a87252fd352cfe1fcf14fea2e0cce100410e' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocklanguages/blocklanguages.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103016671367eee3b42c4d03-98130067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67eee3b42d96f5_85127629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67eee3b42d96f5_85127629')) {function content_67eee3b42d96f5_85127629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/html/tools/smarty/plugins/modifier.regex_replace.php';
?>
<!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<div id="languages-block-top" class="languages-block">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
				<div class="current">
					<span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
				</div>
			<?php }?>
		<?php } ?>
		<ul id="first-languages" class="languages-block_ul toogle_content">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
				<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>class="selected"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
					<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php } else { ?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php }?>
				<?php }?>
						<span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
					</a>
				<?php }?>
				</li>
			<?php } ?>
		</ul>
	</div>
<?php }?>
<!-- /Block languages module -->
<?php }} ?>
