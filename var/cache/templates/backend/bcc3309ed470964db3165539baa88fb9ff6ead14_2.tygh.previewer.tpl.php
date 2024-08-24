<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:08:26
  from 'C:\laragon\www\onafriq\design\backend\templates\common\previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c9409aa2d927_51625109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc3309ed470964db3165539baa88fb9ff6ead14' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1724464114,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9409aa2d927_51625109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
