<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:06:15
  from 'C:\laragon\www\onafriq\design\themes\responsive\templates\addons\gift_certificates\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c94017038e76_95116748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8894f71e1aab6131e0e21d7f2471e37bae0290' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\themes\\responsive\\templates\\addons\\gift_certificates\\hooks\\index\\styles.post.tpl',
      1 => 1724465105,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c94017038e76_95116748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/gift_certificates/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/gift_certificates/responsive.less"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/gift_certificates/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/gift_certificates/responsive.less"),$_smarty_tpl);
}
}
}
