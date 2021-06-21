<div class="form-body" class="container-fluid">
    <!-- <div class="website-logo">
        <a href="index.html">
            <div class="logo">
                <img class="logo-size" src="<?= base_url() ?>assets/images/logo-light.svg" alt="">
            </div>
        </a>
    </div> -->
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Gugus Mitigasi Lebak Selatan</h3>
                    <p>Bekerja setulus hati.</p>
                    <?= $this->session->flashdata('message'); ?>
                    <?php unset($_SESSION['message']); ?>
                    <!-- <div class="page-links">
                        <a href="login2.html" class="active">Login</a><a href="register2.html">Register</a>
                    </div> -->
                    <form action="<?= base_url('Auth'); ?>" method="POST">
                        <input class="form-control" type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>" required>
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="checkbox" id="chk1"><label for="chk1">Remember me</label>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button>
                        </div>
                    </form>
                    <!-- <div class="other-links">
                        <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>