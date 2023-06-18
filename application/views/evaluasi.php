<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Evaluasi</h2>
                <div data-aos="fade-up" data-aos-duration="1600" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="<?= base_url('welcome/evaluasi') ?>">Evaluasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_40">
    <div class="container">


        <div class="home-box custom-box" style="background-color:#baff9d;">
            <h3>Instruksi : <p>Jawab Pertanyaan Berikut Dengan Benar</p>
            </h3>
            <p>Total Pertanyaan : <span class="total-question"></span></p>
            <button type="button" class="btn" onclick="StartQuiz()">Mulai Quiz</button>
        </div>


        <div class="quiz-box custom-box hide" style="background-color:#baff9d;">

            <div class="question-number">
            </div>


            <div class="question-text">
            </div>


            <div class="option-container">

            </div>

            <div class="next-question-btn">
                <button type="button" class="btn" onclick="next()">Selanjutnya</button>
            </div>

            <div class="answers-indicator">

            </div>

        </div>

        <div class="result-box custom-box hide">

            <h1>Hasil Quiz</h1>

            <table style="border-color: rgb(255, 255, 255);">

                <tr>
                    <td>Total Pertanyaan</td>
                    <td><span class="total-question"></span></td>
                </tr>


                <tr>
                    <td>Percobaan</td>
                    <td><span class="total-attempt"></span></td>
                </tr>


                <tr>
                    <td>Benar</td>
                    <td><span class="total-correct"></span></td>
                </tr>


                <tr>
                    <td>Salah</td>
                    <td><span class="total-wrong"></span></td>
                </tr>


                <tr>
                    <td>Persentase</td>
                    <td><span class="total-percentage"></span></td>

                </tr>


                <tr>
                    <td>Total Skor</td>
                    <td><span class="total-score"></span></td>
                </tr>


            </table>

            <button type="button" class="btn" onclick="tryAgainQuiz()">Coba lagi</button>
            <button type="button" class="btn" onclick="backTohome()">Kembali</button>


        </div>


    </div>
</section>
<!--================Contact Area =================-->