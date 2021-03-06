<?php
// FROM HASH: 5666758f365c50e2803a201a1b557fcd
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Xác nhận hành động');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['positionId']) {
		$__compilerTemp1 .= '
					' . 'Vui lòng xác nhận rằng bạn muốn xóa vị trí widget sau đây \'' . $__templater->escape($__vars['positionId']) . '\'.' . '
				';
	} else {
		$__compilerTemp1 .= '
					' . 'Vui lòng xác nhận rằng bạn muốn xóa những điều sau' . $__vars['xf']['language']['label_separator'] . '
				';
	}
	$__compilerTemp2 = '';
	if ($__templater->fn('count', array($__vars['widget']['positions'], ), false) == 1) {
		$__compilerTemp2 .= '
			<div class="block-body">
				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'delete',
			'label' => 'Đây là vị trí cuối cùng cho widget này. Xóa vĩnh viễn các widget.',
			'_type' => 'option',
		)), array(
			'rowtype' => 'fullWidth noLabel',
		)) . '
			</div>
		';
	} else if ((!$__vars['positionId']) AND $__templater->fn('count', array($__vars['widget']['positions'], ), false)) {
		$__compilerTemp2 .= '
			<div class="block-row">
				<div class="blockMessage blockMessage--close blockMessage--warning blockMessage--iconic blockMessage--iconic">
					' . 'This widget is currently used in ' . $__templater->fn('count', array($__vars['widget']['positions'], ), true) . ' position(s).' . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . $__compilerTemp1 . '
				<strong><a href="' . $__templater->fn('link', array('widgets/edit', $__vars['widget'], ), true) . '">' . $__templater->escape($__vars['widget']['title']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__compilerTemp2 . '
		' . $__templater->formSubmitRow(array(
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('widgets/delete', $__vars['widget'], array('position_id' => $__vars['positionId'], ), ), false),
		'class' => 'block',
		'ajax' => 'true',
	)) . '
';
	return $__finalCompiled;
});