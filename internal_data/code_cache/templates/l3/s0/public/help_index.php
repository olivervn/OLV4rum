<?php
// FROM HASH: 10a65d407291758b67cc0114eb8536db
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Trợ giúp');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('help_wrapper', $__vars);
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['pages'], 'empty', array())) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<div class="block-body">
				';
		if ($__templater->isTraversable($__vars['pages'])) {
			foreach ($__vars['pages'] AS $__vars['page']) {
				$__finalCompiled .= '
					<div class="block-row block-row--separated">
						<h3 class="block-textHeader">
							';
				if (($__vars['page']['page_id'] == 'terms') AND $__vars['xf']['tosUrl']) {
					$__finalCompiled .= '
								<a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . $__templater->escape($__vars['page']['title']) . '</a>
							';
				} else if (($__vars['page']['page_id'] == 'privacy_policy') AND $__vars['xf']['privacyPolicyUrl']) {
					$__finalCompiled .= '
								<a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . $__templater->escape($__vars['page']['title']) . '</a>
							';
				} else {
					$__finalCompiled .= '
								<a href="' . $__templater->fn('link', array('help', $__vars['page'], ), true) . '">' . $__templater->escape($__vars['page']['title']) . '</a>
							';
				}
				$__finalCompiled .= '
						</h3>
						' . $__templater->escape($__vars['page']['description']) . '
					</div>
				';
			}
		}
		$__finalCompiled .= '
			</div>
		</div>
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="blockMessage">' . 'Chưa có mục nào được tạo ra.' . '</div>
';
	}
	return $__finalCompiled;
});