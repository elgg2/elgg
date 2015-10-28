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

$password = $password2 = '';
$username = get_input('u');
$email = get_input('e');
$name = get_input('u');
$fname = get_input('u');
$mname = get_input('u');
$lname = get_input('u');

if (elgg_is_sticky_form('register')) {
	extract(elgg_get_sticky_values('register'));
	elgg_clear_sticky_form('register');
}

?>
<div class="mtm">
	<label><?php echo elgg_echo('email'); ?></label><br />
	<?php
	echo elgg_view('input/text', array(
		'name' => 'email',
		'value' => $email,
		'class' => 'elgg-autofocus',
	));
	?>
</div>

<div>
	<label><?php echo elgg_echo('username'); ?></label><br />
	<?php
	echo elgg_view('input/text', array(
		'name' => 'username',
		'value' => $username,
	));
	?>
</div>

<div>
	<label><?php echo elgg_echo('firstname'); ?></label><br />
	<?php
	echo elgg_view('input/text', array(
		'name' => 'fname',
		'value' => $fname,
	));
	?>
</div>

<div>
	<label><?php echo elgg_echo('middlename'); ?></label><br />
	<?php
	echo elgg_view('input/text', array (
		'name' => 'mname',
		'value' => $mname,
	));
	?>
</div>

<div>
	<label><?php echo elgg_echo('lastname'); ?></label><br />
	<?php
	echo elgg_view('input/text', array (
		'name' => 'lname',
		'value' => $lname,
	));
	?>
</div>

<div>
	<label><?php echo elgg_echo('password'); ?></label><br />
	<?php
	echo elgg_view('input/password', array(
		'name' => 'password',
		'value' => $password,
	));
	?>
</div>
<div>
	<label><?php echo elgg_echo('passwordagain'); ?></label><br />
	<?php
	echo elgg_view('input/password', array(
		'name' => 'password2',
		'value' => $password2,
	));
	?>
</div>

<?php
// view to extend to add more fields to the registration form
echo elgg_view('register/extend', $vars);

// Add captcha hook
echo elgg_view('input/captcha', $vars);

echo '<div class="elgg-foot">';
echo elgg_view('input/hidden', array('name' => 'friend_guid', 'value' => $vars['friend_guid']));
echo elgg_view('input/hidden', array('name' => 'invitecode', 'value' => $vars['invitecode']));
echo elgg_view('input/submit', array('name' => 'submit', 'value' => elgg_echo('register')));
echo '</div>';
