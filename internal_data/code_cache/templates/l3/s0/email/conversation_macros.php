<?php
// FROM HASH: c0e48021b94c07bd5b869cf19e6e6720
return array('macros' => array('footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'conversation' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . '<p class="minorText">Thư này đã được gửi đến bạn vì tùy chọn của bạn được đặt để nhận email khi nhận được một tin nhắn cuộc trò chuyện mới. <a href="' . $__templater->fn('link', array('canonical:email-stop/conversation', $__vars['xf']['toUser'], ), true) . '">Ngừng nhận những email này</a>.</p>' . '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});