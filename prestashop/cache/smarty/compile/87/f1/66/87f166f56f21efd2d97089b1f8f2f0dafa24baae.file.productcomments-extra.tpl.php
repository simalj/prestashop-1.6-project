<?php /* Smarty version Smarty-3.1.19, created on 2025-04-03 19:38:28
         compiled from "/var/www/html/themes/default-bootstrap/modules/productcomments/productcomments-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107975589267eee3b40ffe68-56512108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f166f56f21efd2d97089b1f8f2f0dafa24baae' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/productcomments/productcomments-extra.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107975589267eee3b40ffe68-56512108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'nbComments' => 0,
    'too_early' => 0,
    'is_logged' => 0,
    'allow_guests' => 0,
    'averageTotal' => 0,
    'ratings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_67eee3b410ee32_70358828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67eee3b410ee32_70358828')) {function content_67eee3b410ee32_70358828($_smarty_tpl) {?> 
<?php if ((!$_smarty_tpl->tpl_vars['content_only']->value&&(($_smarty_tpl->tpl_vars['nbComments']->value==0&&$_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))||($_smarty_tpl->tpl_vars['nbComments']->value!=0)))) {?>
<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
	<?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
		<div class="comments_note clearfix">
			<span><?php echo smartyTranslate(array('s'=>'Rating','mod'=>'productcomments'),$_smarty_tpl);?>
&nbsp;</span>
			<div class="star_content clearfix">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php endfor; endif; ?>
				<meta itemprop="worstRating" content = "0" />
				<meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['averageTotal']->value,1), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
				<meta itemprop="bestRating" content = "5" />
			</div>
		</div> <!-- .comments_note -->
	<?php }?>

	<ul class="comments_advices">
		<?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
			<li>
				<a href="#idTab5" class="reviews">
					<?php echo smartyTranslate(array('s'=>'Read reviews','mod'=>'productcomments'),$_smarty_tpl);?>
 (<span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span>)
				</a>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<li>
				<a class="open-comment-form" href="#new_comment_form">
					<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl);?>

				</a>
			</li>
		<?php }?>
	</ul>
</div>
<?php }?>
<!--  /Module ProductComments -->
<?php }} ?>
