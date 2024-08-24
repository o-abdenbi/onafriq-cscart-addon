<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:36:32
  from 'C:\laragon\www\onafriq\design\backend\templates\common\last_viewed_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c94730088382_04806555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06603dfd91330a1f5f308100ec302358ce78d2cf' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\common\\last_viewed_items.tpl',
      1 => 1724464113,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c94730088382_04806555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_smarty_tpl->_assignInScope('show_last_viewed_items', (($tmp = $_smarty_tpl->tpl_vars['show_last_viewed_items']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
<div class="btn-group last-viewed-items" id="last_edited_items">
    <a class="btn last-viewed-items__back-link cm-back-link"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-arrow-left"),$_smarty_tpl);?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['show_last_viewed_items']->value) {?>
        <a class="btn btn-link last-viewed-items__dropdown dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value) >= 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'bc', false, 'key', 'bcn', array (
));
$_smarty_tpl->tpl_vars['bc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['bc']->value) {
$_smarty_tpl->tpl_vars['bc']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?>
                    <li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } else { ?>
                    <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="divider"></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['last_edited_items']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_edited_items']->value, 'lnk');
$_smarty_tpl->tpl_vars['lnk']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lnk']->value) {
$_smarty_tpl->tpl_vars['lnk']->do_else = false;
?>
                <li><a <?php if ($_smarty_tpl->tpl_vars['lnk']->value['icon']) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lnk']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['lnk']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name'] ?: ''), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name'] ?: ''),40);?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <li><a><?php echo $_smarty_tpl->__("no_items");?>
</a></li>
        <?php }?>
        </ul>
    <?php }?>
<!--last_edited_items--></div>
<?php }
}
