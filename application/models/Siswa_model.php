<?php

defined('BASEPATH') or exit('No direct script access allowed');

class siswa_model extends CI_Model
{
    // Model untuk Menampilkan data siswa 3 teratas untuk di dashboard
    public function ambilDatasiswa()
    {
        $this->db->limit(3);
        $this->db->order_by('score', 'desc');
        return $this->db->get('el_siswa')->result_array();
    }

    // MOdel untuk Menmpilkan  daftar siswa
    public function ambil_data($id)
    {
        $this->db->where('nama', $id);
        return $this->db->get('el_siswa')->row();
    }

    // Model melihat leaderboard
    public function leaderboard()
    {
        $this->db->order_by('score', 'desc');
        return $this->db->get('el_siswa')->result_array();
    }

    // Model menampilkan level
    public function level()
    {
        $this->db->select_max('level');
        $this->db->get('el_siswa')->row();
    }

    // Model untuk Menampilkan profile siswa
    public function getProfilSiswa($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_siswa');
    }

    // Model untuk menampilkan data leaderboard
    public function getLeaderboard()
    {
        $this->db->where('id', '1');
        return $this->db->get('el_siswa');
    }

    // public function getPengumumanSiswa()
    // {
    //     $this->db->where('tampil_siswa', '1');
    //     return $this->db->get('el_pengumuman');
    // }
    // public function getDetailPengumuman($id)
    // {
    //     $this->db->where('id', $id);
    //     return $this->db->get('el_pengumuman');
    // }
    public function getProfileSiswa($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_siswa');
    }
    public function view($table)
    {
        return  $this->db->get($table);
    }
    public function view_where($table, $where)
    {
        return  $this->db->get_where($table, $where);
    }
    // public function pesan($id)
    // {
    //     // $this->db->select("el_messages.id,owner_id,sender_receiver_id,el_siswa.nama,el_messages.date FROM el_messages JOIN el_siswa ON el_siswa.id=el_messages.sender_receiver_id");
    //     // $this->db->from('el_messages');
    //     // $this->db->join('el_siswa','el_siswa.id=el_messages.sender_receiver_id');
    //     // $this->db->where("el_messages.owner_id",$this->session->userdata('id'));
    //     // $this->db->or_where("el_messages.sender_receiver_id",$this->session->userdata('id'));
    //     // $this->db->group_by("owner_id","sender_receiver_id");
    //     $query = $this->db->query("SELECT e1.username as pengirim,m.owner_id,m.content,m.sender_receiver_id,e2.username as penerima FROM el_login e1 JOIN el_messages m ON m.owner_id=e1.id JOIN el_login e2 ON e2.id=m.sender_receiver_id WHERE m.owner_id=$id or m.sender_receiver_id=$id GROUP BY e1.username order by m.date DESC");
    //     return $query;
    // }
    // public function isiPesan($send, $receive)
    // {
    //     $query = "SELECT m.id as idpesan,e1.username as pengirim,m.owner_id,m.content,m.sender_receiver_id,e2.username as penerima,m.date FROM el_login e1 JOIN el_messages m ON m.owner_id=e1.id JOIN el_login e2 ON e2.id=m.sender_receiver_id WHERE (m.owner_id=$send AND m.sender_receiver_id=$receive) OR (m.owner_id=$receive AND m.sender_receiver_id=$send) group by m.date order by m.date ASC";
    //     return $this->db->query($query);
    // }
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function updateProfile($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_siswa', $data);
    }
    public function updateImage($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('el_siswa', $data);
    }
    public function filterSiswa($like, $kelamin, $agama, $kelas)
    {
        $this->db->select('el_kelas_siswa.siswa_id, el_siswa.nis, el_siswa.nama as nama_siswa, el_siswa.jenis_kelamin, el_siswa.tempat_lahir, el_siswa.tgl_lahir, el_siswa.agama, el_siswa.tahun_masuk, el_siswa.alamat, el_siswa.status_id, el_kelas.nama as nama_kelas, el_kelas_siswa.kelas_id as id_kelas');
        $this->db->from('el_siswa');
        $this->db->join('el_kelas_siswa', 'el_kelas_siswa.siswa_id=el_siswa.id');
        $this->db->join('el_kelas', 'el_kelas.id=el_kelas_siswa.kelas_id');
        $this->db->where('el_kelas_siswa.aktif', '1');
        if (!empty($like)) {
            $this->db->group_start();
            if ($like['nis'] != '')
                $this->db->like('el_siswa.nis', $like['nis']);
            if ($like['nama'] != '')
                $this->db->or_like('el_siswa.nama', $like['nama']);
            if ($like['tahun_masuk'] != '')
                $this->db->or_like('el_siswa.tahun_masuk', $like['tahun_masuk']);
            if ($like['tempat_lahir'] != '')
                $this->db->or_like('el_siswa.tempat_lahir', $like['tempat_lahir']);
            if ($like['alamat'] != '')
                $this->db->or_like('el_siswa.alamat', $like['alamat']);
            if ($like['tgl_lahir'] != '')
                $this->db->or_like('el_siswa.tgl_lahir', $like['tgl_lahir']);
            if ($like['status_id'] != '')
                $this->db->or_like('el_siswa.status_id', $like['status_id']);
            if (!empty($kelamin)) {
                for ($i = 0; $i < count($kelamin); $i++) {
                    $this->db->or_like('el_siswa.jenis_kelamin', $kelamin[$i]);
                }
            }
            if (!empty($agama)) {
                for ($i = 0; $i < count($agama); $i++) {
                    $this->db->or_like('el_siswa.agama', $agama[$i]);
                }
            }
            if (!empty($kelas)) {
                for ($i = 0; $i < count($kelas); $i++) {
                    $this->db->or_like('el_kelas.nama', $kelas[$i]);
                }
            }
            $this->db->group_end();
        }
        return $this->db->get();
    }
    public function detailFilterSiswa($where)
    {
        $this->db->select('el_kelas_siswa.siswa_id, el_siswa.nis, el_siswa.nama as nama_siswa, el_siswa.jenis_kelamin, el_siswa.tempat_lahir, el_siswa.tgl_lahir, el_siswa.agama, el_siswa.tahun_masuk, el_siswa.alamat, el_siswa.status_id, el_kelas.nama as nama_kelas, el_kelas_siswa.kelas_id as id_kelas');
        $this->db->from('el_siswa');
        $this->db->join('el_kelas_siswa', 'el_kelas_siswa.siswa_id=el_siswa.id');
        $this->db->join('el_kelas', 'el_kelas.id=el_kelas_siswa.kelas_id');
        $this->db->where('el_siswa.id', $where);
        return $this->db->get();
    }
    public function jadwalPelajaran($id, $hari)
    {
        return $this->db->query("SELECT
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
            eks.siswa_id = " . $id . " AND
            eks.aktif = 1 AND
            ema.hari_id = " . $hari .
            " ORDER BY ema.jam_mulai ASC
            ");
    }
    public function getKelasSiswa($siswa_id)
    {
        return  $this->db->query("SELECT el_kelas_siswa.id,siswa_id,nama,kelas_id,el_kelas_siswa.aktif FROM el_kelas_siswa join el_kelas ON el_kelas.id=el_kelas_siswa.kelas_id WHERE el_kelas_siswa.siswa_id=" . $siswa_id);
    }
    public function filterPengajar($like, $kelamin)
    {
        $this->db->select('el_pengajar.`id`, `nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `foto`, `status_id`,`is_admin`');
        $this->db->from('el_pengajar');
        $this->db->join('el_login', 'el_login.pengajar_id=el_pengajar.id');
        $this->db->where('status_id', '1');
        if (!empty($like)) {
            $this->db->group_start();
            if ($like['nip'] != '')
                $this->db->like('nip', $like['nip']);
            if ($like['nama'] != '')
                $this->db->or_like('nama', $like['nama']);
            if ($like['tempat_lahir'] != '')
                $this->db->or_like('tempat_lahir', $like['tempat_lahir']);
            if ($like['alamat'] != '')
                $this->db->or_like('alamat', $like['alamat']);
            if ($like['tgl_lahir'] != '')
                $this->db->or_like('tgl_lahir', $like['tgl_lahir']);
            if ($like['is_admin'] != '')
                $this->db->or_like('is_admin', $like['is_admin']);
            if (!empty($kelamin)) {
                for ($i = 0; $i < count($kelamin); $i++) {
                    $this->db->or_like('jenis_kelamin', $kelamin[$i]);
                }
            }
            $this->db->group_end();
        }
        return $this->db->get();
    }
    // public function jadwalPengajar($id)
    // {
    //     return $this->db->query('SELECT
    //         el_mapel_ajar.hari_id,
    //         el_mapel_ajar.jam_mulai,
    //         el_mapel_ajar.jam_selesai,
    //         el_mapel_ajar.pengajar_id,
    //         el_mapel_ajar.mapel_kelas_id,
    //         el_pengajar.nama,
    //         el_mapel_ajar.aktif,
    //         el_mapel.nama AS pelajaran,
    //         el_mapel_kelas.kelas_id
    //         FROM
    //         el_mapel_ajar
    //         JOIN el_pengajar ON el_mapel_ajar.pengajar_id = el_pengajar.id
    //         JOIN el_mapel_kelas ON el_mapel_ajar.mapel_kelas_id = el_mapel_kelas.id
    //         INNER JOIN el_mapel ON el_mapel_kelas.mapel_id = el_mapel.id
    //         WHERE el_mapel_ajar.pengajar_id = ' . $id . '
    //         ORDER BY
    //         el_mapel_ajar.hari_id ASC
    //         ');
    // }
    public function getUjianSiswa($id)
    {
        return $this->db->query('SELECT DISTINCT el_ujian.id,judul,tgl_dibuat,tgl_expired,waktu,el_ujian.mapel_kelas_id,el_mapel.nama as mapel,el_kelas.nama as kelas,el_kelas_siswa.kelas_id,el_kelas_siswa.siswa_id
                FROM el_ujian 
                JOIN el_mapel_kelas on el_mapel_kelas.id=el_ujian.mapel_kelas_id 
                JOIN el_mapel on el_mapel.id=el_mapel_kelas.mapel_id 
                JOIN el_kelas on el_kelas.id=el_mapel_kelas.kelas_id
                JOIN el_kelas_siswa on el_kelas_siswa.kelas_id =el_kelas.id
                WHERE el_kelas_siswa.aktif=1 and el_kelas_siswa.siswa_id=' . $id);
    }
    public function getmasukUjianSiswa($id)
    {
        return $this->db->query('SELECT DISTINCT el_ujian.id,judul,tgl_dibuat,tgl_expired,waktu,el_ujian.mapel_kelas_id,el_mapel.nama as mapel,el_kelas.nama as kelas,el_kelas_siswa.kelas_id,el_kelas_siswa.siswa_id
                FROM el_ujian 
                JOIN el_mapel_kelas on el_mapel_kelas.id=el_ujian.mapel_kelas_id 
                JOIN el_mapel on el_mapel.id=el_mapel_kelas.mapel_id 
                JOIN el_kelas on el_kelas.id=el_mapel_kelas.kelas_id
                JOIN el_kelas_siswa on el_kelas_siswa.kelas_id =el_kelas.id
                WHERE el_kelas_siswa.aktif=1 and el_ujian.id=' . $id);
    }
    public function getSoalUjian($id)
    {
        return $this->db->query('SELECT * FROM el_ujian_soal JOIN el_soal USING(id_soal) WHERE el_ujian_soal.id_ujian=' . $id);
    }
    public function getAllKelas()
    {
        return  $this->db->query("SELECT * FROM  el_kelas ORDER BY urutan");
    }
    public function getKelas($id)
    {
        return $this->db->query("SELECT
            ek.id,
            ek.nama
            FROM
            el_kelas_siswa AS eks
            INNER JOIN el_kelas AS ek ON eks.kelas_id = ek.id
            WHERE
            eks.aktif = 1 AND
            eks.siswa_id = 
            " . $id);
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

    public function getMateriKelas($kelas, $mapel)
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
            emk.kelas_id = ' . $kelas);
    }
    public function getTugasKelas($kelas, $mapel)
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
            etk.kelas_id = ' . $kelas);
    }
    public function getPengajar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('el_pengajar');
    }

    // public function absensi($kelas, $mapel, $id)
    // {
    //     return $this->db->query('SELECT
    //         eas.`status`,
    //         ea.tanggal,
    //         ea.jam_mulai,
    //         ea.jam_selesai,
    //         ep.nama
    //         FROM
    //         el_absen_siswa AS eas
    //         INNER JOIN el_absen AS ea ON eas.absen_id = ea.id
    //         INNER JOIN el_pengajar AS ep ON ea.pengajar_id = ep.id
    //         WHERE
    //         ea.kelas_id = ' . $kelas . ' AND
    //         ea.mapel_id = ' . $mapel . ' AND
    //         eas.siswa_id =' . $id);
    // }
}
