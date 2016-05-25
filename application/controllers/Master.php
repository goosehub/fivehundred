<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function index()
	{
		$data['syntaxes'] = $this->list_syntaxes();
		$data['current_syntax'] = array_rand($data['syntaxes']);
		$this->load->view('master', $data);
	}
	public function new_code()
	{
		$data['syntaxes'] = $this->list_syntaxes();
		$data['current_syntax'] = array_rand($data['syntaxes']);
		$this->load->view('new', $data);
	}
	public function list_syntaxes()
	{
		return [
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
	}
}
