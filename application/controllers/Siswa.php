<?php

defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
    // Function menampilkan dashboard
    public function index()
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level,
            'badge'    => $data->badge,
            'badge1'    => $data->badge1,
            'badge2'    => $data->badge2,
            'badge3'    => $data->badge3,
            'badge4'    => $data->badge4,
            'badge5'    => $data->badge5,
            'badge6'    => $data->badge6,
            'badge7'    => $data->badge7,
            'badge8'    => $data->badge8,
            'badge9'    => $data->badge9,
            'badge10'    => $data->badge10,
            'badge11'    => $data->badge11,
            'badge12'    => $data->badge12,
            'badge13'    => $data->badge13,
            'badge14'    => $data->badge14,
            'badge15'    => $data->badge15,
            'badge16'    => $data->badge16,
            'badge17'    => $data->badge17,
            'score'    => $data->score,
            'exp'      => $data->exp
        );
        $data['nama'] = $this->session->userdata('nama');
        $data['pengumumanguru'] = $this->Siswa_model->ambilDatasiswa();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('part/footer');
    }

    // Function menampilkan profile
    public function profile()
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['profile'] = $this->Admin_model->getProfileSiswa($this->session->userdata('id'))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/profile', $data);
        $this->load->view('part/footer');
    }

    // Function mengedit profile
    public function updateprofile($id)
    {
        $data = array(
            'nis' => $this->input->post('NIS'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jk'),
            'tempat_lahir' => $this->input->post('tempatlahir'),
            'tgl_lahir' => $this->input->post('tgllahir'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'tahun_masuk' => $this->input->post('tahunmasuk')
        );
        $this->Siswa_model->updateProfile($data, $id);
        redirect('siswa/profile');
    }

    // Function merubah gambar
    public function updateGambar()
    {
        $config['upload_path']          = './assets/images/user/';
        $config['allowed_types']        = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('file-input');
        if (!$upload) {
            $data['profile'] = $this->Siswa_model->getProfileSiswa($this->session->userdata('id'))->result();
            $this->session->set_flashdata('error', $this->upload->display_errors());

            $this->load->view('part/header');
            $this->load->view('part/sidebarsiswa', $data);
            $this->load->view('siswa/profile', $data);
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
            $this->Siswa_model->updateImage($data, $this->session->userdata('id'));
            redirect('siswa');
        }
    }

    // Function menampilkan tugas
    public function tugas()
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['data'] = $this->Siswa_model->getAllKelas()->result();
        $data['kelas'] = $this->Siswa_model->getKelas($this->session->userdata('id'))->result();
        $data['mapel'] = $this->Siswa_model->getMapelKelas()->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/tugas/tugaskelas');
        $this->load->view('part/footer');
    }

    // Function menampilkan list tugas
    public function listTugas($kelas, $mapelid)
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['idkelas'] = $kelas;
        $data['mapelid'] = $mapelid;
        $data['mapel'] = $this->Siswa_model->view_where('el_mapel', array('id' => $mapelid))->result();
        $data['materi'] = $this->Siswa_model->getTugasKelas($kelas, $mapelid)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/tugas/listtugas', $data);
        $this->load->view('part/footer');
    }

    // Function menampilkan detail tugas
    public function detailTugas($idtugas, $mapelid, $kelas)
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['materi'] = $this->Pengajar_model->view_where('el_tugas', array('id' => $idtugas))->result();
        $data['nilai'] = $this->Pengajar_model->view_where('el_tugas_kumpul', array('tugas_id' => $idtugas, 'siswa_id' => $this->session->userdata('id')))->result();
        $data['kelasid'] = $kelas;
        $data['mapelid'] = $mapelid;
        $data['tugasid'] = $idtugas;
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/tugas/detailtugas', $data);
        $this->load->view('part/footer');
    }

    // Function untuk mengupload tugas
    public function uploadTugas()
    {
        $idsiswa = $this->session->userdata('id');
        $idkelas = $this->input->post('idkelas');
        $idtugas = $this->input->post('idtugas');
        $idmapel = $this->input->post('idmapel');
        $config['upload_path']          = './assets/tugas/';
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('materi');
        if (!$upload) {
            $data['error'] = $this->upload->display_errors();
            $data['materi'] = $this->Pengajar_model->view_where('el_tugas', array('id' => $idtugas))->result();
            $data['idkelas'] = $idkelas;
            $data['mapelid'] = $idmapel;
            $data['tugasid'] = $idtugas;
            $this->load->view('part/header');
            $this->load->view('part/sidebarsiswa');
            $this->load->view('siswa/tugas/detailtugas', $data);
            $this->load->view('part/footer');
        } else {
            $upload = $this->upload->data();
            $kumpul = array(
                'kelas_id' => $idkelas,
                'siswa_id' => $idsiswa,
                'tugas_id' => $idtugas,
                'file' => $upload['file_name'],
                'nilai' => 0,
            );
            $this->session->set_flashdata('success', 'Tugas Berhasil di upload tinggal menunggu hasil nilai');
            $this->Pengajar_model->insert($kumpul, 'el_tugas_kumpul');
            redirect('siswa/detailTugas/' . $idtugas . '/' . $idmapel . '/' . $idkelas);
        }
    }

    //Function menampilkan materi 
    public function materi()
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['data'] = $this->Siswa_model->getAllKelas()->result();
        $data['kelas'] = $this->Siswa_model->getKelas($this->session->userdata('id'))->result();
        $data['mapel'] = $this->Siswa_model->getMapelKelas()->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/materi/materikelas');
        $this->load->view('part/footer');
    }

    // Function menampilkan list materi
    public function listMateri($kelas, $mapelid)
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['idkelas'] = $kelas;
        $data['mapelid'] = $mapelid;
        $data['mapel'] = $this->Siswa_model->view_where('el_mapel', array('id' => $mapelid))->result();
        $data['materi'] = $this->Siswa_model->getMateriKelas($kelas, $mapelid)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/materi/listmateri', $data);
        $this->load->view('part/footer');
    }

    // Function menampilkan detail materi
    public function detailMateri($idmateri)
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['materi'] = $this->Siswa_model->view_where('el_materi', array('id' => $idmateri))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/materi/detailmateri', $data);
        $this->load->view('part/footer');
    }

    // Function untuk mendownload
    public function download($nama)
    {
        $pth = file_get_contents(base_url() . "assets/tugas/" . $nama);
        force_download($nama, $pth);
    }

    // Function untuk memfilter pengajar
    public function filterPengajar()
    {
        $daftarFilter = array();
        $daftarKelamin = array();
        if ($this->input->post()) {
            $daftarKelamin = $this->input->post('jeniskelamin');
            $daftarFilter = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempatLahir'),
                'tgl_lahir' => $this->input->post('tahun') . '-' . $this->input->post('bulan') . '-' . $this->input->post('tanggal'),
                'alamat' => $this->input->post('alamat'),
                'is_admin' => $this->input->post('opsi')
            );
        }
        $data['nama'] = $this->session->userdata('nama');
        $dataFilter['data'] = $this->Siswa_model->filterPengajar($daftarFilter, $daftarKelamin)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/filterPengajar', $dataFilter);
        $this->load->view('part/footer');
    }

    // Function filter siswa
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
        $data['nama'] = $this->session->userdata('nama');
        $dataFilter['data'] = $this->Siswa_model->filterSiswa($daftarFilter, $daftarKelamin, $daftarAgama, $daftarKelas)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/filterSiswa', $dataFilter);
        $this->load->view('part/footer');
    }

    // Function detail filter siswa
    public function detailFilterSiswa($id)
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['siswa'] = $this->Siswa_model->view_where('el_siswa', array('id' => $id))->result();
        $data['kelas'] = $this->Siswa_model->getKelasSiswa($id)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/detailFilterSiswa', $data);
        $this->load->view('part/footer');
    }

    // Function Detail Filter Siswa
    public function detailFilterPengajar($id)
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['pengajar'] = $this->Siswa_model->view_where('el_pengajar', array('id' => $id))->result();
        $data['jadwal'] = $this->Siswa_model->jadwalPengajar($id)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/detailFilterPengajar', $data);
        $this->load->view('part/footer');
    }

    // Function untuk memfilter ujian/Challenge
    public function ujian()
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
            'level'    => $data->level
        );
        $data['nama'] = $this->session->userdata('nama');
        $data['ujian'] = $this->Siswa_model->getUjianSiswa($this->session->userdata('id'))->result();
        $data['jawaban'] = $this->Siswa_model->view_where('el_jawaban', array('id_siswa' => $this->session->userdata('id')))->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/ujian', $data);
        $this->load->view('part/footer');
    }

    // Function untuk masuk ke ujian/ Challenge
    public function masukUjian($id, $waktu)
    {
        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );

        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $this->session->userdata('nama');
        $data['id_ujian'] = $id;
        $data['waktu'] = date('Y-m-d H:i', strtotime('+' . $waktu . ' minutes', strtotime(date('Y-m-d H:i'))));
        $data['ujian'] = $this->Siswa_model->getmasukUjianSiswa($id)->result();
        $data['soal_ujian'] = $this->Siswa_model->getSoalUjian($id)->result();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/masukUjian', $data);
        $this->load->view('part/footer');
    }

    // Function menampilkan koreksi ujian
    public function koreksiUjian($id_siswa, $id_ujian)
    {
        date_default_timezone_set('Asia/Jakarta');
        $soal_ujian = $this->Siswa_model->getSoalUjian($id_ujian)->result();
        $jumlah_soal = count($soal_ujian);
        // echo $jumlah_soal;
        $jawaban = array();
        $nilai = 0;
        for ($i = 0; $i < $jumlah_soal; $i++) {
            $jawaban[] = $soal_ujian[$i]->id_soal . ':' . $this->input->post($soal_ujian[$i]->id_soal);
            if ($soal_ujian[$i]->tipe == 1) {
                if ($soal_ujian[$i]->jawaban_pg == $this->input->post($soal_ujian[$i]->id_soal)) {
                    $nilai = +1;
                }
            }
        }
        $tes_jawaban = implode(',', $jawaban);
        $nilai_total = (($nilai / 3) / $jumlah_soal) * 100;
        $dataJawaban = array(
            'id_ujian' => $id_ujian,
            'id_siswa' => $id_siswa,
            'jawaban' => $tes_jawaban,
            'nilai_pg' => $nilai * 3,
            'nilai_total' => $nilai_total,
            'jumlah_soal' => $jumlah_soal,
            'tgl' => date('Y-m-d H:i')
        );
        $this->Siswa_model->insert($dataJawaban, 'el_jawaban');
        redirect('siswa/ujian');
    }

    // Function untuk menampilkan leaderboard
    public function leaderboard()
    {

        $data = $this->Siswa_model->ambil_data($this->session->userdata['nama']);
        $data = array(
            'nama'     => $data->nama,
            'foto'     => $data->foto,
        );
        $data['leaderboard'] = $this->Siswa_model->leaderboard();
        $data['level'] = $this->Siswa_model->level();
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa', $data);
        $this->load->view('siswa/leaderboard');
        $this->load->view('part/footer');
    }
}
