<?php

use Tygh\Registry;

/**
 * @return void
 */
function fn_onafriq_integration_add_payment_processors(): void
{
    $processor_exist = db_get_field('SELECT type FROM ?:payment_processors WHERE processor_script = ?s', 'onafriq.php');
    if (!$processor_exist) {
        db_query('INSERT INTO ?:payment_processors ?e', [
                'processor'             => 'onafriq',
                'processor_script'      => 'onafriq.php',
                'processor_template'    => 'addons/onafriq_integration/views/orders/components/payments/onafriq.tpl',
                'admin_template'        => 'onafriq.tpl',
                'callback'              => 'N',
                'type'                  => 'P',
                'addon'                 => 'onafriq_integration',
            ]
        );
    }
}

/**
 * @return void
 */
function fn_onafriq_integration_delete_payment_processors(): void
{
    db_query('DELETE FROM ?:payment_descriptions WHERE payment_id IN (SELECT payment_id FROM ?:payments WHERE processor_id IN (SELECT processor_id FROM ?:payment_processors WHERE processor_script = ?s))', 'onafriq.php');
    db_query('DELETE FROM ?:payments WHERE processor_id IN (SELECT processor_id FROM ?:payment_processors WHERE processor_script = ?s)', 'onafriq.php');
    db_query('DELETE FROM ?:payment_processors WHERE processor_script = ?s', 'onafriq.php');
}