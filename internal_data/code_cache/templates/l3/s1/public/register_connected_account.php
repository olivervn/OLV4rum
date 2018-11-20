<?php
// FROM HASH: 0b9623ff41ca0423a27cf0da5ed4e9a7
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Đăng ký thông qua ' . $__templater->escape($__vars['provider']['title']) . '');
	$__finalCompiled .= '

';
	$__vars['user'] = ($__vars['user'] ?: $__vars['xf']['visitor']);
	$__finalCompiled .= '
';
	$__templater->includeJs(array(
		'src' => 'xf/login_signup.js',
		'min' => '1',
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['providerData']['email']) {
		$__compilerTemp1 .= '
						' . $__templater->formRow($__templater->escape($__vars['providerData']['email']), array(
			'label' => 'Email',
		)) . '
					';
	} else {
		$__compilerTemp1 .= '
						' . $__templater->callMacro('register_macros', 'email_row', array(), $__vars) . '
					';
	}
	$__compilerTemp2 = '';
	if (!$__vars['providerData']['dob']) {
		$__compilerTemp2 .= '
						' . $__templater->callMacro('register_macros', 'dob_row', array(), $__vars) . '
					';
	}
	$__compilerTemp3 = '';
	if (!$__vars['providerData']['location']) {
		$__compilerTemp3 .= '
						' . $__templater->callMacro('register_macros', 'location_row', array(), $__vars) . '
					';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<h2 class="block-tabHeader tabs" data-xf-init="tabs" role="tablist">
			<a class="tabs-tab is-active" role="tab" tabindex="0" aria-controls="' . $__templater->fn('unique_id', array('regCreate', ), true) . '">
				' . 'Tạo tài khoản mới' . '
			</a>
			<a class="tabs-tab" role="tab" tabindex="0" aria-controls="' . $__templater->fn('unique_id', array('regAssoc', ), true) . '">
				' . 'Tích hợp với tài khoản đã có' . '
			</a>
		</h2>

		<ul class="tabPanes">
			<li class="is-active"
				data-xf-init="reg-form"
				data-timer="' . $__templater->escape($__vars['xf']['options']['registrationTimer']) . '"
				role="tabpanel"
				id="' . $__templater->fn('unique_id', array('regCreate', ), true) . '">

				<div class="block-body">
					' . $__templater->callMacro('register_macros', 'username_row', array(), $__vars) . '

					' . $__compilerTemp1 . '

					' . $__compilerTemp2 . '

					' . $__compilerTemp3 . '

					' . $__templater->callMacro('register_macros', 'custom_fields', array(), $__vars) . '

					' . $__templater->callMacro('register_macros', 'email_choice_row', array(), $__vars) . '

					' . $__templater->callMacro('register_macros', 'tos_row', array(), $__vars) . '
				</div>
				' . $__templater->callMacro('register_macros', 'submit_row', array(), $__vars) . '

			</li>
			<li role="tabpanel" id="' . $__templater->fn('unique_id', array('regAssoc', ), true) . '">
				<div class="block-body block-row">
					' . 'Để liên kết với một tài khoản hiện có, trước tiên bạn phải đăng nhập vào tài khoản đó và sau đó bắt đầu kết nối thông qua <a href="' . $__templater->fn('link', array('account/connected-accounts', ), true) . '">khu vực tài khoản được kết nối</a>.' . '
				</div>
			</li>
		</ul>
	</div>

	' . $__templater->fn('redirect_input', array(null, null, true)) . '
	' . $__templater->formHiddenVal('timezone', '', array(
		'data-xf-init' => 'auto-timezone',
	)) . '
', array(
		'action' => $__templater->fn('link', array('register/connected-accounts/register', $__vars['provider'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
});