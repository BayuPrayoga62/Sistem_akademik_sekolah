# ERD / Class Diagram - Sistem Informasi Akademik Sekolah (Simplified)

Berikut adalah UML Class Diagram yang telah **disederhanakan**. Diagram ini hanya menampilkan 7 entitas paling krusial dalam sistem akademik Anda (menghilangkan tabel referensi kecil seperti Hari, Ruang, Kehadiran, dll) beserta atribut utamanya agar jauh lebih mudah dibaca dan dipahami relasinya.

```mermaid
classDiagram
    direction TB

    class User {
        -bigint id
        -varchar name
        -varchar email
        -enum role
        +login() boolean
        +logout() void
    }

    class Siswa {
        -bigint id
        -varchar nis
        -varchar nama_siswa
        -int kelas_id
        +lihatJadwal() array
        +lihatNilai() object
    }

    class Guru {
        -bigint id
        -varchar nip
        -varchar nama_guru
        -int mapel_id
        +inputNilai() boolean
        +cetakJadwal() void
    }

    class Kelas {
        -bigint id
        -varchar nama_kelas
        -int guru_id
    }

    class Mapel {
        -bigint id
        -varchar nama_mapel
    }

    class Jadwal {
        -bigint id
        -int kelas_id
        -int mapel_id
        -int guru_id
        -time jam_mulai
        -time jam_selesai
    }

    class Rapot {
        -bigint id
        -int siswa_id
        -int mapel_id
        -int guru_id
        -varchar p_nilai
        -varchar k_nilai
        +hitungNilaiAkhir() void
    }

    %% =======================
    %% Relasi Inti (Simplified)
    %% =======================

    %% Akun
    User "1" *-- "1" Siswa : Akun
    User "1" *-- "1" Guru : Akun

    %% Master
    Kelas "1" o-- "*" Siswa : memiliki
    Guru "1" --> "1" Kelas : wali_kelas
    Guru "*" --> "1" Mapel : mengajar

    %% Jadwal (Hubungan Kelas, Mapel, Guru)
    Jadwal "*" --> "1" Kelas : di_kelas
    Jadwal "*" --> "1" Mapel : pelajaran
    Jadwal "*" --> "1" Guru : pengajar

    %% Penilaian (Hubungan Siswa, Mapel, Guru)
    Rapot "*" --> "1" Siswa : milik
    Rapot "*" --> "1" Mapel : pelajaran
    Rapot "*" --> "1" Guru : dinilai_oleh
```
