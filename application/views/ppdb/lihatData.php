<header>
    <div class="container">
        <div id="branding">
            <h1><span>PPDB SMK </span>Citra Bangsa</h1>
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url('pendaftaran') ?>">home</a></li>
                <li><a href="<?= base_url('pendaftaran/login_user'); ?>">Calon Siswa</a></li>
                <li><a href="<?= base_url('pendaftaran/help') ?>">Cara pendaftaran</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="report">
    <div class="container">
        <h1>Hasil Akhir</h1>
        <div class="report-case">
            <table>
                <?php

                foreach ($data as $row) {
                ?>

                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><?= $row->NISN ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $row->nama ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $row->alamat ?></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td><?= $row->provinsi ?></td>
                    </tr>
                    <tr>
                        <td>Kabupaten / Kota</td>
                        <td>:</td>
                        <td><?= $row->kotaKabupaten ?></td>
                    </tr>
                    <tr>
                        <td>kodePos</td>
                        <td>:</td>
                        <td><?= $row->kodePos ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td><?= $row->TTG ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $row->jenisKelamin ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?= $row->agama ?></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td>:</td>
                        <td><?= $row->wargaNegara ?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td><?= $row->email ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><?= $row->noTelepon ?></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><?= $row->noHandPhone ?></td>
                    </tr>
                    <tr>
                        <td>Status Terima</td>
                        <td>:</td>
                        <td><?= $row->status ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Ijazah</td>
                        <td>:</td>
                        <td><?= $row->tgl_ijazah ?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?= $row->asal_sekolah ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Sekolah</td>
                        <td>:</td>
                        <td><?= $row->alamat_sekolah ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Ijazah</td>
                        <td>:</td>
                        <td><?= $row->nomor_ijazah ?></td>
                    </tr>
                    <tr>
                        <td>jurusan</td>
                        <td>:</td>
                        <td><?= $row->jurusan ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td><?= $row->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td>pekerjaan</td>
                        <td>:</td>
                        <td><?= $row->pekerjaan_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><?= $row->pendidikan_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><?= $row->nomor_hp_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?= $row->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td>pekerjaan</td>
                        <td>:</td>
                        <td><?= $row->pekerjaan_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><?= $row->pendidikan_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><?= $row->nomor_hp_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Keluarga</td>
                        <td>:</td>
                        <td><?= $row->alamat_keluarga ?></td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td><?= $row->nama_wali ?></td>
                    </tr>
                    <tr>
                        <td>pekerjaan</td>
                        <td>:</td>
                        <td><?= $row->pekerjaan_wali ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><?= $row->pendidikan_wali ?></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><?= $row->nomor_hp_wali ?></td>
                    </tr>
                    <tr>
                        <td>Alamat wali</td>
                        <td>:</td>
                        <td><?= $row->alamat_wali ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="button-case">
                <form action="<?= base_url('login_siswa/logout') ?>">
                    <input type="submit" value="selesai">
                </form>
            </div>
        </div>

    </div>
</section>