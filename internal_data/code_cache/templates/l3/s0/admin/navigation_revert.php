<?php
// FROM HASH: d7a221f0a701eb98ee4a2a8aba54ea5f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Xác nhận hành động');
	$__finalCompiled .= '

' . $__templater->form('

	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Vui lòng xác nhận rằng bạn muốn khôi phục các thay đổi được thực hiện cho những điều sau' . $__vars['xf']['language']['label_separator'] . '
				<strong><a href="' . $__templater->fn('link', array('navigation/edit', $__vars['navigation'], ), true) . '">' . $__templater->escape($__vars['navigation']['title']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Khôi phục',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>

	' . $__templater->fn('redirect_input', array(null, null, true)) . '

', array(
		'action' => $__templater->fn('link', array('navigation/revert', $__vars['navigation'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
});