<?php
class View
{
	
	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			extract($data);
		}
		*/
		
		include 'partials/views/'.$template_view;
	}
}

