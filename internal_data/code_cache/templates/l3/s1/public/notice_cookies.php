<?php
// FROM HASH: 9b5a136335ac4353c3317d6cf966f246
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="u-alignCenter">
	' . 'Trang web này sử dụng cookie. Tiếp tục sử dụng trang web này đồng nghĩa với việc bạn đồng ý sử dụng cookie của chúng tôi.' . '
</div>

<div class="u-inputSpacer u-alignCenter">
	' . $__templater->button('Accept', array(
		'icon' => 'confirm',
		'href' => $__templater->fn('link', array('account/dismiss-notice', null, array('notice_id' => $__vars['notice']['notice_id'], ), ), false),
		'class' => 'js-noticeDismiss button--notice',
		'data-xf-init' => 'tooltip',
		'title' => $__templater->filter('Loại bỏ thông báo', array(array('for_attr', array()),), false),
	), '', array(
	)) . '
	' . $__templater->button('Tìm hiểu thêm.' . $__vars['xf']['language']['ellipsis'], array(
		'href' => $__templater->fn('link', array('help/cookies', ), false),
		'class' => 'button--notice',
	), '', array(
	)) . '
</div>';
	return $__finalCompiled;
});