<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>DEVELOPER</h3>
                    <p>
                        196423 TOMM <br />
                        Sitoluama, Institut Teknologi Del<br />
                        Indonesia <br /><br />
                        <strong>Phone:</strong> +6281396080977<br />
                        <strong>Email:</strong> tiantomm@gmail.com<br />
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link Layanan</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Tentang Desa</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Berita</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Layanan</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Alu - Alu</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Layanan</h4>
                    @foreach ($category2 as $lay)
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">{{ $lay->layanan_category }}</a>
                            </li>
                        </ul>
                    @endforeach

                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Buat Alu-Alu</h4>
                    <p>Alu-Alu adalah ekspresi Anda terhadap desa atau orang di sekitar Anda.</p>
                    <form action="#" method="post" role="form" class="php-email-form">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subjek" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit">Buat Alu Alu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Sitoluama</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by TOMM</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>
