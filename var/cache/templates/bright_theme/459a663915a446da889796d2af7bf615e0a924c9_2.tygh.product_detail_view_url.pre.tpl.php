<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:06:39
  from 'C:\laragon\www\onafriq\design\themes\responsive\templates\addons\wishlist\hooks\products\product_detail_view_url.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c9402f970002_86457029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459a663915a446da889796d2af7bf615e0a924c9' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_detail_view_url.pre.tpl',
      1 => 1724465112,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9402f970002_86457029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->_assignInScope('product_detail_view_url', fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))) ,false ,2);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_detail_view_url.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_detail_view_url.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->_assignInScope('product_detail_view_url', fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))) ,false ,2);
}
}
}
}
