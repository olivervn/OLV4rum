<?php
// FROM HASH: 0c9bf360393d7c445e9d77fe9fd728e8
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Widgets');
	$__finalCompiled .= '

';
	$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('Thêm widget', array(
		'href' => $__templater->fn('link', array('widgets/add', ), false),
		'icon' => 'add',
		'overlay' => 'true',
	), '', array(
	)) . '
');
	$__finalCompiled .= '

';
	if (!$__templater->test($__vars['groupedWidgets'], 'empty', array())) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-outer">
			' . $__templater->callMacro('filter_macros', 'quick_filter', array(
			'key' => 'widgets',
			'class' => 'block-outer-opposite',
		), $__vars) . '
		</div>
		<div class="block-container">
			<div class="block-body">
				';
		$__compilerTemp1 = '';
		if ($__templater->isTraversable($__vars['positions'])) {
			foreach ($__vars['positions'] AS $__vars['positionId'] => $__vars['position']) {
				$__compilerTemp1 .= '
						';
				if (!$__templater->test($__vars['groupedWidgets'][$__vars['positionId']], 'empty', array())) {
					$__compilerTemp1 .= '
							<tbody class="dataList-rowGroup">
								';
					if ($__vars['positionId'] == '') {
						$__compilerTemp1 .= '
									' . $__templater->dataRow(array(
							'rowtype' => 'subsection',
							'rowclass' => 'dataList-row--noHover',
							'label' => $__vars['xf']['language']['parenthesis_open'] . 'Không có vị trí' . $__vars['xf']['language']['parenthesis_close'],
							'explain' => $__templater->filter('Widget không có vị trí sẽ không xuất hiện ở bất cứ đâu, nhưng bạn có thể gọi trực tiếp các ví dụ widget được định cấu hình trong các mẫu sử dụng cú pháp <code>&lt;xf:widget key="widget_key" /&gt;</code>.', array(array('raw', array()),), true),
							'colspan' => '2',
						), array()) . '
								';
					} else {
						$__compilerTemp1 .= '
									' . $__templater->dataRow(array(
							'rowtype' => 'subsection',
							'rowclass' => 'dataList-row--noHover',
							'label' => $__templater->escape($__vars['position']['title']),
							'explain' => $__templater->filter($__vars['position']['description'], array(array('raw', array()),), true),
							'colspan' => '2',
						), array()) . '
								';
					}
					$__compilerTemp1 .= '
								';
					if ($__templater->isTraversable($__vars['groupedWidgets'][$__vars['positionId']])) {
						foreach ($__vars['groupedWidgets'][$__vars['positionId']] AS $__vars['widget']) {
							$__compilerTemp1 .= '
									' . $__templater->dataRow(array(
								'label' => $__templater->escape($__vars['widget']['title']),
								'hint' => $__templater->escape($__vars['widget']['widget_key']),
								'href' => $__templater->fn('link', array('widgets/edit', $__vars['widget'], ), false),
							), array(array(
								'href' => $__templater->fn('link', array('widgets/delete', $__vars['widget'], ($__vars['positionId'] ? array('position_id' => $__vars['positionId'], ) : array()), ), false),
								'tooltip' => ($__vars['positionId'] ? 'Delete from this position' : 'Xóa'),
								'_type' => 'delete',
								'html' => '',
							))) . '
								';
						}
					}
					$__compilerTemp1 .= '
							</tbody>
						';
				}
				$__compilerTemp1 .= '
					';
			}
		}
		$__finalCompiled .= $__templater->dataList('
					' . $__compilerTemp1 . '
				', array(
		)) . '
				<div class="block-footer">
					<span class="block-footer-counter">' . $__templater->fn('display_totals', array($__vars['totalWidgets'], ), true) . '</span>
				</div>
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