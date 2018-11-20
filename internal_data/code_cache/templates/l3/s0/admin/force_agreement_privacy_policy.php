<?php
// FROM HASH: 649742c0e1b5a39bc0242ccc10bf90f0
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Force privacy policy agreement');
	$__finalCompiled .= '

';
	$__templater->setPageParam('section', 'forceAgreementPrivacy');
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['xf']['options']['privacyPolicyLastUpdate']) {
		$__compilerTemp1 .= $__templater->fn('date_dynamic', array($__vars['xf']['options']['privacyPolicyLastUpdate'], array(
		)));
	} else {
		$__compilerTemp1 .= 'Không bao giờ';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Please confirm that you want to force all current users to accept the following:' . '
				<strong><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '" target="_blank">' . 'Privacy policy' . ' &middot; ' . 'Cập nhật mới nhất' . $__vars['xf']['language']['label_separator'] . ' ' . $__compilerTemp1 . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('force-agreement/privacy-policy', ), false),
		'ajax' => 'true',
		'data-force-flash-message' => 'on',
		'class' => 'block',
	));
	return $__finalCompiled;
});