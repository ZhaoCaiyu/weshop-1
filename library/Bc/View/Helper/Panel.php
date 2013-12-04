<?php

class Bc_View_Helper_Panel extends Bc_View_Helper_Base {
	
	public function Breadcrumb($index, $var, $class=null) {
		$menu = &Bc_Config::menu($this->view);
		
		$str = "<ul class='breadcrumb'>";
		$str .= '<li>'.Bc_Config::appConfig()->app_name."<span class='divider'>/</span></li>";
		
		if ($class!==null) {
			$str .= "<li>".$menu['index'][$index][0]."<span class='divider'>/</span></li>";
			$str .= "<li class='active'>".$menu[$var][$class][0]."</li>";
		} else {
			$str .= "<li class='active'>未知分类</li>";
		}
		
		$str .= "</ul>";
		
		return $str;
	}
	
}