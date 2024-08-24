<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:08:16
  from 'C:\laragon\www\onafriq\design\backend\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c940906fe1a9_07433985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03899f74cb0364a2bd4c1345f2ffe5f56ea3f7bd' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\menu.tpl',
      1 => 1724464082,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/get_primary_items.tpl' => 1,
    'tygh:components/menu/main_menu.tpl' => 2,
    'tygh:components/menu/get_secondary_items.tpl' => 1,
    'tygh:common/quick_menu.tpl' => 1,
  ),
),false)) {
function content_66c940906fe1a9_07433985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\onafriq\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="cs-main-menu">
    <div class="cs-main-menu__outer" id="header_navbar">
        <div class="cs-main-menu__header-mobile mobile-visible">
            <button type="button" class="btn mobile-menu-closer mobile-menu-closer-btn">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove overlay-navbar-open"),$_smarty_tpl);?>

            </button>
        </div>
        <div class="cs-main-menu__inner">
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_primary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->tpl_vars['navigation']->value,'quick_menu'=>$_smarty_tpl->tpl_vars['quick_menu']->value), 0, false);
?>
                <div class="cs-main-menu__primary <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_menu_primary_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['primary_items']->value,'prefix'=>"primary",'show_collapse_default'=>$_smarty_tpl->tpl_vars['show_collapse_default']->value), 0, false);
?>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_secondary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->tpl_vars['navigation']->value), 0, false);
?>
                <?php if ($_smarty_tpl->tpl_vars['secondary_items']->value) {?>
                    <div class="cs-main-menu__secondary">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['secondary_items']->value,'prefix'=>"secondary",'show_collapse_default'=>$_smarty_tpl->tpl_vars['show_collapse_default']->value), 0, true);
?>
                    </div>
                <?php }?>
            <?php }?>
        </div>
    <!--header_navbar--></div>
</div>
<div class="cs-main-menu__backdrop mobile-menu-closer">
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_menu'=>$_smarty_tpl->tpl_vars['quick_menu']->value), 0, false);
}
}
