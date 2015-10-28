<?php
/**
 * Elgg No Name plugin
 *
 * Delete 'Display Name' field from register and useradd forms
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author pianist
 * @URL http://elgghacks.com
 * @copyright http://o.wzm.me/totemz/v/2015/elgg-hacks
 */

elgg_register_event_handler('init', 'system', 'noname_init');

function noname_init() {
elgg_register_action("register", elgg_get_plugins_path() . "noname/actions/register.php", 'public');
elgg_register_action("useradd", elgg_get_plugins_path() . "noname/actions/useradd.php", 'admin');
}
