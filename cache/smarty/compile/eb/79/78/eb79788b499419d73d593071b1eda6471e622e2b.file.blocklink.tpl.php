<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 03:38:31
         compiled from "C:\Apache24\htdocs\themes\default-bootstrap\modules\blocklink\blocklink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11236567255897efb79ea964-82949374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb79788b499419d73d593071b1eda6471e622e2b' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\themes\\default-bootstrap\\modules\\blocklink\\blocklink.tpl',
      1 => 1482178624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11236567255897efb79ea964-82949374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklink_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5897efb79fe1f2_78878457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5897efb79fe1f2_78878457')) {function content_5897efb79fe1f2_78878457($_smarty_tpl) {?>

<!-- Block links module -->
<div id="links_block_left" class="block">
	<p class="title_block">
	<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1', true);?>
</a>
	<?php } else { ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1', true);?>

	<?php }?>
	</p>
    <div class="block_content list-block">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklink_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value) {
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
                <?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'ISO-8859-1', true);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'ISO-8859-1', true);?>
</a></li>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- /Block links module -->
<?php }} ?>
