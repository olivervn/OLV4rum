<?php
// FROM HASH: 860834bf4be7190548334317d9bacd85
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['providerData']['profile_link']) {
		$__finalCompiled .= '
	<a href="' . $__templater->escape($__vars['providerData']['profile_link']) . '" target="_blank">
		<img src="' . $__templater->escape($__vars['providerData']['pictureUrl']) . '" width="48" alt="" />
	</a>
	<div><a href="' . $__templater->escape($__vars['providerData']['profile_link']) . '" target="_blank">' . $__templater->escape($__vars['providerData']['formattedName']) . '</a></div>
';
	} else {
		$__finalCompiled .= '
	' . 'Tài khoản không xác định' . '
';
	}
	return $__finalCompiled;
});