<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 03:38:30
         compiled from "C:\Apache24\htdocs\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18688354655897efb6497010-75172328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceac7bf7342ce3446ae75f31372f76c4fc28594e' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1482178624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18688354655897efb6497010-75172328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5897efb64b6427_20412318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5897efb64b6427_20412318')) {function content_5897efb64b6427_20412318($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
