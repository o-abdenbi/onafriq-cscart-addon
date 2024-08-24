<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:36:29
  from 'C:\laragon\www\onafriq\design\backend\templates\addons\reward_points\hooks\addons\addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c9472d559782_05721694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e814c171e7cce986df2c1c63c5f3b699d20f9292' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\addons\\reward_points\\hooks\\addons\\addon_settings.post.tpl',
      1 => 1724464103,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c9472d559782_05721694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
