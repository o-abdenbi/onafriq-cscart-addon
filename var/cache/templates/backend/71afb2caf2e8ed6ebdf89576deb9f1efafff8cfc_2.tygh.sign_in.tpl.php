<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:07:48
  from 'C:\laragon\www\onafriq\design\backend\templates\buttons\sign_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c9407418fd48_59074123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71afb2caf2e8ed6ebdf89576deb9f1efafff8cfc' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1724464111,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_66c9407418fd48_59074123 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
