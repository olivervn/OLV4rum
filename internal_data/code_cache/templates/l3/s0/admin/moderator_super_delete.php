<?php
// FROM HASH: c909e55fdc35ac315a5362277618263f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Xác nhận hành động');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Vui lòng xác nhận rằng bạn muốn xóa thành viên dưới đây với tư cách là người kiểm duyệt chính' . $__vars['xf']['language']['label_separator'] . '
				<strong><a href="' . $__templater->fn('link', array('moderators/super/edit', $__vars['generalModerator'], ), true) . '">' . $__templater->escape($__vars['generalModerator']['User']['username']) . '</a></strong>
				' . 'Nếu thành viên này là người kiểm duyệt nội dung cụ thể, những đặc quyền kiểm duyệt này sẽ bị xóa.' . '
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('moderators/super/delete', $__vars['generalModerator'], ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
});