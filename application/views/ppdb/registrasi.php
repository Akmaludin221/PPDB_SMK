 <header>
     <div class="container">
         <div id="branding">
             <h1><span>PPDB SMK </span>Citra Bangsas</h1>
         </div>
     </div>
 </header>
 <section id="form-base">
     <div class="container">
         <h1>Formulir Pendaftaran Siswa</h1>
         <p>Bertanda "<span>*</span>" wajib di isi</p>
         <form method="post" action="<?= base_url('pendaftaran/daftar') ?>">
             <fieldset>
                 <legend>Biodata Siswa</legend>
                 <div class="input-case">
                     <label for="nisn">NISN<span>*</span></label>
                     <input type="text" name="nisn" placeholder="Nomor Induk Siswa Nasional" id="nisn" value="<?= set_value('nisn') ?>">
                 </div>
                 <?= form_error('nisn', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label for="nama">Nama Lengkap <span>*</span></label>
                     <input type="text" name="nama" placeholder="masukan nama lengakap" id="nama" value="<?= set_value('nama') ?>">
                 </div>
                 <?= form_error('nama', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Alamat<span>*</span></label>
                     <textarea name="alamat" id="alamat" cols="30" rows="10"><?= set_value('alamat') ?></textarea>
                 </div>
                 <?= form_error('alamat', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Nama Provinsi<span>*</span></label>
                     <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi tinggal" value="<?= set_value('provinsi') ?>">
                 </div>
                 <?= form_error('provinsi', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Kabupaten/Kota<span>*</span></label>
                     <input type="text" name="kotaKabupaten" id="kotaKabupaten" placeholder="Kabupaten/Kota tinggal" value="<?= set_value('kotaKabupaten') ?>">
                 </div>
                 <?= form_error('kotaKabupaten', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Kode Pos</label>
                     <input type="text" name="kodePos" id="kodePos" placeholder="Kode Pos" value="<?= set_value('kodePos') ?>">
                 </div>
                 <div class="input-case">
                     <label>Tanggal Lahir<span>*</span></label>
                     <input type="text" name="TTG" id="TTG" placeholder="tahun/bulan/tanggal" value="<?= set_value('TTG') ?>">
                 </div>
                 <?= form_error('TTG', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Jenis Kelamin<span>*</span></label>
                     <div class="input-radio">
                         <input type="radio" name="jenisKelamin" id="jenisKelamin" value="L" <?= set_radio('jenisKelamin', 'L'); ?>>
                         <label for="laki-Laki">Laki-Laki</label>

                         <input type="radio" name="jenisKelamin" id="jenisKelamin" value="P" <?= set_radio('jenisKelamin', 'P'); ?>>
                         <label for="perempuan">Perempuan</label>
                     </div>
                 </div>
                 <?= form_error('jenisKelamin', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Agama<span>*</span></label>
                     <select name="agama" id="agama">
                         <option value="islam" <?= set_select('agama', 'islam'); ?>>Islam</option>
                         <option value="katolik" <?= set_select('agama', 'katolik'); ?>>Katolik</option>
                         <option value="protestan" <?= set_select('agama', 'protestan'); ?>>Protestan</option>
                         <option value="hindu" <?= set_select('agama', 'hindu'); ?>>Hindu</option>
                         <option value="budha" <?= set_select('agama', 'budha'); ?>>Budha</option>
                         <option value="kong hu cu" <?= set_select('agama', 'kong hu cu'); ?>>Kong Hu cu</option>
                     </select>
                 </div>
                 <div class="input-case">
                     <label>Kewarganegaraan<span>*</span></label>
                     <div class="input-radio">
                         <input type="radio" name="wargaNegara" id="wargaNegara" value="WNI" <?= set_radio('wargaNegara', 'WNI', TRUE) ?>>
                         <label for="WNI">WNI</label>
                         <input type="radio" name="wargaNegara" id="wargaNegara" value="WNA" <?= set_radio('wargaNegara', 'WNA'); ?>>
                         <label for="WNA">WNA</label>
                     </div>
                 </div>
                 <?= form_error('wargaNegara', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Alamat E-mail<span>*</span></label>
                     <input type="text" name="email" placeholder="Alamat E-mail aktif" value="<?= set_value('email') ?>">
                 </div>
                 <?= form_error('email', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Nomor Telepon</label>
                     <input type="text" name="noTelepon" placeholder="Nomor Telepon aktif" value="<?= set_value('noTelepon') ?>">
                 </div>
                 <div class="input-case">
                     <label>Nomor Handphone</label>
                     <input type="text" name="noHandPhone" placeholder="Nomor Handphone aktif" value="<?= set_value('noHandPhone') ?>">
                 </div>
             </fieldset>
             <fieldset>
                 <legend>Akademik</legend>
                 <div class="input-case">
                     <label>Status Terima<span>*</span></label>
                     <div class="input-radio">
                         <input type="radio" name="statusTerima" id="statusTerima" value="baru" <?= set_radio('statusTerima', 'baru'); ?>>
                         <label for="baru">Baru</label>
                         <input type="radio" name="statusTerima" id="statusTerima" value="pindahan" <?= set_radio('statusTerima', 'pindahan'); ?>>
                         <label for="Pindahan">Pindahan</label>
                     </div>
                 </div>
                 <?= form_error('statusTerima', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Tanggal STTB/Ijazah <span>*</span></label>
                     <input type="text" name="tgl_ijazah" id="tgl_ijazah" value="<?= set_value('tgl_ijazah') ?>" placeholder="tahun/bulan/tanggal">
                 </div>
                 <?= form_error('tgl_ijazah', '<p class="error">', '</p>'); ?>
                 <div class=" input-case">
                     <label>Asal Sekolah<span>*</span></label>
                     <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" placeholder="Alamat sekolah sebelumnya">
                 </div>
                 <?= form_error('asal_sekolah', '<p class="error">', '</p>'); ?>
                 <div class=" input-case">
                     <label>Alamat Sekolah<span>*</span></label>
                     <input type="text" name="alamat_sekolah" id="alamat_sekolah" value="<?= set_value('alamat') ?>" placeholder="asal seklah Sebelumnya">
                 </div>
                 <?= form_error('alamat_sekolah', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Nomor STTB/Ijazah<span>*</span></label>
                     <input type="text" name="nomor_ijazah" id="nomor_ijazah" value="<?= set_value('nomor_ijazah') ?>" placeholder="masukan nomor ijazah">
                 </div>
                 <?= form_error('nomor_ijazah', '<p class="error">', '</p>'); ?>
                 <div class="input-case">
                     <label>Jurusan Yang Dipilih<span>*</span></label>
                     <select name="jurusan" id="jurusan">
                         <option value="MM" <?= set_select('jurusan', 'MM'); ?>>Multi Media</option>
                         <option value="AP" <?= set_select('jurusan', 'AP'); ?>>Administrasi Perkantoran</option>
                         <option value="TKJ" <?= set_select('jurusan', 'TKJ'); ?>>Teknik Komputer dan Jaringan</option>
                     </select>
                 </div>
             </fieldset>
             <fieldset>
                 <legend>Wali Murid</legend>
                 <div class="orang-tua">
                     <div class="input-case" id="form-name">
                         <label for="NamaAyah">Nama Ayah <span>*</span> </label>
                         <input type="text" name="nama_ayah" id="nama_ayah" value="<?= set_value('nama_ayah') ?>" placeholder="Nama lengkap ayah">
                     </div>
                     <?= form_error('nama_ayah', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Pekerjaan <span>*</span></label>
                         <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah') ?>" placeholder="pekerjaan">
                     </div>
                     <?= form_error('pekerjaan_ayah', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">pedidikan terakhir <span>*</span></label>
                         <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" value="<?= set_value('pendidikan_ayah') ?>" placeholder="pendidikan">
                     </div>
                     <?= form_error('pendidikan_ayah', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Nomor Hp</label>
                         <input type="text" name="nomor_hp_ayah" id="nomor_hp_ayah" value="<?= set_value('nomor_hp_ayah') ?>" placeholder="nomor Handphone ayah">
                     </div>
                     <?= form_error('nomor_hp_ayah', '<p class="error">', '</p>'); ?>
                     <div class="input-case" id="form-name">
                         <label for="NamaIbu">Nama Ibu <span>*</span></label>
                         <input type="text" name="nama_ibu" id="nama_ibu" value="<?= set_value('nama_ibu') ?>" placeholder="Nama lengkap ibu">
                     </div>
                     <?= form_error('nama_ibu', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Pekerjaan <span>*</span></label>
                         <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu') ?>" placeholder="Pekerjaan ibu">
                     </div>
                     <?= form_error('pekerjaan_ibu', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">pedidikan terakhir <span>*</span></label>
                         <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" value="<?= set_value('pendidikan_ibu') ?>" placeholder="Pendidikan Ibu">
                     </div>
                     <?= form_error('pendidikan_ibu', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Nomor HandPhone</label>
                         <input type="text" name="nomor_hp_ibu" id="nomor_hp_ibu" value="<?= set_value('nomor_hp_ibu') ?>" placeholder="nomor Handphone ibu">
                     </div>
                     <?= form_error('nomor_hp_ibu', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Alamat Keluarga <span>*</span></label>
                         <textarea name="alamat_keluarga" id="alamat_keluarga" cols="30" rows="10"><?= set_value('alamat_keluarga') ?></textarea>
                     </div>
                     <?= form_error('alamat_keluarga', '<p class="error">', '</p>'); ?>
                 </div>
                 <hr />
                 <div class="orang-tua">
                     <div class="input-case" id="form-name">
                         <label for="NamaWali">Nama Wali Murid</label>
                         <input type="text" name="nama_wali" id="nama_wali" value="<?= set_value('nama_wali') ?>" placeholder="Nama Wali">
                     </div>
                     <?= form_error('nama_wali', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Pekerjaan</label>
                         <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" value="<?= set_value('pekerjaan_wali') ?>" placeholder="Pekerjaan wali">
                     </div>
                     <?= form_error('pekerjaan_wali', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">pedidikan terakhir</label>
                         <input type="text" name="pendidikan_wali" id="pendidika_wali" value="<?= set_value('pendidikan_wali') ?>" placeholder="pendidikan Wali">
                     </div>
                     <?= form_error('pendidikan_wali', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Nomor HandPhone</label>
                         <input type="text" name="nomor_hp_wali" id="nomor_hp_wali" value="<?= set_value('nomor_hp_wali') ?>" placeholder="Nomor HandPhone wali">
                     </div>
                     <?= form_error('nomor_hp_wali', '<p class="error">', '</p>'); ?>
                     <div class="input-case">
                         <label for="">Alamat</label>
                         <textarea name="alamat_wali" id="" cols="30" rows="10"><?= set_value('alamat_wali') ?></textarea>
                     </div>
                     <?= form_error('alamat_wali', '<p class="error">', '</p>'); ?>
                 </div>
             </fieldset>
             <div class="button-case">
                 <a href="<?= base_url('pendaftaran') ?>">Kembali</a>
                 <input type="submit" value="Lanjutkan">
             </div>
         </form>
     </div>
 </section>