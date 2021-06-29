<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pengajar extends CI_Controller
{

    // Index Untuk Pengajar
    public function index()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/dashboard', $data);
        $this->load->view('part/footer');
    }

    // Data Pengajar
    // public function dataPengajar()
    // {
    //     $data['pengajar'] = $this->Pengajar_model->view('el_pengajar')->result();
    //     $this->load->view('part/header');
    //     $this->load->view('part/sidebarpengajar');
    //     $this->load->view('pengajar/dataPengajar', $data);
    //     $this->load->view('part/footer');
    // }

    // profile Pengajar
    public function profile()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['profile'] = $this->Pengajar_model->getProfilePengajar($this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/profile', $data);
        $this->load->view('part/footer');
    }

    // Update Gambar
    public function updateGambar()
    {
        $config['upload_path']          = './assets/images/user/';
        $config['allowed_types']        = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('file-input');
        if (!$upload) {
            $data['profile'] = $this->Pengajar_model->getProfilePengajar($this->session->userdata('id'))->result();
            $this->session->set_flashdata('error', $this->upload->display_errors());

            $this->load->view('part/header');
            $this->load->view('part/sidebarsiswa');
            $this->load->view('pengajar/profile', $data);
            $this->load->view('part/footer');
        } else {
            $upload = $this->upload->data();
            $data = array(
                'foto' => $upload['file_name']
            );

            $array = array(
                'foto' => $upload['file_name']
            );
            $this->session->set_userdata($array);

            $this->Pengajar_model->updateImage($data, $this->session->userdata('id'));
            redirect('pengajar/profile');
        }
    }

    public function uploadbadges()
    {
        $config['upload_path'] = './assets/images/badge/';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $fileData = $this->upload->data();

            $upload = [
                'badge' => $fileData['file_name'],
            ];

            if ($this->Pengajar_model->insertbadge($upload)) {
                $this->session->set_flashdata('success', '<p>Selamat! Anda berhasil mengunggah file <strong>' . $fileData['file_name'] . '</strong></p>');
            } else {
                $this->session->set_flashdata('error', '<p>Gagal! File ' . $fileData['file_name'] . ' tidak berhasil tersimpan di database anda</p>');
            }

            redirect('pengajar/filtersiswa');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('pengajar/filtersiswa');
        }
    }


    // Update profile Untuk Pengajar
    public function updateprofile($id)
    {
        $data = array(
            'nip' => $this->input->post('NIP'),
            'nama' => $this->input->post('Nama'),
            'jenis_kelamin' => $this->input->post('jk'),
            'tempat_lahir' => $this->input->post('tempatlahir'),
            'tgl_lahir' => $this->input->post('tgllahir'),
            'alamat' => $this->input->post('alamat')
        );
        $this->Pengajar_model->updateProfile($data, $id);
        redirect('pengajar/profile');
    }

    // Function Untuk Tugas
    public function tugas()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,

        );

        $data['data'] = $this->Pengajar_model->getKelas()->result();
        $data['pengajar'] = $this->Pengajar_model->getPengajar($this->session->userdata('id'))->result();
        $data['mapel'] = $this->Pengajar_model->getMapelKelas()->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/tugas/tugaskelas');
        $this->load->view('part/footer');
    }

    // Menampilkan List/Daftar Tugas
    public function listTugas($kelas, $mapelid)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['idkelas'] = $kelas;
        $data['mapelid'] = $mapelid;
        $data['materi'] = $this->Pengajar_model->getTugasKelas($kelas, $mapelid, $this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/tugas/listtugas', $data);
        $this->load->view('part/footer');
    }

    // Menambahkan Tugas
    public function tambahTugas($kelas, $mapelid)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['idkelas'] = $kelas;
        $data['idmapel'] = $mapelid;
        $data['kelas'] = $this->Pengajar_model->view_where('el_kelas', array('id' => $kelas))->result();
        $data['mapel'] = $this->Pengajar_model->view_where('el_mapel', array('id' => $mapelid))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/tugas/TambahTugas', $data);
        $this->load->view('part/footer');
    }

    // Proses Upload Tugas
    public function prosesUploadTugas()
    {
        $judul = $this->input->post('judul');
        $idkelas = $this->input->post('idkelas');
        $idmapel = $this->input->post('idmapel');
        $tanggal = $this->input->post('tanggal');
        $deadline = $this->input->post('deadline');
        $content = $this->input->post('isi');
        $todate = date('Y-m-d H:i:s', strtotime($deadline));

        $config['upload_path']          = './assets/tugas/';
        $config['allowed_types']        = '*';

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('materi');
        if (!$upload) {
            $data['idkelas'] = $idkelas;
            $data['error'] = $this->upload->display_errors();
            $data['idmapel'] = $idmapel;
            $data['kelas'] = $this->Pengajar_model->view_where('el_kelas', array('id' => $idkelas))->result();
            $data['mapel'] = $this->Pengajar_model->view_where('el_mapel', array('id' => $idmapel))->result();
            $this->load->view('part/header');
            $this->load->view('part/sidebarpengajar');
            $this->load->view('pengajar/materi/TambahMateri', $data);
            $this->load->view('part/footer');
        } else {
            $upload = $this->upload->data();
            $data = array(
                'mapel_id' => $idmapel,
                'pengajar_id' => $this->session->userdata('id'),
                'tgl_buat' => $tanggal,
                'judul' => $judul,
                'durasi' => $todate,
                'info' => $content,
                'file' => $upload['file_name'],
                'aktif' => 1,
                'tampil_siswa' => 1
            );
            $id = $this->Pengajar_model->insert($data, 'el_tugas');
            $data = array('tugas_id' => $id, 'kelas_id' => $idkelas);
            $this->Pengajar_model->insert($data, 'el_tugas_kelas');
            redirect('Pengajar/listTugas/' . $idkelas . '/' . $idmapel);
        }
    }

    // Detail Tugas
    public function detailTugas($idtugas)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['materi'] = $this->Pengajar_model->view_where('el_tugas', array('id' => $idtugas))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/tugas/detailtugas', $data);
        $this->load->view('part/footer');
    }

    // Hapus Tugas
    public function hapusTugas($id, $kelas, $mapelid)
    {
        $this->Pengajar_model->hapusTugas($id);
        redirect("pengajar/listTugas/" . $kelas . "/" . $mapelid);
    }

    // Akhir Function Untuk Kriteria Tugas

    // Function Penilaian
    public function penilaian($idtugas, $kelas, $mapelid)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['idkelas'] = $kelas;
        $data['idmapel'] = $mapelid;
        $data['idtugas'] = $idtugas;
        $data['upload'] = $this->Pengajar_model->hasilUploadTugas($kelas, $idtugas)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/tugas/listnilai', $data);
        $this->load->view('part/footer');
    }

    // Update Nilai
    public function updateNilai($id, $idtugas, $kelas, $mapelid)
    {
        $data['idkelas'] = $kelas;
        $data['idmapel'] = $mapelid;
        $data['idtugas'] = $idtugas;

        $nilai = $this->input->post('nilai');
        $data = array('nilai' => $nilai);
        $this->Pengajar_model->updateNilai($data, $id);
        redirect('pengajar/penilaian/' . $idtugas . '/' . $kelas . '/' . $mapelid);
    }

    // Akhir Function Penilaian

    // Function Materi
    public function materi()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['data'] = $this->Pengajar_model->getKelas()->result();
        $data['pengajar'] = $this->Pengajar_model->getPengajar($this->session->userdata('id'))->result();
        $data['mapel'] = $this->Pengajar_model->getMapelKelas()->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/materi/materikelas');
        $this->load->view('part/footer');
    }

    // List Materi
    public function listMateri($kelas, $mapelid)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['idkelas'] = $kelas;
        $data['mapelid'] = $mapelid;
        $data['materi'] = $this->Pengajar_model->getMateriKelas($kelas, $mapelid, $this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/materi/listmateri', $data);
        $this->load->view('part/footer');
    }

    // Menambahkan Materi
    public function tambahMateri($kelas, $mapelid)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );
        $data['idkelas'] = $kelas;
        $data['idmapel'] = $mapelid;
        $data['kelas'] = $this->Pengajar_model->view_where('el_kelas', array('id' => $kelas))->result();
        $data['mapel'] = $this->Pengajar_model->view_where('el_mapel', array('id' => $mapelid))->result();

        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/materi/TambahMateri', $data);
        $this->load->view('part/footer');
    }

    // Proses Upload Materi
    public function prosesUploadMateri()
    {
        $judul = $this->input->post('judul');
        $idkelas = $this->input->post('idkelas');
        $idmapel = $this->input->post('idmapel');
        $tanggal = $this->input->post('tanggal');
        $content = $this->input->post('isi');

        $config['upload_path']          = './assets/materi/';
        $config['allowed_types']        = '*';

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('materi');
        if (!$upload) {
            $data['idkelas'] = $idkelas;
            $data['error'] = $this->upload->display_errors();
            $data['idmapel'] = $idmapel;
            $data['kelas'] = $this->Pengajar_model->view_where('el_kelas', array('id' => $idkelas))->result();
            $data['mapel'] = $this->Pengajar_model->view_where('el_mapel', array('id' => $idmapel))->result();
            $this->load->view('part/header');
            $this->load->view('part/sidebarpengajar');
            $this->load->view('pengajar/materi/TambahMateri', $data);
            $this->load->view('part/footer');
        } else {
            $upload = $this->upload->data();
            $data = array(
                'mapel_id' => $idmapel,
                'pengajar_id' => $this->session->userdata('id'),
                'tgl_posting' => $tanggal,
                'judul' => $judul,
                'konten' => $content,
                'file' => $upload['file_name'],
                'publish' => 1,
                'views' => 1,
            );
            $id = $this->Pengajar_model->insert($data, 'el_materi');
            $data = array('materi_id' => $id, 'kelas_id' => $idkelas);
            $this->Pengajar_model->insert($data, 'el_materi_kelas');
            redirect('Pengajar/listMateri/' . $idkelas . '/' . $idmapel);
        }
    }

    // Detail Materi
    public function detailMateri($idtugas)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );
        $data['materi'] = $this->Pengajar_model->view_where('el_materi', array('id' => $idtugas))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/materi/detailmateri', $data);
        $this->load->view('part/footer');
    }

    public function hapusMateri($id, $kelas, $mapelid)
    {
        $this->Pengajar_model->hapusMateri($id);
        redirect("pengajar/listMateri/" . $kelas . "/" . $mapelid);
    }

    // Akhir Dari Function Materi

    // Function Download Materi
    public function download($nama)
    {
        $pth    =   file_get_contents(base_url() . "assets/materi/" . $nama);
        force_download($nama, $pth);
    }

    // Function Download Tugas
    public function downloadTugas($nama)
    {
        $pth    =   file_get_contents(base_url() . "assets/tugas/" . $nama);
        force_download($nama, $pth);
    }

    // Function Filter Siswa
    public function filterSiswa()
    {
        $daftarFilter = array();
        $daftarKelamin = array();
        $daftarAgama = array();
        $daftarKelas = array();
        if ($this->input->post()) {
            $daftarKelas = $this->input->post('kelas');
            $daftarAgama = $this->input->post('agama');
            $daftarKelamin = $this->input->post('jeniskelamin');
            $daftarFilter = array(
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'tahun_masuk' => $this->input->post('tahunMasuk'),
                'tempat_lahir' => $this->input->post('tempatLahir'),
                'tgl_lahir' => $this->input->post('tahun') . '-' . $this->input->post('bulan') . '-' . $this->input->post('tanggal'),
                'alamat' => $this->input->post('alamat'),
                'status_id' => $this->input->post('statusSiswa')
            );
        }
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['nama'] = $this->session->userdata('nama');
        $dataFilter['data'] = $this->Siswa_model->filterSiswa($daftarFilter, $daftarKelamin, $daftarAgama, $daftarKelas)->result();

        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/filterSiswa', $dataFilter);
        $this->load->view('part/footer');
    }

    // Detail Filter Siswa
    public function detailFilterSiswa($id)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['nama'] = $this->session->userdata('nama');
        $data['siswa'] = $this->Siswa_model->view_where('el_siswa', array('id' => $id))->result();
        $data['kelas'] = $this->Siswa_model->getKelasSiswa($id)->result();
        $data['exp'] = $this->Siswa_model->getKelasSiswa($id)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/detailFilterSiswa', $data);
        $this->load->view('part/footer');
    }

    // Ambil Mapel
    public function ambilMapel()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['mapel'] = $this->Pengajar_model->GetAllMapel()->result();
        $data['pengajar'] = $this->Pengajar_model->getPengajar($this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/ambilmatapelajaran', $data);
        $this->load->view('part/footer');
    }

    // Pick Mapel
    public function pickMapel($id)
    {
        $data = array('id_mapel' => $id);
        $this->Pengajar_model->updateMapelPengajar($data, $this->session->userdata('id'));
        redirect('pengajar/ambilMapel');
    }

    // Ujian
    public function ujian()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['nama'] = $this->session->userdata('nama');
        $data['ujian'] = $this->Pengajar_model->getUjian($this->session->userdata('id'))->result();
        $data['mapel'] = $this->Pengajar_model->getKelasPengajar($this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/ujian', $data);
        $this->load->view('part/footer');
    }

    // Buat Ujian
    public function buatUjian()
    {
        $values = array(
            'judul' => $this->input->post('nama'),
            'tgl_dibuat' => date('Y-m-d H:i'),
            'tgl_expired' => $this->input->post('tgl') . ' ' . $this->input->post('jam'),
            'waktu' => $this->input->post('waktu'),
            'mapel_kelas_id' => $this->input->post('mapelKelas'),
            'pengajar_id' => $this->session->userdata('id')
        );
        $this->Pengajar_model->insert($values, 'el_ujian');
        redirect('pengajar/ujian');
    }

    // Detail Ujian
    public function detailUjian($id)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        $data['id_ujian'] = $id;
        $data['nama'] = $this->session->userdata('nama');
        $data['ujian'] = $this->Pengajar_model->getUjianDetail($id)->result();
        $data['mapel'] = $this->Pengajar_model->getKelasPengajar($this->session->userdata('id'))->result();
        $data['soal'] = $this->Pengajar_model->view_where('el_soal', array('pengajar_id' => $this->session->userdata('id')))->result();
        $data['soal_ujian'] = $this->Pengajar_model->getSoalUjian($id)->result();
        //$data['id_soalnya']=$id;
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/detailUjian', $data);
        $this->load->view('part/footer');
    }

    // Hasil Ujian
    public function hasilUjian($id)
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );
        $data['nama'] = $this->session->userdata('nama');
        $data['ujian'] = $this->Pengajar_model->view('el_ujian')->result();
        $data['siswa'] = $this->Pengajar_model->view('el_siswa')->result();
        $data['jawaban'] = $this->Pengajar_model->view_where('el_jawaban', array('id_ujian' => $id))->result();
        $data['id_ujian'] = $id;

        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/hasilUjian', $data);
        $this->load->view('part/footer');
    }

    // Update Ujian
    public function updateUjian($id)
    {
        $values = array(
            'judul' => $this->input->post('nama'),
            'tgl_dibuat' => date('Y-m-d H:i'),
            'tgl_expired' => $this->input->post('tgl') . ' ' . $this->input->post('jam'),
            'waktu' => $this->input->post('waktu'),
            'mapel_kelas_id' => $this->input->post('mapelKelas'),
            'pengajar_id' => $this->session->userdata('id')
        );
        $this->Pengajar_model->update($values, array('id' => $id), 'el_ujian');
        redirect('pengajar/ujian');
    }

    // Soal Ujian
    public function soal()
    {
        $data = $this->Admin_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );
        $data['soal'] = $this->Pengajar_model->view_where('el_soal', array('pengajar_id' => $this->session->userdata('id')))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarpengajar', $data);
        $this->load->view('pengajar/soal', $data);
        $this->load->view('part/footer');
    }

    // Simpan Soal
    public function simpanSoal($tipe, $id_ujian)
    {
        $insert_id = '';
        if ($tipe == 1) {
            $values = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'pg_a' => 'A.' . $this->input->post('pg_a'),
                'pg_b' => 'B.' . $this->input->post('pg_b'),
                'pg_c' => 'C.' . $this->input->post('pg_c'),
                'jawaban_pg' => $this->input->post('jawaban_pg'),
                'tipe' => $tipe,
                'pengajar_id' => $this->session->userdata('id')
            );
            $insert_id = $this->Pengajar_model->insert($values, 'el_soal');
        } elseif ($tipe == 2) {
            $values = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'tipe' => $tipe,
                'pengajar_id' => $this->session->userdata('id')
            );
            $insert_id = $this->Pengajar_model->insert($values, 'el_soal');
        }
        $data = array(
            'id_ujian' => $id_ujian,
            'id_soal' => $insert_id,
            'aktif' => 1
        );
        $this->Pengajar_model->insert($data, 'el_ujian_soal');
        redirect('pengajar/detailUjian/' . $id_ujian);
    }

    // Tambah Soal Ujian
    public function tambahSoalUjian($id)
    {
        $daftarSoal = $this->input->post('pertanyaan');
        for ($i = 0; $i < count($daftarSoal); $i++) {
            $data = array(
                'id_ujian' => $id,
                'id_soal' => $daftarSoal[$i],
                'aktif' => 1
            );
            $this->Pengajar_model->insert($data, 'el_ujian_soal');
        }
        redirect('pengajar/detailUjian/' . $id);
    }

    // Penilaian Essay
    public function nilaiEssay($id, $id_ujian)
    {
        $nilaiEssay = $this->input->post('nilai_essay');
        $nilaiPG = $this->input->post('nilai_pg');
        $jumlahSoal = $this->input->post('jumlah_soal');
        $nilai_total = ((($nilaiEssay + $nilaiPG) / 3) / $jumlahSoal) * 100;
        $values = array(
            'nilai_essay' => $this->input->post('nilai_essay'),
            'nilai_total' => $nilai_total
        );

        $this->Pengajar_model->update($values, array('id_jawaban' => $id), 'el_jawaban');
        redirect('pengajar/hasilUjian/' . $id_ujian);
    }

    // Hapus Soal
    public function hapusSoal($id)
    {
        $this->Pengajar_model->delete(array('id_soal' => $id), 'el_soal');
        redirect('pengajar/soal/');
    }

    // Hapus Soal Ujian
    public function hapusSoalUjian($id, $id_ujian)
    {
        $this->Pengajar_model->update(array('aktif' => 0), array('id_ujian_soal' => $id), 'el_ujian_soal');
        redirect('pengajar/detailUjian/' . $id_ujian);
    }

    // Update Siswa
    public function updateSiswa($id)
    {
        $data = array(
            'level' => $this->input->post('level'),
            'score' => $this->input->post('score'),
            'exp'   => $this->input->post('exp')
        );
        $this->Pengajar_model->updateProfileSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 1 menggunakan varchar
    public function updateBadge($id)
    {
        $data = array(
            'badge' => $this->input->post('badge')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 1
    public function updateBadge1($id)
    {
        $data = array(
            'badge1' => $this->input->post('badge1')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 2
    public function updateBadge2($id)
    {
        $data = array(
            'badge2' => $this->input->post('badge2')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }


    // Update Badge 3
    public function updateBadge3($id)
    {
        $data = array(
            'badge3' => $this->input->post('badge3')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }


    // Update Badge 4
    public function updateBadge4($id)
    {
        $data = array(
            'badge4' => $this->input->post('badge4')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 5
    public function updateBadge5($id)
    {
        $data = array(
            'badge5' => $this->input->post('badge5')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 6
    public function updateBadge6($id)
    {
        $data = array(
            'badge6' => $this->input->post('badge6')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 7
    public function updateBadge7($id)
    {
        $data = array(
            'badge7' => $this->input->post('badge7')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 8
    public function updateBadge8($id)
    {
        $data = array(
            'badge8' => $this->input->post('badge8')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 9
    public function updateBadge9($id)
    {
        $data = array(
            'badge9' => $this->input->post('badge9')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 10
    public function updateBadge10($id)
    {
        $data = array(
            'badge10' => $this->input->post('badge10')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 11
    public function updateBadge11($id)
    {
        $data = array(
            'badge11' => $this->input->post('badge11')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 12
    public function updateBadge12($id)
    {
        $data = array(
            'badge12' => $this->input->post('badge12')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 13
    public function updateBadge13($id)
    {
        $data = array(
            'badge13' => $this->input->post('badge13')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 14
    public function updateBadge14($id)
    {
        $data = array(
            'badge14' => $this->input->post('badge14')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 15
    public function updateBadge15($id)
    {
        $data = array(
            'badge15' => $this->input->post('badge15')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 16
    public function updateBadge16($id)
    {
        $data = array(
            'badge16' => $this->input->post('badge16')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Update Badge 17
    public function updateBadge17($id)
    {
        $data = array(
            'badge17' => $this->input->post('badge17')
        );
        $this->Pengajar_model->updateBadgesSiswa($data, $id);
        redirect('pengajar/filtersiswa');
    }

    // Hapus Ujian
    public function hapusUjian($id)
    {
        $this->Pengajar_model->delete(array('id' => $id), 'el_ujian');
        redirect('pengajar/ujian/');
    }
}
