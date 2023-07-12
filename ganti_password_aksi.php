public function ganti_password_aksi()
{
// form validiasi
$this->form_validation->set_rules('password_lama', 'password Lama', 'required');
$this->form_validation->set_rules('password_baru', 'password Baru', 'required|min_length[8]');
$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password Baru', 'required|matches[password_baru]');

// cek validiasi
if ($this->form_validation->run() != false) {
// menangkap data dari forum
$password_lama = $this->input->post('password_lama');
$password_baru = $this->input->post('password_baru');
$konfirmasi_password = $this->input->post('konfirmasi_password');

// cek kesusaisan password lama dengan id pengguna yang sedang login dan passowrd lama

$where = array(
'pengguna_id' => $this->session->userdata('id'),
'pengguna_password' => md5($password_lama)
);
$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

// cek kesusuaikan password lama
if ($cek > 0) {
// update data passowrd pengguna

$w = array(
'pengguna_id' => $this->session->userdata('id')
);
$data = array(
'pengguna_password' => md5($password_baru)
);
$this->m_data->update_data($where, $data, 'pengguna');

// alihkan lama kemabli ke halaman ganti password
redirect('dashboard/ganti_password?alert=sukses');
} else {
// alihkan halaman kemabli ke halaman ganti password
redirect('dashboard/ganti_password?alert=gagal');
}
} else {
$this->load->view('dashboard/v_header');
$this->load->view('dashboard/v_ganti_password');
$this->load->view('dashboard/v_footer');
}
}