<header>
    <div class="container">
        <div id="branding">
            <h1><span>PPDB SMK </span>Citra Bangsa</h1>
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url('admin'); ?>">Daftar Siswa</a></li>
                <li><a href="<?= base_url('login_admin/logout') ?>">LOG OUT</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="list-data">
    <div class="container">
        <table>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>AKSI</th>
            </tr>
            <?php foreach ($data as $d) { ?>
                <tr>
                    <td><?php echo $d->NISN; ?></td>
                    <td><?php echo $d->nama; ?></td>
                    <td><?php echo $d->alamat; ?></td>
                    <td><?php echo $d->email; ?></td>
                    <td>
                        <form method="POST" action="<?= base_url('admin/detail_data/' . $d->id); ?>">
                            <input type="submit" value="Detail">
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</section>