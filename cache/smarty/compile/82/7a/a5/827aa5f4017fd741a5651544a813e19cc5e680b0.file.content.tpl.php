<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 03:38:29
         compiled from "C:\Apache24\htdocs\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16274995165897efb5bb3333-52966657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827aa5f4017fd741a5651544a813e19cc5e680b0' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\admin\\themes\\default\\template\\content.tpl',
      1 => 1482178620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16274995165897efb5bb3333-52966657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5897efb5c10f43_29657834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5897efb5c10f43_29657834')) {function content_5897efb5c10f43_29657834($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
