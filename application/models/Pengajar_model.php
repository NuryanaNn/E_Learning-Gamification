<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pengajar_model extends CI_Model
{
    // Update Pengajar
    public function update($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // Menampilkan Pengajar
    public function getPengajar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_pengajar');
    }

    // Menampilkan Profile Pengajar
    public function getProfilePengajar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_pengajar');
    }

    public function view($table)
    {
        return  $this->db->get($table);
    }
    public function view_where($table, $where)
    {
        return  $this->db->get_where($table, $where);
    }

    // Memasukan data siswa
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    // Insert Badge
    public function updateBadgesSiswa($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_siswa', $data);
    }

    // Update perofile Pengjaar
    public function updateProfile($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }

    // Update Profile Siswa
    public function updateProfileSiswa($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_siswa', $data);
    }

    // Update Image Pengajar
    public function updateImage($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }

    public function getKelasPengajar($id)
    {
        return $this->db->query('SELECT DISTINCT mapel_kelas_id,el_mapel.nama as mapel,el_kelas.nama as kelas,kelas_id FROM el_mapel_ajar 
            JOIN el_mapel_kelas on el_mapel_kelas.id=el_mapel_ajar.mapel_kelas_id 
            JOIN el_mapel on el_mapel.id=el_mapel_kelas.mapel_id 
            JOIN el_kelas on el_kelas.id=el_mapel_kelas.kelas_id 
            WHERE pengajar_id=' . $id . ' and el_mapel_kelas.aktif=1');
    }

    // Menampilkan data challenge
    public function getUjian($id)
    {
        return $this->db->query('SELECT DISTINCT el_ujian.id,judul,tgl_dibuat,tgl_expired,waktu,el_ujian.mapel_kelas_id,el_mapel.nama as mapel,el_kelas.nama as kelas,kelas_id,el_mapel_ajar.pengajar_id FROM el_ujian JOIN el_mapel_kelas on el_mapel_kelas.id=el_ujian.mapel_kelas_id JOIN el_mapel_ajar on el_mapel_ajar.mapel_kelas_id =el_mapel_kelas.id JOIN el_mapel on el_mapel.id=el_mapel_kelas.mapel_id JOIN el_kelas on el_kelas.id=el_mapel_kelas.kelas_id WHERE el_ujian.pengajar_id=' . $id);
    }
    public function getUjianDetail($id)
    {
        return $this->db->query('SELECT el_ujian.id,judul,tgl_dibuat,tgl_expired,waktu,mapel_kelas_id,el_mapel.nama as mapel,el_kelas.nama as kelas,kelas_id FROM el_ujian 
            JOIN el_mapel_kelas on el_mapel_kelas.id=el_ujian.mapel_kelas_id 
            JOIN el_mapel on el_mapel.id=el_mapel_kelas.mapel_id 
            JOIN el_kelas on el_kelas.id=el_mapel_kelas.kelas_id
            WHERE el_ujian.id=' . $id);
    }

    // Menampilkan Soal Challenge
    public function getSoalUjian($id)
    {
        return $this->db->query('SELECT * FROM el_ujian_soal JOIN el_soal USING(id_soal) WHERE el_ujian_soal.aktif=1 and el_ujian_soal.id_ujian=' . $id);
    }

    // Menghapus Challenge
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Menampilkan Mata Pelajaran
    public function GetAllMapel()
    {
        return $this->db->get('el_mapel');
    }

    // Update Mata Pelajaran
    public function updateMapelPengajar($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_pengajar', $data);
    }

    // Menampilkan Kelas
    public function getKelas()
    {
        return  $this->db->query("SELECT * FROM  el_kelas ORDER BY urutan");
    }

    // Menampilkan Id Kelas
    public function getKelasId($id)
    {
        return  $this->db->query("SELECT * FROM  el_kelas WHERE id = " . $id);
    }

    // Menampilkan Data Mapel Kelas
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

    // Menampilkan Data Materi Kelas
    public function getMateriKelas($kelas, $mapel, $id)
    {
        return $this->db->query('SELECT
        em.id,
        em.mapel_id,
        em.pengajar_id,
        em.judul,
        em.konten,
        em.file,
        em.tgl_posting,
        em.publish,
        em.views,
        emk.id AS id_materi_kelas,
        emk.kelas_id,
        ep.nama
        FROM
        el_materi AS em
        INNER JOIN el_materi_kelas AS emk ON emk.materi_id = em.id
        INNER JOIN el_pengajar AS ep ON ep.id = em.pengajar_id
        WHERE
        em.mapel_id = ' . $mapel . ' AND 
        em.pengajar_id = ' . $id . ' AND 
        emk.kelas_id = ' . $kelas);
    }

    // Menghapus Materi
    public function hapusMateri($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('el_materi');

        $this->db->where('materi_id', $id);
        $this->db->delete('el_materi_kelas');
    }

    // Menghapus Tugas
    public function hapusTugas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('el_tugas');

        $this->db->where('tugas_id', $id);
        $this->db->delete('el_tugas_kelas');
    }

    // Menampilkan Data Tugas Kelas
    public function getTugasKelas($kelas, $mapel, $id)
    {
        return $this->db->query('SELECT
        et.id,
        et.mapel_id,
        et.pengajar_id,
        et.judul,
        etk.id AS idtugaskelas,
        etk.kelas_id,
        ep.nama,
        et.tgl_buat,
        et.durasi
        FROM
        el_tugas AS et
        INNER JOIN el_tugas_kelas AS etk ON etk.tugas_id = et.id
        INNER JOIN el_pengajar AS ep ON ep.id = et.pengajar_id
        WHERE
        et.mapel_id = ' . $mapel . ' AND
        et.pengajar_id = ' . $id . ' AND
        etk.kelas_id = ' . $kelas);
    }

    // Hasil Upload Tugas
    public function hasilUploadTugas($kelas, $id)
    {
        return $this->db->query('SELECT
        etk.file,
        etk.nilai,
        etk.id,
        es.nama,
        etk.siswa_id
        FROM
        el_tugas_kumpul AS etk
        INNER JOIN el_siswa AS es ON es.id = etk.siswa_id
        WHERE
        etk.kelas_id = ' . $kelas . ' AND
        etk.tugas_id = ' . $id);
    }

    // Update Nilai
    public function updateNilai($data, $where)
    {
        $this->db->where('id', $where);
        $this->db->update('el_tugas_kumpul', $data);
    }
}

/* End of file Pengajar_Model.php */
