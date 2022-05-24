<header>
    <div class="container">
        <div id="branding">
            <h1><span>PPDB SMK </span>Citra Bangsa</h1>
        </div>
        <ul>
            <li><a href="<?= base_url('pendaftaran'); ?>">home</a></li>
            <li><a href="<?= base_url('pendaftaran/login_user'); ?>">Calon Siswa</a></li>
            <li><a href="<?= base_url('pendaftaran/help') ?>">Cara pendaftaran</a></li>
        </ul>
    </div>
</header>
<section id="login-admin">
    <div class="container">
        <h1>LOGIN SISWA</h1>
        <form action="<?= base_url('login_siswa/aksi_login') ?>" method="POST">
            <div class="login-case">
                <label for="ID">ID</label>
                <input type="text" name="id" id="id">
            </div>
            <div class="login-case">
                <label for="ID">Password</label>
                <input type="Password" name="password" id="password">
            </div>
            <input type="submit" value="login">
            <a href="<?= base_url('pendaftaran') ?>">Kembali</a>
        </form>
    </div>
    <div class="keterangan-login">
        <ul>
            <li>Gunakan NISN Sebagai ID</li>
            <li>Gunakan Tanggal Lahir Sebagai Password dengan format "TahunBulanTanggal" <br>
                misalkan untuk tanggal lahir 1999/09/12 maka siswa hanya perlu memasukan password 19990912</li>
        </ul>
    </div>
</section>