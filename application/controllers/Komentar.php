<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function index()
	{
		$config = [
			"img_path" => "./captcha/",
			"img_url" => base_url('captcha'),
			"img_width" => 160,
			"img_height" => 30,
			"border" => 4,
			"expiration" => 30, //gambar otomatis terhapus
			'word_length'   => 4,
			'font_size'     => 30,
			'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',


			'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)

		];

		

		$captcha = create_captcha($config);

		$this->session->set_userdata('captcha_word', $captcha['word']);

		$data["image"] = $captcha['image'];

		$this->load->view('komentar/index', $data);
	}

	public function simpanKomentar()
	{
		$currentCaptcha = $this->session->userdata('captcha_word');
		$sendedCaptcha = $this->input->post('captcha');

		if($currentCaptcha = $sendedCaptcha) {
			echo "captcha benar";
		}else{
			echo "captcha salah";
		}

	}
}
