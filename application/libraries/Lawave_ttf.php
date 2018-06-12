<?php

/**
* Library Lawave_image diciptakan untuk mengolah data gambar/image (Upload, Delete dan membuat Thumbnail).
*
*/
class Lawave_ttf
{
	private $ttf_path;
	private $path = '../dist/';
	const DS = DIRECTORY_SEPARATOR;

	/*
	| DIRECTORY_SEPARATOR digunakan untuk memisahkan directory sesuai sistem operasi yang digunakan
	*/

	/*
	* upload_image digunakan untuk mengupload 1 file gambar,
	* parameter yang dibutuhkan, yaitu :
		1. $img_path 		-> lokasi tujuan file yang diupload
		2. $field_name 	-> nilai dari attribut "name" pada tag input bertipe file
		3. $alt 				-> merupakan alt untuk gambar yang juga digunakan untuk mengganti nama gambar yang diupload
	*/
	function upload_ttf($ttf_folder, $field_name, $alt = NULL)
	{
		$_this =& get_instance();
		$_this->load->library('upload');

		/*
		| get_instace, mendefinisikan "$_this" sebagai pengganti "$this" agar bisa menggunakan fasilitas dari CI
		| me-load library yang akan digunakan
		*/

		$this->ttf_path = realpath(APPPATH . $this->path.$ttf_folder);
		$files 						= $_FILES[$field_name];
		$rand 						= rand(11, 10000);

		/*
		| deklarasi lokasi file (path) ke dalam "$this->image_path"
		| deklarasi Predefined Variables ke dalam variable "$files"
		| $rand -> nilai random yang digunakan sebagai nama file yang diupload
		*/

		$config['upload_path']		= $this->ttf_path;
		$config['allowed_types']	= 'ttf';
		$ext											= explode('.', $files['name']);

		/*
		| konfigurasi lokasi upload
		| konfigurasi tipe gambar (ekstensi) yang diizinkan
		| mendapatkan array nama dan ekstensi file
		*/

		$_FILES[$field_name]['name'] = $alt.'-'.$rand.'.'.$ext[1];

		/*
		| perubahan nama file
		*/

		$_this->upload->initialize($config);
		$_this->upload->do_upload($field_name);

		/*
		| upload file
		*/

		$ttf = $_this->upload->data();

		/*
		| memasukan data file yang diupload kedalam "$image"
		*/

		$data['ttf'] 			= $ttf;
		$data['ttf_path'] = $this->ttf_path;

		return $data;

		/*
		| menampung nilai yang akan dikembalikan (return) kedalam "$data"
		| data dari "$image" yang bisa dikembalikan dapat dilihat di https://www.codeigniter.com/userguide3/libraries/file_uploading.html#class-reference
		| "image_path" mengembalikan nilai berupa lokasi file yang baru diupload
		*/
	}


	public function delete_ttf($ttf_folder, $ttf_name)
	{
		$_this =& get_instance();

		$this->ttf_path = realpath(APPPATH . $this->path.$ttf_folder);

		if (!empty($ttf_name)) {
			unlink($this->ttf_path.self::DS.$ttf_name);

			/*
			| gambar dihapus jika parameter pertama tidak kosong (empty)
			*/

		}
	}
}
