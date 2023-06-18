<!--
@Project: Learnify
@Programmer: Syauqi Zaidan Khairan Khalaf
@Website: https://linktr.ee/syauqi
@Email : syaokay@gmail.com

@About-Learnify :
Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian
yang tersedia secara gratis. Learnify dibuat ditujukan agar para siswa dan
guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->


<!--================ Start footer Area  =================-->
<footer class="footer-area p_60">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Kami</h6>
                    <ul class="list">
                        <li><a href="<?= base_url('welcome/materi') ?>">Materi Mathify</a></li>
                        <li><a href="<?= base_url('welcome/latihan') ?>">Latihan Mathify</a></li>
                        <li><a href="<?= base_url('welcome/evaluasi') ?>">Evaluasi Mathify</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Pelajaran - Materi</h6>
                    <ul class="list">
                        <li><a href="javaScript:void(0);">Jenis dan Sifat Segitiga maupun Segiempat</a></li>
                        <li><a href="javaScript:void(0);">Luas dan Keliling Segitiga</a></li>
                        <li><a href="javaScript:void(0);">Luas dan Keliling Segiempat</a></li>
                        <li><a href="javaScript:void(0);">Masalah Yang Berhubungan dengan Segitiga dan Segiempat</a>
                        </li>
                        <li><a href="javaScript:void(0);">Luas dan Keliling Bangun Gabungans</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Developer</h6>
                    <ul class="list">
                        <li> Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness
                            victorious morality hope endless christian madness. Love dead fearful transvaluation
                            marvelous. </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h4 class="footer_title">Tentang Mathify</h4>
                <p style="text-align: justify;">
                    Web Edukasi Open Source yang dibuat oleh Johan Liebert. Mathify adalah Web edukasi yang dilengkapi
                    video, materi dan sistem ujian yang tersedia secara gratis. Mathify dibuat ditujukan agar para
                    siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
                </p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Start Login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;"
                    id="exampleModalCenterTitle">
                    Learnify - Masuk Sekarang</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= base_url('assets/'); ?>img/modal-login-2.png"
                                class="img-fluid img-responsive mx-auto " style="height: 350px;">
                        </div>
                        <div class=" col-md-6">
                            <form action="<?= base_url('welcome/validateLogin') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="<?= set_value('email'); ?>" class="form-control"
                                        name="email" autocomplete="off" id="email"
                                        placeholder="Masukan email mu disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukan password mu disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href=" <?= base_url('user/registration') ?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-block font-weight-bold"
                                    style="background-color: #4dbf1c;color:white;font-size:18px;">Login
                                    Sekarang!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->


<!-- Sweetaler Flashdata -->
<?php if ($this->session->flashdata('success-reg')) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang kamu boleh login!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('login-success')) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil daftar!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('success-verify')) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Email Telah Diverifikasi!',
    text: 'Sekarang login yuk!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('success-logout')) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kamu berhasil logout!',
    text: 'Selamat tinggal, Sampai jumpa lagi!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-login')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Gagal login!',
    text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-email')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Email Belum Diverifikasi!',
    text: 'Silahkan Cek Email Kamu Dahulu!',
    showConfirmButton: false,
    timer: 2500
})
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-pass')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Password Salah!',
    text: 'Silahkan Periksa Kembali Password Kamu!',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('not-login')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Harap Login Terlebih Dahulu !',
    text: 'Silahkan Login Dahulu !',
    showConfirmButton: false,
    timer: 2500
});
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('false-login')) : ?>
<script>
$("#exampleModalCenter").modal("show")
</script>
<?php endif; ?>

<script src="<?= base_url('assets/') ?>js/stellar.js"></script>
<script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.counterup.js"></script>
<script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
<script src="<?= base_url('assets/') ?>js/theme.js"></script>
<script>
var animateButton = function(e) {
    e.preventDefault;
    e.target.classList.remove('animate');
    e.target.classList.add('animate');
    setTimeout(function() {
        e.target.classList.remove('animate');
    }, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);
}
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="<?= base_url('assets/') ?>js/app.js"></script>
<script src="<?= base_url('assets/') ?>js/question.js"></script>
</body>

</html>