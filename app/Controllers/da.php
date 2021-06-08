<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Da extends BaseController
{
	public function index()
	{
		echo view('Vistaindex').view('Vistaindexindex');
	}
	public function tablero()
	{
		echo view('Vistaindex').view('Vistaindextablero');
	}
	public function estadisticas()
	{
		echo view('Vistaindex').view('Vistaindexestadisticas');
	}
	public function perfil()
	{
		echo view('Vistaindex').view('Vistaindexperfil');
	}
	public function configuraciones()
	{
		echo view('Vistaindex').view('Vistaindexconfiguraciones');
	}
}


	//--------------------------------------------------------------------

