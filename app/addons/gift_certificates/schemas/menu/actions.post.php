<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

/** @var array $schema */
$schema['statuses.manage']['statuses_' . strtolower(STATUSES_GIFT_CERTIFICATE)] = [
    'href'     => 'statuses.manage?type=' . STATUSES_GIFT_CERTIFICATE,
    'text'     => __('gift_certificates.actions.gift_certificate_statuses'),
    'position' => 300
];

$schema['gift_certificates.manage']['statuses_' . strtolower(STATUSES_GIFT_CERTIFICATE)] = [
    'href'     => 'statuses.manage?type=' . STATUSES_GIFT_CERTIFICATE,
    'text'     => __('gift_certificates.actions.gift_certificate_statuses'),
    'position' => 100
];

return $schema;
