<?php
// FROM HASH: 53eab48a3063accc11a98a11fa8d9df8
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->method($__vars['group'], 'isInsert', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Thêm Nhóm Tùy chọn');
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Chỉnh sửa nhóm tùy chọn' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['group']['title']));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['group'], 'isUpdate', array())) {
		$__finalCompiled .= '
	';
		$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['group']['title'])), $__templater->fn('link', array('options/groups', $__vars['group'], ), false), array(
		));
		$__finalCompiled .= '

	';
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
		' . $__templater->button('', array(
			'href' => $__templater->fn('link', array('options/groups/delete', $__vars['group'], ), false),
			'icon' => 'delete',
			'overlay' => 'true',
		), '', array(
		)) . '
	');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">

			' . $__templater->formTextBoxRow(array(
		'name' => 'group_id',
		'value' => $__vars['group']['group_id'],
		'dir' => 'ltr',
	), array(
		'label' => 'Group ID',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => ($__templater->method($__vars['group'], 'exists', array()) ? $__vars['group']['MasterTitle']['phrase_text'] : ''),
	), array(
		'label' => 'Tiêu đề',
	)) . '

			' . $__templater->formTextAreaRow(array(
		'name' => 'description',
		'value' => ($__templater->method($__vars['group'], 'exists', array()) ? $__vars['group']['MasterDescription']['phrase_text'] : ''),
		'autosize' => 'true',
	), array(
		'label' => 'Mô tả',
		'hint' => 'Bạn có thể sử dụng HTML',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->callMacro('display_order_macros', 'row', array(
		'value' => $__vars['group']['display_order'],
	), $__vars) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'debug_only',
		'selected' => $__vars['group']['debug_only'],
		'label' => 'Hiển thị nhóm này ở chế độ debug',
		'_type' => 'option',
	)), array(
	)) . '

			' . $__templater->callMacro('addon_macros', 'addon_edit', array(
		'addOnId' => $__vars['group']['addon_id'],
	), $__vars) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('options/groups/save', $__vars['group'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
});