<?php
// FROM HASH: a6cdf2ecd310a31d7a6d6715cbda82dd
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Chèn spoiler');
	$__finalCompiled .= '

<form class="block" id="editor_spoiler_form">
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'id' => 'editor_spoiler_title',
	), array(
		'label' => 'Nhập tiêu đề spoiler',
		'explain' => 'Nếu bạn muốn nút \'Spoiler\' hiển thị tiêu đề gợi ý về nội dung của nó, hãy nhập văn bản của bạn ở đây. Nếu không muốn có một tiêu đề, để trống hộp văn bản.',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Xem tiếp',
		'id' => 'editor_spoiler_submit',
	), array(
	)) . '
	</div>
</form>';
	return $__finalCompiled;
});