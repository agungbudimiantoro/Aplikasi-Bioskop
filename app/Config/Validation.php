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
	public $bayar = [
		'kd_transaksi' => 'required'
	];

	public $bayar_errors = [
		'kd_ruangan' => [
			'required'      => 'kode ruangan wajib diisi',
		]
	];
	public $ruangan = [
		'kd_ruangan' => 'required|min_length[2]',
		'no_ruangan' => 'required|max_length[5]'
	];

	public $ruangan_errors = [
		'kd_ruangan' => [
			'required'      => 'kode ruangan wajib diisi',
			'min_length'    => 'kode ruangan minimal terdiri dari 2 karakter'
		],
		'no_ruangan' => [
			'required'      => 'Nomor Ruangan Tidak boleh kosong',
			'max_length'    => 'nomor Ruangan terlalu panjang'
		]
	];

	public $transaksi = [
		'kd_kursi' => 'required',
		'NIK' => 'required|min_length[16]',
		'harga' => 'required',
		'status' => 'required',
		'metode' => 'required',
	];

	public $transaksi_errors = [
		'kd_kursi' => [
			'required'      => 'Nomor Kursi Tidak boleh kosong'
		],
		'status' => [
			'required'      => 'status Tidak boleh kosong'
		],
		'harga' => [
			'required'      => 'harga Tidak boleh kosong'
		],
		'NIK' => [
			'required'      => 'NIK wajib diisi',
			'min_length'    => 'NIK salah',
			'max_length'    => 'NIK salah',
		],
	];

	public $penayangan = [
		'kd_penayangan' => 'required|min_length[2]',
		'kd_ruangan' => 'required|min_length[2]',
		'kd_film' => 'required|min_length[2]',
		'tanggal' => 'valid_date|required',
		'waktu_mulai' => 'required',
	];

	public $penayangan_errors = [
		'kd_penayangan' => [
			'required'      => 'kode penayangan wajib diisi',
			'min_length'    => 'kode penayangan minimal terdiri dari 2 karakter'
		],
		'kd_ruangan' => [
			'required'      => 'kode ruangan wajib diisi',
			'min_length'    => 'kode ruangan minimal terdiri dari 2 karakter'
		],
		'kd_film' => [
			'required'      => 'kode film wajib diisi',
			'min_length'    => 'kode film minimal terdiri dari 2 karakter'
		],
		'tanggal' => [
			'required'      => 'tanggal wajib diisi',
			'valid_date'    => 'tanggal salah'
		],
		'waktu_mulai' => [
			'required'      => 'tanggal wajib diisi',
		]
	];


	public $kursi = [
		'kd_kursi' => 'required|min_length[2]',
		'no_kursi' => 'required',
		'kd_ruangan' => 'required|min_length[2]'
	];

	public $kursi_errors = [
		'kd_kursi' => [
			'required'      => 'kode kursi wajib diisi',
			'min_length'    => 'kode kursi minimal terdiri dari 2 karakter'
		],
		'no_kursi' => [
			'required'      => 'Nomor kursi Tidak boleh kosong'
		],
		'kd_ruangan' => [
			'required'      => 'Nomor Ruangan Tidak boleh kosong',
			'min_length'    => 'Kd Ruangan minimal terdiri dari 2 karakter'
		]
	];
	public $admin = [
		'id_admin' => 'required|min_length[2]',
		'username' => 'required|min_length[3]|max_length[15]',
		'password' => 'required|min_length[8]|max_length[20]|matches[password2]',
		'jk'       => 'required',
		'alamat'   => 'required|min_length[10]',
		'nama'     => 'required'
	];

	public $admin_errors = [
		'id_admin' => [
			'required'      => 'kode admin wajib diisi',
			'min_length'    => 'kode admin minimal terdiri dari 2 karakter'
		],
		'username' => [
			'required'      => 'username wajib diisi',
			'min_length'    => 'username minimal terdiri dari 3 karakter',
			'max_length'    => 'username terlalu panjang'
		],
		'password' => [
			'required'      => 'password wajib diisi',
			'min_length'    => 'password minimal 8 karakter',
			'max_length'    => 'password terlalu panjang',
			'matches'       => 'password tidak sama'
		],
		'jk' => [
			'required'      => 'Pilih jenis kelamin',
		],
		'alamat' => [
			'required'      => 'tulis alamat anda',
			'min_length'    => 'alamat terlalu pendek',
		],
		'nama' => [
			'required'      => 'tulis nama anda',
		],
	];

	public $film = [
		'kd_film'   => 'required|min_length[2]',
		'judul'     => 'required',
		'tahun'     => 'required|numeric|less_than[2030]|greater_than[1950]',
		'durasi'    => 'required',
		'sinopsis'  => 'required',
		'namagambar'    => 'required',
	];

	public $film_errors = [
		'kd_film' => [
			'required'      => 'kode film wajib diisi',
			'min_length'    => 'kode film minimal terdiri dari 2 karakter'
		],
		'judul' => [
			'required'      => 'judul wajib diisi',
		],
		'tahun' => [
			'required'      => 'tahun wajib diisi',
			'numeric'       => 'tahun tidak valid',
			'less_than'     => 'tahun tidak valid',
			'greater_than'  => 'tahun film terlalu lama',
		],
		'durasi' => [
			'required'      => 'durasi wajib diisi'
		],
		'sinopsis' => [
			'required'      => 'sinopsis wajib diisi'
		],
		'namagambar' => [
			'required'      => 'gambar wajib diisi'
		]
	];

	public $registrasi = [
		'NIK' => 'required|min_length[16]',
		'username' => 'required|min_length[3]|max_length[15]|max_length[16]',
		'password' => 'required|min_length[8]|max_length[20]|matches[password2]',
		'jk'       => 'required',
		'alamat'   => 'required|min_length[10]',
		'nama'     => 'required',
		'email'    => 'valid_email'
	];

	public $registrasi_errors = [
		'NIK' => [
			'required'      => 'NIK wajib diisi',
			'min_length'    => 'NIK salah',
			'max_length'    => 'NIK salah',
		],
		'username' => [
			'required'      => 'username wajib diisi',
			'min_length'    => 'username minimal terdiri dari 3 karakter',
			'max_length'    => 'username terlalu panjang'
		],
		'password' => [
			'required'      => 'password wajib diisi',
			'min_length'    => 'password minimal 8 karakter',
			'max_length'    => 'password terlalu panjang',
			'matches'       => 'password tidak sama'
		],
		'jk' => [
			'required'      => 'Pilih jenis kelamin',
		],
		'alamat' => [
			'required'      => 'tulis alamat anda',
			'min_length'    => 'alamat terlalu pendek',
		],
		'nama' => [
			'required'      => 'tulis nama anda',
		], 'email' => [
			'valid_email'  => 'email tidak valid'
		]
	];
	//--------------------------------------------------------------------
}
