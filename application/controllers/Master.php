<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct() {
	    parent::__construct();
        $this->load->model('master_model', '', TRUE);
	}
	public function index()
	{
        $data['codes'] = $this->master_model->load_code();
		$data['syntax'] = $this->get_syntax();
		$this->load->view('master', $data);
	}
	public function get_code($title)
	{
        $data['code'] = $this->master_model->get_code($title);
		$data['syntax'] = $this->get_syntax();
	    $data['validation_errors'] = false;
        if (!$data['code']) {
			$this->load->view('not_found', $data);
			return false;
        }
		$this->load->view('code', $data);
	}
	public function create_code()
	{
    	$code = $data['code']['code'] = $this->input->post('code');
    	$title = $data['code']['title'] = $this->input->post('title');
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('code', 'code', 'required|max_length[1000000]');
	    $this->form_validation->set_rules('title', 'title', 'trim|alpha_dash|required|max_length[64]');
		$data['syntax'] = $this->get_syntax();
	    $data['validation_errors'] = false;
	    if ($this->form_validation->run() == FALSE) {
	        $data['validation_errors'] = validation_errors();
			$this->load->view('code', $data);
			return false;
	    }
        $check_for_existing = $this->master_model->get_code($title);
        if ($check_for_existing) {
		    $data['validation_errors'] = 'This title is already taken';
			$this->load->view('code', $data);
			return false;
		}
    	$query_action = $this->master_model->create_code($code, $title);
    	header('Location: ' . $title);
	}
	public function get_syntax()
	{
		if (isset($_GET['syntax'])) {
			return $_GET['syntax'];
		}
		$syntaxes = [
			'Agate',
			'Androidstudio',
			'Arduino Light',
			'Arta',
			'Ascetic',
			'Atelier Cave Dark',
			'Atelier Cave Light',
			'Atelier Dune Dark',
			'Atelier Dune Light',
			'Atelier Estuary Dark',
			'Atelier Estuary Light',
			'Atelier Forest Dark',
			'Atelier Forest Light',
			'Atelier Heath Dark',
			'Atelier Heath Light',
			'Atelier Lakeside Dark',
			'Atelier Lakeside Light',
			'Atelier Plateau Dark',
			'Atelier Plateau Light',
			'Atelier Savanna Dark',
			'Atelier Savanna Light',
			'Atelier Seaside Dark',
			'Atelier Seaside Light',
			'Atelier Sulphurpool Dark',
			'Atelier Sulphurpool Light',
			'Brown Paper',
			'Codepen Embed',
			'Color Brewer',
			'Dark',
			'Darkula',
			'Docco',
			'Dracula',
			'Far',
			'Foundation',
			'Github Gist',
			'Github',
			'Googlecode',
			'Grayscale',
			'Gruvbox Dark',
			'Gruvbox Light',
			'Hopscotch',
			'Hybrid',
			'Idea',
			'Ir Black',
			'Kimbie Dark',
			'Kimbie Light',
			'Magula',
			'Mono Blue',
			'Monokai Sublime',
			'Monokai',
			'Obsidian',
			'Paraiso Dark',
			'Paraiso Light',
			'Pojoaque',
			'Purebasic',
			'Qtcreator Dark',
			'Qtcreator Light',
			'Railscasts',
			'Rainbow',
			'School Book',
			'Solarized Dark',
			'Solarized Light',
			'Sunburst',
			'Tomorrow Night Blue',
			'Tomorrow Night Bright',
			'Tomorrow Night Eighties',
			'Tomorrow Night',
			'Tomorrow',
			'Vs',
			'Xcode',
			'Xt 256',
			'Zenburn'
		];
		$current_syntax_index = array_rand($syntaxes);
		$syntax_name = $syntaxes[$current_syntax_index];
		$syntax = strtolower(str_replace(' ', '-', $syntax_name));
		return $syntax;
	}
}
