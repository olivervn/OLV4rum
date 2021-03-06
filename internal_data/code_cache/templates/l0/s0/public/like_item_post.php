<?php
// FROM HASH: 95deae17a88c0b8158bb13d3570065d6
return array('macros' => array('like_snippet' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'liker' => '!',
		'post' => '!',
		'date' => '!',
		'fallbackName' => 'Unknown member',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="contentRow-title">
		';
	if ($__vars['post']['user_id'] == $__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			' . '' . $__templater->fn('username_link', array($__vars['liker'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' liked your post in the thread ' . ((((('<a href="' . $__templater->fn('link', array('posts', $__vars['post'], ), true)) . '">') . $__templater->fn('prefix', array('thread', $__vars['post']['Thread'], ), true)) . $__templater->escape($__vars['post']['Thread']['title'])) . '</a>') . '.' . '
		';
	} else {
		$__finalCompiled .= '
			' . '' . $__templater->fn('username_link', array($__vars['liker'], false, array('defaultname' => $__vars['fallbackName'], ), ), true) . ' liked <a ' . (('href="' . $__templater->fn('link', array('posts', $__vars['post'], ), true)) . '"') . '>' . $__templater->escape($__vars['post']['username']) . '\'s post</a> in the thread ' . ((((('<a href="' . $__templater->fn('link', array('posts', $__vars['post'], ), true)) . '">') . $__templater->fn('prefix', array('thread', $__vars['post']['Thread'], ), true)) . $__templater->escape($__vars['post']['Thread']['title'])) . '</a>') . '.' . '
		';
	}
	$__finalCompiled .= '
	</div>

	<div class="contentRow-snippet">' . $__templater->fn('snippet', array($__vars['post']['message'], $__vars['xf']['options']['newsFeedMessageSnippetLength'], array('stripQuote' => true, ), ), true) . '</div>

	<div class="contentRow-minor">' . $__templater->fn('date_dynamic', array($__vars['date'], array(
	))) . '</div>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . $__templater->callMacro(null, 'like_snippet', array(
		'liker' => $__vars['like']['Liker'],
		'post' => $__vars['content'],
		'date' => $__vars['like']['like_date'],
	), $__vars);
	return $__finalCompiled;
});