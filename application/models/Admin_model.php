<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
    // Model Menganbil Data
    public function ambil_data($id)
    {
        $this->db->where('nama', $id);
        return $this->db->get('el_pengajar')->row();
    }


    // Model Menghitung Jumlah Siswa
    public function hitungJumlahSiswa()
    {
        $query = $this->db->get('el_siswa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // Model Menghitung Jumlah Siswa
    public function hitungJumlahPengajar()
    {
        $query = $this->db->get('el_pengajar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // Model Menghitung Jumlah Siswa
    public function hitungJumlahKelas()
    {

        $query = $this->db->get('el_kelas');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // Model Menghitung Jumlah Siswa
    public function hitungJumlahMapel()
    {

        $query = $this->db->get('el_mapel');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // Model Crud
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function update($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete($id, $table)
    {
        $this->db->where($id);
        $this->db->delete($table);
    }
    // Akhir Crud

    // Model Mengambil Data Siswa
    public function getDataSiswa($status)
    {
        return  $this->db->query("SELECT el_siswa.id,el_siswa.nama,nis,agama, jenis_kelamin,el_kelas.nama as kelas, status_id FROM el_siswa join el_kelas_siswa on el_kelas_siswa.siswa_id=el_siswa.id join el_kelas ON el_kelas.id=el_kelas_siswa.kelas_id WHERE el_kelas_siswa.aktif=1 AND status_id=" . $status);
    }
    public function view($table)
    {
        return  $this->db->get($table);
    }
    public function view_where($table, $where)
    {
        return  $this->db->get_where($table, $where);
    }
    public function getKelasSiswa($siswa_id)
    {
        return  $this->db->query("SELECT el_kelas_siswa.id,siswa_id,nama,kelas_id,el_kelas_siswa.aktif FROM el_kelas_siswa join el_kelas ON el_kelas.id=el_kelas_siswa.kelas_id WHERE el_kelas_siswa.siswa_id=" . $siswa_id);
    }
    public function getAkunSiswa($siswa_id)
    {
        return  $this->db->query("SELECT el_login.id,username,password FROM el_siswa join el_login ON el_login.siswa_id=el_siswa.id WHERE el_siswa.id=" . $siswa_id);
    }

    // public function getPengumuman()
    // {
    //     return $this->db->get('el_pengumuman');
    // }

    // public function getPengumumanSiswa()
    // {
    //     $this->db->where('tampil_siswa', '1');
    //     return $this->db->get('el_pengumuman');
    // }

    // public function getPengumumanGuru()
    // {
    //     $this->db->where('tampil_pengajar', '1');
    //     return $this->db->get('el_pengumuman');
    // }

    // public function getDetailPengumuman($id)
    // {
    //     $this->db->where('id', $id);
    //     return $this->db->get('el_pengumuman');
    // }

    // public function TambahPengumuman($data)
    // {
    //     $this->db->insert('el_pengumuman', $data);
    // }

    // public function updatePengumuman($data, $id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->update('el_pengumuman', $data);
    // }

    // public function hapusPengumuman($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('el_pengumuman');
    // }

    // Model Mengambil Data Pengajar
    public function getPengajar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_pengajar');
    }

    // Model Mengambil Data Pelajaran
    public function GetAllMapel()
    {
        return $this->db->get('el_mapel');
    }

    // Crud Mapel
    public function addMataPelajaran($data)
    {
        $this->db->insert('el_mapel', $data);
    }

    public function getMapelById($where)
    {
        $this->db->where('id', $where);
        return $this->db->get('el_mapel');
    }

    public function editMapel($data, $where)
    {
        $this->db->where('id', $where);
        $this->db->update('el_mapel', $data);
    }

    public function deleteMapel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('el_mapel');
    }
    // Akhir Crud Mapel

    // Mengambil Profile Admin
    public function getProfileAdmin($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_pengajar');
    }

    // Mengambil Profile Siswa
    public function getProfileSiswa($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_siswa');
    }

    public function updateProfile($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }
    public function updateImage($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }
    public function getKelas()
    {
        return  $this->db->query("SELECT * FROM  el_kelas ORDER BY urutan");
    }
    public function getLastUrutanKelas()
    {
        return  $this->db->query("SELECT * FROM  el_kelas ORDER BY urutan DESC LIMIT 1");
    }
    public function getKelasId($id)
    {
        return  $this->db->query("SELECT * FROM  el_kelas WHERE id = " . $id);
    }
    public function getMapelKelas()
    {
        return  $this->db->query("SELECT
            emk.id AS id,
            emk.kelas_id,
            em.nama,
            emk.mapel_id,
            emk.aktif AS kelas_aktif
            FROM
            el_mapel_kelas AS emk
            JOIN el_mapel AS em ON em.id = emk.mapel_id
            WHERE
            emk.aktif = 1");
    }

    public function getJadwalKelas($hari, $id)
    {
        return $this->db->query("SELECT
            emk.id AS id,
            emk.kelas_id,
            em.nama AS mapel,
            emk.mapel_id,
            emk.aktif AS kelas_aktif,
            ema.id AS mapel_kelas_id,
            ema.jam_mulai,
            ema.jam_selesai,
            ema.hari_id,
            ema.pengajar_id,
            ep.nama AS pengajar
            FROM
            el_mapel_kelas AS emk
            JOIN el_mapel AS em ON em.id = emk.mapel_id
            INNER JOIN el_mapel_ajar AS ema ON ema.mapel_kelas_id = emk.id
            INNER JOIN el_pengajar AS ep ON ema.pengajar_id = ep.id
            WHERE
            emk.aktif = 1 AND
            emk.kelas_id = " . $id . "  AND
            ema.hari_id = " . $hari);
    }

    public function getJadwalKelasId($id)
    {
        return $this->db->query("SELECT
            emk.id AS id,
            emk.kelas_id,
            em.nama AS mapel,
            emk.mapel_id,
            emk.aktif AS kelas_aktif,
            ema.id AS mapel_kelas_id,
            ema.jam_mulai,
            ema.jam_selesai,
            ema.hari_id,
            ema.pengajar_id,
            ep.nama AS pengajar
            FROM
            el_mapel_kelas AS emk
            JOIN el_mapel AS em ON em.id = emk.mapel_id
            INNER JOIN el_mapel_ajar AS ema ON ema.mapel_kelas_id = emk.id
            INNER JOIN el_pengajar AS ep ON ema.pengajar_id = ep.id
            WHERE
            emk.aktif = 1 AND
            ema.id = " . $id);
    }
    public function jadwalPelajaran($hari, $id)
    {
        return $this->db->query('SELECT
            emk.id AS id,
            emk.kelas_id,
            em.nama AS mapel,
            emk.mapel_id,
            emk.aktif AS kelas_aktif,
            ema.jam_mulai,
            ema.id AS mapelajarid,
            ema.jam_selesai,
            ema.hari_id,
            ema.pengajar_id,
            ep.nama AS pengajar,
            ek.nama AS nama_kelas,
            eks.siswa_id,
            eks.aktif
            FROM
            el_mapel_kelas AS emk
            JOIN el_mapel AS em ON em.id = emk.mapel_id
            INNER JOIN el_mapel_ajar AS ema ON ema.mapel_kelas_id = emk.id
            INNER JOIN el_pengajar AS ep ON ema.pengajar_id = ep.id
            INNER JOIN el_kelas AS ek ON ek.id = emk.kelas_id
            INNER JOIN el_kelas_siswa AS eks ON ek.id = eks.kelas_id
            WHERE
            emk.aktif = 1 AND
            eks.aktif = 1 AND
            ema.hari_id = ' . $hari . ' AND 
            ema.pengajar_id = ' . $id . ' 
            ORDER BY
            ema.jam_mulai ASC
            
            ');
    }
    public function updateMapelPengajar($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }
    // public function hapusTugas($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('el_tugas');

    //     $this->db->where('tugas_id', $id);
    //     $this->db->delete('el_tugas_kelas');
    // }

    // public function getTugasKelas($kelas, $mapel, $id)
    // {
    //     return $this->db->query('SELECT
    //         et.id,
    //         et.mapel_id,
    //         et.pengajar_id,
    //         et.judul,
    //         etk.id AS idtugaskelas,
    //         etk.kelas_id,
    //         ep.nama,
    //         et.tgl_buat,
    //         et.durasi
    //         FROM
    //         el_tugas AS et
    //         INNER JOIN el_tugas_kelas AS etk ON etk.tugas_id = et.id
    //         INNER JOIN el_pengajar AS ep ON ep.id = et.pengajar_id
    //         WHERE
    //         et.mapel_id = ' . $mapel . ' AND
    //         et.pengajar_id = ' . $id . ' AND
    //         etk.kelas_id = ' . $kelas);
    // }
    // public function hasilUploadTugas($kelas, $id)
    // {
    //     return $this->db->query('SELECT
    //         etk.file,
    //         etk.nilai,
    //         etk.id,
    //         es.nama,
    //         etk.siswa_id
    //         FROM
    //         el_tugas_kumpul AS etk
    //         INNER JOIN el_siswa AS es ON es.id = etk.siswa_id
    //         WHERE
    //         etk.kelas_id = ' . $kelas . ' AND
    //         etk.tugas_id = ' . $id);
    // }

    // public function updateNilai($data, $where)
    // {
    //     $this->db->where('id', $where);
    //     $this->db->update('el_tugas_kumpul', $data);
    // }

    // public function getMateriKelas($kelas, $mapel, $id)
    // {
    //     return $this->db->query('SELECT
    //         em.id,
    //         em.mapel_id,
    //         em.pengajar_id,
    //         em.judul,
    //         em.konten,
    //         em.file,
    //         em.tgl_posting,
    //         em.publish,
    //         em.views,
    //         emk.id AS id_materi_kelas,
    //         emk.kelas_id,
    //         ep.nama
    //         FROM
    //         el_materi AS em
    //         INNER JOIN el_materi_kelas AS emk ON emk.materi_id = em.id
    //         INNER JOIN el_pengajar AS ep ON ep.id = em.pengajar_id
    //         WHERE
    //         em.mapel_id = ' . $mapel . ' AND 
    //         em.pengajar_id = ' . $id . ' AND 
    //         emk.kelas_id = ' . $kelas);
    // }
    // public function hapusMateri($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('el_materi');

    //     $this->db->where('materi_id', $id);
    //     $this->db->delete('el_materi_kelas');
    // }
}
