{$block_speed = $block.properties.speed|default:400}
{$block_pause_delay = $block.properties.pause_delay * 1000|default:0}
{if $block_speed > ($block_pause_delay / 2.5)}
    {$block_speed = ($block_pause_delay / 2.5)}
{/if}

<script>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_{$block.block_id}');

        var item = {$block.properties.item_quantity|default:3},
            // default setting of carousel
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        {if $block.properties.outside_navigation == "Y"}
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_{$block.block_id}").hide();
            } else {
                $("#owl_outside_nav_{$block.block_id}").show();
            }
        }
        {/if}

        if (elm.length) {
            elm.owlCarousel({
                direction: '{$language_direction}',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                {if $block.properties.scroll_per_page == "Y"}
                scrollPerPage: true,
                {/if}
                {if $block.properties.not_scroll_automatically == "Y"}
                autoPlay: false,
                {else}
                autoPlay: {$block_pause_delay},
                {/if}
                slideSpeed: {$block_speed},
                paginationSpeed: {$block_speed * 2},
                rewindSpeed: {$block_speed * 2.5},
                stopOnHover: true,
                {if $block.properties.outside_navigation == "N"}
                navigation: true,
                navigationText: ['{__("prev_page")}', '{__("next")}'],
                {/if}
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            {if $block.properties.outside_navigation == "Y"}
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('{$prev_selector}').click(function(){
                elm.trigger('owl.prev');
              });
              $('{$next_selector}').click(function(){
                elm.trigger('owl.next');
              });

            {else}
            });
            {/if}

        }
    });
}(Tygh, Tygh.$));
</script>
