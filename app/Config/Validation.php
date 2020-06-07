<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	public $ruangan = [
		'kd_ruangan' => 'required|min_length[2]',
		'no_ruangan' => 'required'
	];

	public $ruangan_errors = [
		'kd_ruangan' => [
			'required'      => 'kode ruangan wajib diisi',
			'min_length'    => 'kode ruangan minimal terdiri dari 2 karakter'
		],
		'no_ruangan' => [
			'required'      => 'Nomor Ruangan Tidak boleh kosong'
		]
	];

	//--------------------------------------------------------------------
}
