<?php /* Smarty version Smarty-3.1.19, created on 2025-04-03 19:38:28
         compiled from "/var/www/html/admin/themes/default/template/footer_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110140327467eee3b440d1c2-94786906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bdd8eedd0e5eee83e558f8c3b0c6a4afde5ea22' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/footer_toolbar.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110140327467eee3b440d1c2-94786906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67eee3b44236e6_12193825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67eee3b44236e6_12193825')) {function content_67eee3b44236e6_12193825($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
<div class="panel-footer" id="toolbar-footer">
	<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toolbar_btn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['k']->value!='modules-list') {?>
			<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?>" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['k']->value=='save'||$_smarty_tpl->tpl_vars['k']->value=='save-and-stay') {?> pull-right<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target'])&&$_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?>" href="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>#<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
				<i class="process-icon-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>"></i> <span <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['force_desc'])&&$_smarty_tpl->tpl_vars['btn']->value['force_desc']==true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
</span>
			</a>
		<?php }?>
	<?php } ?>

	<script type="text/javascript">
	//<![CDATA[
		var submited = false

		//get reference on save link
		btn_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save');

		//get reference on form submit button
		btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');

		if (btn_save.length > 0 && btn_submit.length > 0)
		{
			//get reference on save and stay link
			btn_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay');

			//get reference on current save link label
			lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save');

			//override save link label with submit button value
			if (btn_submit.html().length > 0)
				lbl_save.find('span').html(btn_submit.html());

			if (btn_save_and_stay.length > 0)
			{
				//get reference on current save link label
				lbl_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay');

				//override save and stay link label with submit button value
				if (btn_submit.html().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked'))
					lbl_save_and_stay.find('span').html(btn_submit.html() + " <?php echo smartyTranslate(array('s'=>'and stay'),$_smarty_tpl);?>
 ");
			}

			//hide standard submit button
			btn_submit.hide();
			//bind enter key press to validate form
			$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').find('input').keypress(function (e) {
				if (e.which == 13 && e.target.localName != 'textarea' && !$(e.target).parent().hasClass('tagify-container'))
					$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
			});
			//submit the form
			
				btn_save.click(function() {
					// Avoid double click
					if (submited)
						return false;
					submited = true;

					if ($(this).attr('href').replace('#', '').replace(/\s/g, '') != '')
						return true;

					//add hidden input to emulate submit button click when posting the form -> field name posted
					btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');

					$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
					return false;
				});

				if (btn_save_and_stay)
				{
					btn_save_and_stay.click(function() {
						if ($(this).attr('href').replace('#', '').replace(/\s/g, '') != '')
							return true;

						//add hidden input to emulate submit button click when posting the form -> field name posted
						btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');

						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
						return false;
					});
				}
			
		}
	//]]>
	</script>
</div>
<?php }?>
<?php }} ?>
