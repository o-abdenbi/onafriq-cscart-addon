<?php
/* Smarty version 4.3.0, created on 2024-08-23 19:07:48
  from 'C:\laragon\www\onafriq\design\backend\templates\common\comet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c94074f2a339_92955992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a25ce538bf202aa6db3ef597100ae428fc3c6ef' => 
    array (
      0 => 'C:\\laragon\\www\\onafriq\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1724464112,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c94074f2a339_92955992 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}
