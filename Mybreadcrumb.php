<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Mybreadcrumb {

	private $breadcrumbs = array();

	function add($title, $href){		
		if (!$title OR !$href) return;
		$this->breadcrumbs[] = array('title' => $title, 'href' => $href);
	}
	
	function render(){

		$output = '<ol class="breadcrumb">';
		$count = count($this->breadcrumbs)-1;
		foreach($this->breadcrumbs as $index => $breadcrumb){
		
			if($index == $count){
				$output .= '<li class="active">';
				$output .= $breadcrumb['title'];
				$output .= '</li>';
			}else{
				$output .= '<li>';
				$output .= '<a href="'.$breadcrumb['href'].'">';
				$output .= $breadcrumb['title'];
				$output .= '</a>';
				$output .= '</li>';
			}
			
		}
		$output .= "</ol>";

		return $output;
	}

}