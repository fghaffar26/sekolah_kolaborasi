<?php

namespace App\Controllers;

use \App\Models\UsulanSmaModel;
use \App\Models\UsulanSmpModel;
use \App\Models\GalleryModel;

class Home extends BaseController
{
	public function index()
	{
		$smaModel = new UsulanSmaModel();
		$smpModel = new UsulanSmpModel();
		$galleryModel = new GalleryModel();
		$data = [
			'sma' => $smaModel->findAll(),
			'smp' => $smpModel->findAll(),
			'gallery' => $galleryModel->findAll()
		];
		return view('index', $data);
	}
}
