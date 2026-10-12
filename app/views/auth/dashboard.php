
<!-- dashboard.php -->
<h1>Welcome, <?= $this->session->userdata('username') ?>!</h1>
<p>Role: <?= $this->session->userdata('role') ?></p>
<a href="<?= site_url('auth/logout') ?>">Logout</a>