<?php

function shortcode_portrait_group($atts, $content = null) {
    extract(shortcode_atts(array(
    ), $atts));

	$response = '<div class="portrait_group"><table class="portrait_table"><tr>';	
                                      
	$response .= str_replace('<br />','', do_shortcode($content));

	$response .= '</tr></table></div>';

    return $response;
}

add_shortcode('portrait_group', 'shortcode_portrait_group');


function shortcode_member_portrait($atts) {
	extract(shortcode_atts(array(
		'id' => 'unspecified',
		'name' => 'No name',
		'jobs' => NULL,		
	), $atts));

	$response = '<td><div class="member_portrait">';

	$response .= '<img src="/img/portrait/'. $id .'.png" /><p class="member_portrait_name">' . $name .'</p>';

	if ($jobs !== NULL) {
		$student_jobs = explode(',', $jobs);
		$response .= '<ul>';
		foreach ($student_jobs as $job) {
			$response .= '<li>'. trim($job) .'</li>';
		}
		$response .= '</ul>';
	}

	$response .= '</div></td>';

	return $response;
}

add_shortcode('member_portrait', 'shortcode_member_portrait');

function shortcode_hidden_content($atts, $content = null) {
    return '';
}

add_shortcode('hidden_content', 'shortcode_hidden_content');

?>
