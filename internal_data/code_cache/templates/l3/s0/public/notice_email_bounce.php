<?php
// FROM HASH: e51fcc5ceaf8909f660467d75c29364c
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Cố gắng gửi email đến ' . $__templater->escape($__vars['xf']['visitor']['email']) . ' đã thất bại. Hãy cập nhật email của bạn.' . '<br />
<a href="' . $__templater->fn('link', array('account/email', ), true) . '">' . 'Update your contact details' . '</a>';
	return $__finalCompiled;
});