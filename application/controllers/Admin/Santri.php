<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class Santri extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_santri');
 	}

	public function random($panjang) {
        $karakter = '1234567890987654321';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
 	public function tambah_santri()
 	{
 		$id_santri = "STR00".$this->random(3);
 		$data['id']=$id_santri;
 		$data['nama']= $this->input->post('TambahNamaSantri');
 		$data['panggilan']=$this->input->post('tambahPanggilan');
 		$data['tempat_lahir']=$this->input->post('TambahKelahiran');
 		$data['tgl_lahir']=$this->input->post('tambahTglLahir');
 		$data['jenis_kelamin']=$this->input->post('tambahGender');
 		$data['alamat']=$this->input->post('tambahAlamat');
 		$data['noTelpon']=$this->input->post('tambahNoTelp');
 		$data['email']=$this->input->post('tambahEmail');
 		$data['facebook']=$this->input->post('tambahFacebook');
 		$data['tahun_masuk']=$this->input->post('tambahTahunMasuk');
 		$data['tahun_boyong']=$this->input->post('tambahTahunMasuk');
 		$data['password']=base64_encode($this->input->post('tambahPanggilan'));
 		$data['status']='1';
 		$data['level']='1';
 		$this->M_santri->tambah_santri($data);
 		$this->session->set_flashdata('sukses','santri baru berhasil ditambahkan');
 		redirect('Dashboard/santri_baru');
 		unset($id_santri, $data);

 	}

 	public function editSantri($id_santri)
 	{
 		$data['page'] = 'ubah_santri';
 		$data['ubah_str'] = $this->M_santri->edit_santri($id_santri)->row();
 		$this->load->view('Dashboard', $data);
 		unset($id_santri, $data);
 	}

 	public function UpdateSantri()
 	{
 		$idSantri = $this->input->post('editIDSantri');
 		$data['nama']=$this->input->post('editNamaSantri');
 		$data['panggilan']=$this->input->post('editPanggilan');
 		$data['kelahiran']=$this->input->post('editKelahiran');
 		$data['tgl_lahir']=$this->input->post('editTglLahir');
 		$data['kelamin']=$this->input->post('editGender');
 		$data['alamat']=$this->input->post('editAlamat');
 		$data['telpon']=$this->input->post('editNoTelp');
 		$data['email']=$this->input->post('editEmail');
 		$data['facebook']=$this->input->post('editFacebook');
 		$data['tahun_masuk']=$this->input->post('editTahunMasuk');
 		$data['tahun_boyong']=$this->input->post('editTahunBoyong');
 		$this->M_santri->update_santri($idSantri, $data);
 		$this->session->set_flashdata('sukses','Data santri berhasil di update');
 		redirect('Dashboard/santri_baru');
 		unset($idSantri, $data);
 	}

 	public function ubahStatus($id)
 	{
 		$this->M_santri->jadikanPengurus($id);
 		$this->session->set_flashdata('sukses','Data santri berhasil dijadikan pengurus');
 		redirect('Dashboard/santri_baru');
 		unset($id);
 	}

 	public function lepasPengurus($id)
 	{
 		$this->M_santri->lepaskanPengurus($id);
 		$this->session->set_flashdata('sukses','Data santri telah diberhentikan sebagai pengurus');
 		redirect('Dashboard/santri_baru');
 		unset($id);
 	}

 	public function hapusSantri($id)
 	{
 		$data = $this->M_santri->hapus_santri($id);
 		if ($data) {
 			$this->session->set_flashdata('sukses','Data santri berhasil dihapus');
 			redirect('Dashboard/santri_baru');
 		}else{
 			$this->session->set_flashdata('gagal','terjadi kesalahan pada proses hapus data');
 			redirect('Dashboard/santri_baru');
 		}
 		unset($data, $id);
 	}
 } ?>