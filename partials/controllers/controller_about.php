
<?php
class Controller_About extends Controller
{
	function action_index()
	{
		$this->view->generate('about_view.tpl', 'template_view.tpl');
	}
}