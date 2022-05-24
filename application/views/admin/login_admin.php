    <header>
        <div class="container">
            <div id="branding">
                <h1><span>PPDB SMK </span>Citra Bangsa</h1>
            </div>
        </div>
    </header>
    <section id="login-admin">
        <div class="container">
            <h1>LOGIN ADMIN</h1>
            <form method="post" action="<?= base_url('login_admin/aksi_login') ?>">
                <div class="login-case">
                    <label for="ID">ID</label>
                    <input type="text" name="id" id="id">
                </div>
                <div class="login-case">
                    <label for="ID">Password</label>
                    <input type="Password" name="password" id="password">
                </div>
                <input type="submit" value="login">
            </form>
        </div>
    </section>