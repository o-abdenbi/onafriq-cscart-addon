{script src="js/tygh/tabs.js"}
{$tabs_count = 1}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="subscribers_form" id="subscribers_form">
{include file="common/pagination.tpl" save_current_page=true save_current_url=true}
{if $subscribers}
    {capture name="subscribers_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th class="mobile-hide" width="1%">
                            {include file="common/check_items.tpl"}

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th class="3%">&nbsp;</th>
                        <th>{__("email")}</th>
                        <th>{__("language")}</th>
                        <th>{__("registered")}</th>
                        <th class="mobile-hide">&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                {foreach $subscribers as $s}
                    <tbody class="cm-longtap-target"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="{$s.subscriber_id}"
                    >
                        <tr>
                            <td class="mobile-hide">
                                   <input type="checkbox" name="subscriber_ids[]" value="{$s.subscriber_id}" class="cm-item hide" /></td>
                            <td>
                                <button type="button" name="plus_minus" id="on_subscribers_{$s.subscriber_id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination-subscribers btn-expand">
                                    <span class="icon-caret-right"></span>
                                </button>
                                <button type="button" name="minus_plus" id="off_subscribers_{$s.subscriber_id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-subscribers btn-expand">
                                    <span class="icon-caret-down"></span>
                                </button>
                            </td>
                            <td data-th="{__("email")}"><input type="hidden" name="subscribers[{$s.subscriber_id}][email]" value="{$s.email}" />
                                <a href="mailto:{$s.email|escape:url}" class="link--monochrome">{$s.email}</a>
                            </td>
                            <td data-th="{__("language")}">
                                <select class="span2" name="subscribers[{$s.subscriber_id}][lang_code]">
                                {foreach $languages as $lng}
                                    <option value="{$lng.lang_code}" {if $s.lang_code == $lng.lang_code}selected="selected"{/if} >{$lng.name}</option>
                                {/foreach}
                                </select>
                            </td>
                            <td data-th="{__("registered")}">
                                {$s.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"},&nbsp;{assign var="count" value=$s.mailing_lists|@count}{__("subscribed_to", ["[num]" => $count])}
                            </td>
                            <td class="center nowrap mobile-hide" data-th="">
                                &nbsp;
                            </td>
                            <td class="nowrap right" data-th="{__("tools")}">
                                {capture name="tools_list"}
                                    <li>{btn type="list" class="cm-confirm" text=__("delete") href="subscribers.delete?subscriber_id=`$s.subscriber_id`" method="POST"}</li>
                                {/capture}
                                <div class="hidden-tools">
                                    {dropdown content=$smarty.capture.tools_list}
                                </div>
                            </td>
                        </tr>
                        <tr id="subscribers_{$s.subscriber_id}" class="hidden no-hover row-more">
                            <td class="mobile-hide">&nbsp;</td>
                            <td colspan="6" class="row-more-body row-gray" data-th="">
                                {if $mailing_lists}
                                <table class="table table-condensed table--relative table-responsive">
                                <thead>
                                <tr>
                                    <th>{__("mailing_list")}</th>
                                    <th class="center">{__("subscribed")}</th>
                                    <th class="center">{__("confirmed")}</th>
                                </tr>
                                </thead>
                                {foreach $mailing_lists as $list_id => $list}
                                    <tr>
                                        <td data-th="{__("mailing_list")}">{$list.object}</td>
                                        <td class="center" data-th="{__("subscribed")}">
                                            <input type="checkbox" name="subscribers[{$s.subscriber_id}][list_ids][]" value="{$list_id}" {if $s.mailing_lists[$list_id]}checked="checked"{/if} class="cm-item-{$id}"></td>
                                        <td class="center" data-th="{__("confirmed")}">
                                            <input type="hidden" name="subscribers[{$s.subscriber_id}][mailing_lists][{$list_id}][confirmed]" value="{if $list.register_autoresponder}0{else}1{/if}" />
                                            <input type="checkbox" name="subscribers[{$s.subscriber_id}][mailing_lists][{$list_id}][confirmed]" value="1" {if $s.mailing_lists[$list_id].confirmed || !$list.register_autoresponder}checked="checked"{/if}  {if !$list.register_autoresponder}disabled="disabled"{/if} />
                                        </td>
                                    </tr>
                                {/foreach}
                                </table>
                                {else}
                                    <p class="no-items">{__("no_data")}</p>
                                {/if}
                            </td>
                        </tr>
                    </tbody>
                {/foreach}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="subscribers_form"
        object="subscribers"
        items=$smarty.capture.subscribers_table
        is_check_all_shown=true
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl"}
</form>

{capture name="add_new_picker"}

    <form action="{""|fn_url}" method="post" name="subscribers_form_0" class="form-horizontal form-edit ">
    <input type="hidden" name="subscriber_id" value="0" />
    <input type="hidden" name="subscriber_data[list_ids][]" value="{$smarty.request.list_id}" />
    <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-{$tabs_count}">
        <ul class="nav nav-tabs">
            <li id="tab_mailing_list_details_0" class="cm-js active"><a>{__("general")}</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content" id="content_tab_mailing_list_details_0">
    <fieldset>
        <div class="control-group">
            <label for="subscribers_email_0" class="control-label cm-required cm-email">{__("email")}</label>
            <div class="controls">
            <input type="text" name="subscriber_data[email]" id="subscribers_email_0" value="" class="span6" />
            </div>
        </div>

        <div class="control-group">
            <label for="elm_lang_0" class="cm-required control-label">{__("language")}</label>
            <div class="controls">
            <select id="elm_lang_0" name="subscriber_data[lang_code]">
                {foreach from=$languages item="lng"}
                    <option value="{$lng.lang_code}">{$lng.name}</option>
                {/foreach}
            </select>
            </div>
        </div>

    </fieldset>
    </div>

    <div class="buttons-container">
        {include file="buttons/save_cancel.tpl" but_name="dispatch[subscribers.update]" cancel_action="close"}
    </div>

    </form>
{/capture}

{/capture}

{capture name="adv_buttons"}
    {if $is_allow_update_subscribers}
        {capture name="tools_list"}
            <li>{include file="common/popupbox.tpl" id="add_new_subscribers" text=__("newsletters.new_subscribers") content=$smarty.capture.add_new_picker link_text=__("add_subscriber") act="link"}</li>
            <li>{include file="pickers/users/picker.tpl" data_id="subscr_user" picker_for="subscribers" extra_var="subscribers.add_users?list_id=`$smarty.request.list_id`" but_text=__("ne_add_subscribers_from_users") view_mode="button" no_container=true}</li>
        {/capture}
        {dropdown content=$smarty.capture.tools_list
            icon="icon-plus"
            text=__("add_subscriber")
            no_caret=true
            placement="right"
            class_toggle="btn-primary"
        }
    {/if}
{/capture}

{capture name="buttons"}
    {if $subscribers}
        {include file="buttons/save.tpl" but_name="dispatch[subscribers.m_update]" but_role="action" but_target_form="subscribers_form" but_meta="cm-submit"}
    {/if}
{/capture}

{capture name="sidebar"}
    {include file="addons/newsletters/views/subscribers/components/subscribers_search_form.tpl" dispatch="subscribers.manage"}
{/capture}

{include file="common/mainbox.tpl"
    title=__("subscribers")
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    adv_buttons=$smarty.capture.adv_buttons
    sidebar=$smarty.capture.sidebar
    select_languages=true
}
