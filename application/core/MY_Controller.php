<?php

/*-----------------*/
/*
* CLASS UTAMA MY_CONTROLLER
*/
/*-----------------*/
class MY_Controller extends CI_Controller
{
	/*-----------------*/
	/*
	*	DIRECTORY_SEPARATOR membaca separator path sesuai OS yang digunakan | digunakan ketika meload file gambar dari path
	* @thumb_pre = preffix name / nama depan yang dihunakan untuk thumbnail yg dibuat dari gambar yang diupload | digunakan ketika proses upload dan pada atribut src dalam tag img <img src>
	*	@img_path = lokasi utama penyimpanan gambar yang diupload | digunakan ketika upload dan menampilkan file gambar
	*	@file_path = lokasi utama penyimpanan file / dokumen yang diupload | digunakan ketika upload dan menampilkan file gambar
	*/
	/*-----------------*/
	const DS 										= DIRECTORY_SEPARATOR;
	protected $thumb_pre 				= 'thumb-';
	protected $img_path 				= 'uploads/img/';
	protected $file_path 				= 'uploads/files/';

	/*-----------------*/
	/*
	* PARENT UTAMA MY_CONTROLLER
	*	SEMUA YANG AKAN DITAMPILKAN DI FRONT-END DAN JUGA BACK-END DAPAT DIDEKLARASIKAN DISINI
	*/
	/*-----------------*/
	public function __construct()
	{
		parent::__construct();

		/*-----------------*/
		/*
		* meload model yang dibutuhkan
		*/
		/*-----------------*/
		$this->load->model(
			array(
				'about_model',
				'user_model',
				'contact_model',
				'text_model',
				'services_model',
				'catservices_model',
				'portofolio_model',
				'banner_model',
				'slide_model',
				'login_model',
				'image_model',
				'site_model',
				'seo_model',
			)
		);

		/*-----------------*/
		/*
		* mendeklarasikan uri-segment ke 1 sampai ke 3 yang biasa digunakan di back-end maupun front-end
		*/
		/*-----------------*/
		$this->data['uri_1'] = $this->uri->segment(1);
		$this->data['uri_2'] = $this->uri->segment(2);
		$this->data['uri_3'] = $this->uri->segment(3);
		/*kirim base-url*/
		$this->data['base_url'] = base_url();
		$this->data['site_url'] = site_url();
		/*general_site*/
		$this->data['site'] = $this->site_model->get(1);
		// logo dan favicon

		// echo "<pre>";
		// print_r($this->data['site_image']);
		// echo "</pre>";
		// die();
	}
}

/*-----------------*/
/*
* CLASS UTAMA FRONT-END YANG MENGINDUK PADA MY_CONTROLLER
*	SEMUA CLASS FRONT-END MENGINDUK PADA CLASS INI
*	ELEMEN YANG AKAN SELALU DITAMPILKAN DI FRONT-END (HANYA DI FRONT-END) DAPAT DIDEKLARASIKAN DISINI
*/
/*-----------------*/
class Frontend_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		/*-----------------*/
		/*
		*	@http_build = membangun url $_get
		*	@member_access = digunakan untuk mengakses halaman member-area jika bernilai TRUE
		*	@cart_session = membungkus fungsi $this->session->userdata['cart'] jika sudah tersedia. session ini dibuat di controller > keranjang | digunakan sebagai session keranjang belanja
		*	@cart_count = untuk menghitung jumlah item yang dibeli berdasarkan cart_session
		*	cart_product_session = digunakan untuk menampung id_product yg telah diorder berdasarkan cart_session
		*/
		/*-----------------*/
		$this->where_product['{PRE}product.product_pub'] 	= '99';
		$this->where_product['{PRE}image.image_seq'] 			= '0';
		$this->where_product['{PRE}image.image_parent_name'] = 'product';
		$this->where_count_product['product_pub']					= '99';
		$this->like_product																= array();
		$this->like_count_product													= array();
		$http_build																				= array();

		/*pengaturan metadata*/
		/*jika uri-1 tidak tersedia, maka gunakan data general_site untuk mengisi meta data*/
		if (empty($this->data['uri_1'])) {
			$this->data['metadata_site'] = $this->site_model->get(1);
		}

		else {
			/*jika uri-1 tersedia dan nilai dari uri-1 terdapad dalam table seo->seo_page*/
			/*maka metadata menggunakan data dari seo*/
			$count_seo = $this->seo_model->count(array('seo_page' => $this->data['uri_1']));

			if ($count_seo > 0) {
				$this->data['metadata_seo'] = $this->seo_model->get_by(array('seo_page' => $this->data['uri_1']), 1, NULL, TRUE);

				$product = array('category', 'detail');
				if (!empty($this->uri->segment(2)) && $this->uri->segment(1) == 'product' && in_array($this->uri->segment(2), $product)) {
					if ($this->uri->segment(2) == 'category')
					{
						$link = $this->uri->segment(3);
						$this->data['seo_cat'] = $this->category_model->get_by(array('category_link' => $link), 1, NULL, TRUE);
					}
					else
					{
						$link = $this->uri->segment(3);
						$this->data['seo_detail'] = $this->product_model->get_by(array('product_link' => $link), 1, NULL, TRUE);
					}
				}
				elseif ($this->uri->segment(1) == 'activity' && !empty($this->uri->segment(3))) {
					// die('masuk ndak');
					$link = $this->uri->segment(3);
					$this->data['seo_activity'] = $this->activity_model->get_by(array('activity_link' => $link), 1, NULL, TRUE);
				}
			}

			else {
				$this->data['metadata_site'] = $this->site_model->get(1);
			}
		}

		if (!empty($_GET['s'])) {
			$produk = array('product_name' => $_GET['s']);
			$this->like_product = $produk;
			$this->like_count_product = $produk;
			$http_build[] = $_GET['s'];
		}

		/*hasil dari $http_build*/
		$this->data['http_result'] = http_build_query($http_build);
		$this->data['contact'] = $this->contact_model->get(1);
		$this->data['text'] = $this->text_model->get(1);

		$this->data['about_list'] = array(
			'our-firm', 'our-service', 'our-partners', 'our-clients',
			'benefits-for-our-client', 'international-association'
		);

		$categories = $this->catservices_model->get_by(array('catservices_pub' => '99'));
		$this->data['cat_all'] = $this->catservices_model->olahData($categories, FALSE);

		$porto = site_url('portfolio');
		$in = array(
			'header_txt' => 'Tahukah kamu pentingnya sistem mekanikal dan elektrikal (ME) untuk suatu bangunan ?',
			'header_txtLink' => 'Klik <a href="#sistem_utilitas_l"><strong><u>di sini</u></strong></a>  untuk mengetahuinya !',
			'utilitas' => 'SISTEM MEKANIKAL DAN ELEKTRIKAL (SISTEM UTILITAS)',
			'txtPortofolio' => "Atau klik <a class='cblue_opa' href='$porto'><strong>di sini</strong></a> untuk melihat semua proyek ME yang telah kami kerjakan.",
			'txtporto_view' => 'Di bawah ini merupakan <em>project-project</em> yang sudah kami kerjakan.',
			'portoviewdetail' => 'Klik di sini untuk melihat semua foto dari',
			'clickforfull' => 'Klik di sini untuk tampilkan gambar secara penuh',
			'downloadpdf' => 'Anda bisa mendownload file PDF untuk project ini pada tombol di bawah ini. ',
			'readmore' => 'Baca Selengkapnya',
			'contact_us' => 'Jika Anda memerlukan informasi lebih lanjut, silakan <span><a href="#cont-contact" class="cblue_opa">hubungi kami</a></span> di bawah ini'
		);
		$en = array(
			'header_txt' => 'Did you know the importance of mechanical and electrical systems (ME) for a building ?',
			'header_txtLink' => 'Click <a href="#sistem_utilitas_l"><strong><u>here</u></strong></a>  to find out !',
			'utilitas' => 'MECHANICAL AND ELECTRICAL SYSTEMS (ME)',
			'txtPortofolio' => "Or click <a class='cblue_opa' href='$porto'><strong>here</strong></a> to see all the ME projects we've worked on.",
			'txtporto_view' => 'Below are the <em> projects </em> we have been working on.',
			'portoviewdetail' => 'Click here to see all photos from',
			'clickforfull' => 'Click here to view the full picture',
			'downloadpdf' => 'You can download a PDF file for this project on the button below.',
			'readmore' => 'Read More',
			'contact_us' => 'if you need more information, please <span><a href="#cont-contact" class="cblue_opa">contact us</a></span> below'
		);
		//cek session bahasa
		$userdata = $this->session->userdata;
		(isset($userdata['lang'])) ? $lang = $userdata['lang'] : $lang = 'english';

		//cek bahasa
		if ($lang == 'english') {
			$this->data['lang'] = $en;
		}else {
			$this->data['lang'] = $in;
		}

		$this->data['lang_active'] = $lang;
	}
}

class Backend_Controller extends MY_Controller
{
	protected $delete_text 			= 'Data has been removed.';
	protected $add_text 				= 'Data has been added.';
	protected $edit_text 				= 'Data has been updated.';
	protected $publish_text			= 'Data has been published.';
	protected $unpublish_text		= 'Data unpublished.';
	protected $block_text				= 'Member has been disabled.';
	protected $unblock_text			= 'Member enabled.';
	protected $pass_inc_text 		= 'Incorrect old password.';
	protected $too_large_text 	= 'Image is too large.';
	protected $not_found				= 'Data not found';

	public function __construct()
	{
		parent::__construct();

		is_logged_in();

		/*array active menu = digunakan untuk menentukan menu utama yang aktif ketika halaman / modul tertentu dibuka */
		$this->data['menu'] = array(
			'profile' => array('about', 'contact' ),
			'news' => array('news', 'event'),
			'about' => array('firm', 'category', 'services', 'partners', 'clients', 'benefits', 'international'),
			'services' => array('services', 'catservices'),
			'member' => array('member'),
			'misscellaneous' => array('slide', 'banner'),
			'seo' => array('seo', 'site')
			);

		/*
		| VALIDASI AKSES HALAMAN ADMINISTRATOR
		|
		| $id => hasil dari dekripsi (decode) session user_session.
		| pengambilan data table lwd_user.user_id dengan filter user_id = $id.
		| session is_login. Untuk dapat mengakses halaman admin, session ini harus bernilai TRUE.
		| session user_session. Untuk mengakses halaman admin, nilai session ini tidak boleh kosong.
		| hasil decode session user_session harus sesuai dengan salah satu record pada table lwd_user.user_id.
		| melakukan direct jika (salah satu atau semua) kondisi tidak terpenuhi.
		*/

		// $id = $this->encrypt->decode(hash_link_decode($this->session->userdata('user_session')));
		// $user_log = $this->login_model->get($id);

		// $this->session->userdata('is_login') == TRUE &&
		// !empty($this->session->userdata('user_session')) &&
		// $id === $user_log->user_id
		// 	|| redirect(site_url());
	}
}
