# Class Diagram - Sistem Informasi Akademik Sekolah

Diagram kelas untuk sistem akademik sekolah yang terintegrasi meliputi manajemen pengguna, kelas, guru, siswa, jadwal, dan penilaian.

> **Catatan:** Class diagram lengkap tersimpan dalam format PlantUML di `class_diagram.puml` untuk visualisasi ERD yang lebih detail.

## Diagram Mermaid (Simplified)

```mermaid
classDiagram
    direction TB

    class User {
        -bigint id
        -varchar name
        -varchar email
        -varchar no_induk
        -varchar id_card
        -enum role
        +login() boolean
        +logout() void
    }

    class Siswa {
        -bigint id
        -varchar no_induk
        -varchar nis
        -varchar nama_siswa
        -int kelas_id
        -char jk
        -varchar telp
        -varchar tmp_lahir
        -date tgl_lahir
        -varchar foto
        +lihatJadwal() array
        +lihatNilai() object
    }

    class Guru {
        -bigint id
        -varchar id_card
        -varchar nip
        -varchar nama_guru
        -int mapel_id
        -varchar kode
        -char jk
        -varchar telp
        -varchar tmp_lahir
        -date tgl_lahir
        -varchar foto
        +inputNilai() boolean
        +cetakJadwal() void
    }

    class Kelas {
        -bigint id
        -int paket_id
        -varchar nama_kelas
        -int guru_id
    }

    class Paket {
        -bigint id
        -varchar ket
    }

    class Mapel {
        -bigint id
        -varchar nama_mapel
        -int paket_id
        -varchar kelompok
    }

    class Jadwal {
        -bigint id
        -int hari_id
        -int kelas_id
        -int mapel_id
        -int guru_id
        -int ruang_id
        -time jam_mulai
        -time jam_selesai
    }

    class Rapot {
        -bigint id
        -int siswa_id
        -int kelas_id
        -int mapel_id
        -int guru_id
        -decimal p_nilai
        -varchar p_predikat
        -text p_deskripsi
        -decimal k_nilai
        -varchar k_predikat
        -text k_deskripsi
        +hitungNilaiAkhir() void
    }

    class Ulangan {
        -bigint id
        -int siswa_id
        -int kelas_id
        -int guru_id
        -int mapel_id
        -decimal ulha_1
        -decimal ulha_2
        -decimal uts
        -decimal ulha_3
        -decimal uas
    }

    class Sikap {
        -bigint id
        -int siswa_id
        -int kelas_id
        -int guru_id
        -int mapel_id
        -varchar sikap_1
        -varchar sikap_2
        -varchar sikap_3
    }

    class Kehadiran {
        -bigint id
        -varchar ket
        -varchar color
    }

    class Absen {
        -bigint id
        -int guru_id
        -date tanggal
        -int kehadiran_id
    }

    class AbsenSiswa {
        -bigint id
        -date tanggal
        -int siswa_id
        -int jadwal_id
        -int kehadiran_id
    }

    %% Relasi Akun
    User "1" o-- "1" Siswa : punya_akun
    User "1" o-- "1" Guru : punya_akun

    %% Relasi Master Data
    Paket "1" o-- "*" Mapel : memiliki
    Paket "1" o-- "*" Kelas : terdiri_dari
    Kelas "1" o-- "*" Siswa : memiliki
    Guru "1" --> "1" Kelas : wali_kelas
    Guru "*" --> "1" Mapel : mengajar
    Mapel "1" --> "1" Paket : bagian_dari

    %% Relasi Jadwal
    Kelas "1" --> "*" Jadwal : di_kelas
    Mapel "1" --> "*" Jadwal : pelajaran
    Guru "1" --> "*" Jadwal : pengajar

    %% Relasi Penilaian
    Siswa "1" --> "*" Rapot : memiliki
    Siswa "1" --> "*" Ulangan : ambil
    Siswa "1" --> "*" Sikap : miliki
    Kelas "1" --> "*" Rapot : dari
    Mapel "1" --> "*" Rapot : pelajaran
    Mapel "1" --> "*" Ulangan : untuk
    Mapel "1" --> "*" Sikap : untuk
    Guru "1" --> "*" Rapot : dinilai_oleh
    Guru "1" --> "*" Ulangan : dari_guru
    Guru "1" --> "*" Sikap : dari_guru

    %% Relasi Kehadiran
    Kehadiran "1" o-- "*" Absen : status
    Guru "1" --> "*" Absen : absensi
    Kehadiran "1" o-- "*" AbsenSiswa : status
    Siswa "1" --> "*" AbsenSiswa : memiliki
    Jadwal "1" --> "*" AbsenSiswa : untuk
```

## Entitas dan Atribut Utama

### User (Pengguna/Akun)

- **id**: Identitas unik pengguna
- **name**: Nama lengkap
- **email**: Alamat email
- **no_induk**: Nomor induk (siswa/guru)
- **id_card**: Nomor identitas (KTP/SIM)
- **role**: Peran (siswa, guru, admin)

### Siswa

- **no_induk**: Nomor Induk Siswa
- **nis**: Nomor Induk Sekolah
- **nama_siswa**: Nama lengkap siswa
- **kelas_id**: Referensi ke Kelas
- **jk**: Jenis kelamin
- **telp, tmp_lahir, tgl_lahir**: Data pribadi
- **foto**: Foto profil

### Guru

- **id_card**: Nomor identitas
- **nip**: Nomor Induk Pegawai
- **nama_guru**: Nama lengkap guru
- **mapel_id**: Mata pelajaran yang diajar
- **kode**: Kode guru unik
- **jk, telp, tmp_lahir, tgl_lahir**: Data pribadi

### Kelas

- **nama_kelas**: Nama/identitas kelas
- **paket_id**: Program/paket kelas
- **guru_id**: Wali kelas

### Jadwal

- **hari_id**: Hari dalam seminggu
- **jam_mulai, jam_selesai**: Waktu pelajaran
- **kelas_id, mapel_id, guru_id, ruang_id**: Referensi

### Rapot (Laporan Hasil Belajar)

- **p_nilai, k_nilai**: Nilai pengetahuan dan keterampilan
- **p_predikat, k_predikat**: Predikat/grade
- **p_deskripsi, k_deskripsi**: Deskripsi hasil belajar

### Ulangan (Penilaian Berkala)

- **ulha_1, ulha_2, ulha_3**: Ulangan harian
- **uts**: Ujian tengah semester
- **uas**: Ujian akhir semester

### Sikap (Penilaian Karakter)

- **sikap_1, sikap_2, sikap_3**: Tiga aspek penilaian sikap

### Kehadiran (Jenis Kehadiran)

- **id**: Identitas jenis kehadiran
- **ket**: Keterangan status kehadiran (Hadir, Sakit, Izin, Alfa, dll)
- **color**: Warna untuk keperluan UI/tampilan

### Absen (Absensi Guru)

- **guru_id**: Referensi ke guru
- **tanggal**: Tanggal absensi
- **kehadiran_id**: Jenis kehadiran (Hadir/Tidak Hadir/dll)

### AbsenSiswa (Absensi Siswa)

- **tanggal**: Tanggal absensi siswa
- **siswa_id**: Referensi ke siswa
- **jadwal_id**: Referensi ke jadwal pelajaran
- **kehadiran_id**: Jenis kehadiran siswa

## Relasi Antar Entitas

### Relasi Inti

- **User ↔ Siswa/Guru**: User adalah akun yang terkait dengan Siswa atau Guru
- **Paket → Kelas/Mapel**: Paket mengelompokkan kelas dan mata pelajaran
- **Guru → Kelas**: Guru dapat menjadi wali kelas
- **Guru → Mapel**: Guru mengajar satu mata pelajaran

### Relasi Jadwal

- **Kelas, Mapel, Guru → Jadwal**: Jadwal menghubungkan kelas, mata pelajaran, dan guru dalam waktu tertentu

### Relasi Penilaian

- **Siswa → Rapot/Ulangan/Sikap**: Siswa memiliki berbagai penilaian
- **Guru → Penilaian**: Guru menginput nilai
- **Mapel → Penilaian**: Setiap penilaian terkait dengan mata pelajaran tertentu

### Relasi Kehadiran

- **Kehadiran (1) → (\*) Absen**: Satu jenis kehadiran dapat memiliki banyak catatan absensi
- **Guru (1) → (\*) Absen**: Satu guru dapat memiliki banyak catatan absensi
