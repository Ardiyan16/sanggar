<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('Auth/style/v_header');
		$this->load->view('Auth/page/v_login');
		$this->load->view('Auth/style/v_footer');
	}

	public function loading()
	{
		$this->load->view('auth/page/v_loading');
	}

	public function loading2()
	{
		$this->load->view('auth/page/v_loading2');
	}

	public function ceklogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Auth/style/v_header');
			$this->load->view('Auth/page/v_login');
			$this->load->view('Auth/style/v_footer');
		} else {
			$post = $this->input->post();
			$username = $post['username'];
			$password = $post['password'];
			$qry = $this->AuthModel->cekAuth($username, $password);
			if ($qry) {
				redirect('backoffice/dashboard');
			} else {
				echo ("Password Salah");
			}
		}
	}

	public function register()
	{
		$this->load->view('Auth/style/v_header');
		$this->load->view('Auth/page/v_register');
		$this->load->view('Auth/style/v_footer');
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'citrabudayasanggartari@gmail.com',
			'smtp_pass' => 'sanggartari2021',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];
		$this->load->library('email', $config);
		$this->email->from('citrabudayasanggartari@gmail.com', 'Sanggar Tari Citra Budaya');

		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun Anda');
			$this->email->message('Silahkan klik link untuk verifikasi akun anda : <a href="' . base_url() . 'Auth/verify?email=' . $this->input->post('email') .
				'&token=' . urlencode($token) . '">verifikasi akun anda</a>');
		} else if ($type == 'forgot') {
			$this->email->subject('Ganti Password Anda');
			$this->email->message('Silahkan klik link untuk mengubah password anda : <a href="' . base_url() . 'Auth/ganti_pass?email=' . $this->input->post('email') .
				'&token=' . urlencode($token) . '">ubah password anda</a>');
		}


		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {

			$usertoken = $this->db->get_where('tb_token', ['token' => $token])->row_array();

			if ($usertoken) {

				if (time() - $usertoken['date_created'] < (60 * 60 * 24)) {

					$this->db->set('aktif', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->db->delete('tb_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' telah terverifikasi</div>');
					redirect('Auth/login_user');
				} else {

					$this->db->delete('tb_user', ['email' => $email]);
					$this->db->delete('tb_token', ['token' => $token]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Token anda kadaluarsa!</div>');
					redirect('Auth/login_user');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Token Salah!</div>');
				redirect('Auth/login_user');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Email Salah!</div>');
			redirect('Auth/login_user');
		}
	}

	public function forgot_pass()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'email tidak boleh kosong']);
		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/page/v_forgot');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('tb_user', ['email' => $email, 'aktif' => 1])->row_array();

			if ($user) {

				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('tb_token', $user_token);
				$this->_sendEmail($token, 'forgot');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Cek email anda untuk mengubah password!</div>');
				redirect('Auth/loading2');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda tidak terdaftar atau belum verifikasi!</div>');
				redirect('Auth/forgot_pass');
			}
		}
	}

	public function ubah_pass()
	{
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['required' => 'password tidak boleh kosong']);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]', ['matches' => 'konfirmasi password salah']);

		if ($this->form_validation->run() == false) {

			$this->load->view('auth/page/v_forgot2');
		} else {

			$password = $this->input->post('password1');
			$email = $this->session->userdata('ganti_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->session->unset_userdata('ganti_email');

			$this->db->delete('tb_token', ['email' => $email]);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password anda berhasil di ubah</div>');
			redirect('Auth/login_user');
		}
	}

	public function ganti_pass()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');


		$pengguna = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($pengguna) {

			$user_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('ganti_email', $email);
				$this->ubah_pass();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda gagal ganti password! Token salah!</div>');
				redirect('Auth/login_user');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda gagal ganti password! Email salah!</div>');
			redirect('Auth/login_user');
		}
	}

	public function login_user()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim', ['required' => 'email tidak boleh kosong']);
		//$this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'nama pengguna tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);

		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/page/v_login_user');
		} else {
			$this->proses_login_user();
		}
	}

	private function proses_login_user()
	{
		$email = $this->input->post('email');
		//$username = $this->input->post('email');
		$password = $this->input->post('password');

		$pengguna = $this->db->get_where('tb_user', ['email' => $email])->row_array();
		//$pengguna = $this->db->get_where('tb_user', ['username' => $email])->row_array();
		$cekpass = $this->db->get_where('tb_user', array('password' => $password));


		//jika usernya terdaftar
		if ($pengguna) {
			//jika akun user aktif
			if ($pengguna['aktif'] == 1) {
				//cek password
				if ($cekpass->num_rows() > 0) {

					$data = [
						'email' => $pengguna['email'],
						'username' => $pengguna['username'],
						'id_user' => $pengguna['id_user'],
						'foto' => $pengguna['foto']
					];
					$data['logged_in'] = TRUE;
					$this->session->set_userdata($data);
					if ($pengguna['status'] == 'anggota sanggar') {
						redirect('Beranda/beranda_anggota');
					} else if ($pengguna['status'] == 'umum') {
						redirect('Beranda/beranda_umum');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">role anda tidak di temukan!</div>');
						redirect('Auth/login_user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf password yang anda masukkan salah!</div>');
					redirect('Auth/login_user');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Akun anda belum di verifikasi!</div>');
				redirect('Auth/login_user');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf username atau email yang anda masukkan salah!</div>');
			redirect('Auth/login_user');
		}
	}

	public function register_user()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'nama lengkap tidak boleh kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'nama pengguna tidak boleh kosong']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', ['required' => 'email tidak boleh kosong'], ['is_unique' => 'email telah terdaftar']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'alamat tidak boleh kosong']);
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|trim|max_length[13]', ['required' => 'No Telepon tidak boleh kosong'], ['max_length' => 'No Telepon tidak boleh lebih dari 13 karakter']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/page/v_register_user');
		} else {
			$this->proses_register_user();
		}
	}

	private function proses_register_user()
	{
		$email = $this->input->post('email', true);
		$username = $this->input->post('username', true);
		$data = [
			'email' => htmlspecialchars($email),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => htmlspecialchars($username),
			'alamat' => $this->input->post('alamat'),
			'no_telepon' => $this->input->post('no_telepon'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'kategori' => $this->input->post('kategori'),
			'status' => $this->input->post('status'),
			'password' => $this->input->post('password'),
			'aktif' => 0,
			'date_created' => time(),
		];

		$token = base64_encode(random_bytes(30));
		$user_token = [
			'email' => $email,
			'token' => $token,
			'date_created' => time()
		];
		$this->db->insert('tb_user', $data);
		$this->db->insert('tb_token', $user_token);

		$this->_sendEmail($token, 'verify');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anda berhasil di simpan</div>');
		redirect('Auth/loading');
	}

	public function logout_user()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda telah logout</div>');
		redirect('Beranda');
	}
}
