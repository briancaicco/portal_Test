<?php
if( ! $count ){
	return;
}

$temp_shift = HC_App::model('shift');
$linkto = HC_Lib::link('list/index', 
	array(
		'filter'	=> 'conflicts',
		)
	);

$title = HC_Html_Factory::widget('list')
	->add_children_style('inline')
	->add_children_style('margin')
	->add_child( HC_Html::icon( HC_App::icon_for('conflict')) )
	->add_child('title',
		HC_Html_Factory::widget('titled', 'a')
			->add_attr('href', $linkto)
			->add_style('btn')
			->add_child( HCM::__('Conflicts') )
		)
	->add_child('count', 
		HC_Html_Factory::element('span')
			->add_child( $count )
			->add_style('label')
		)
	;

$out = HC_Html_Factory::element('div')
	->add_child( $title )
	->add_style('box')
	->add_style('bg-color', 'red')
	->add_style('color', 'white')
	;

echo $out->render();