<style>
    .carousel-item {
        width: 100%;
        height: 400px;
        /* Sesuaikan tinggi sesuai kebutuhan */
    }
</style>

<div class="container mt-4">
    <div id="carouselExampleCaptions" class="carousel slide rounded">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= BASEURL; ?>/img/csr1.jpg" style="width: 100px;" class="d-block w-100 img-fluid rounded" alt="...">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/csr2.jpg" style="width: 100px;" class="d-block w-100 img-fluid rounded" alt="...">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/csr3.jpg" style="width: 100px;" class="d-block w-100 img-fluid rounded" alt="...">
                <div class="carousel-caption d-none d-md-block text-light ">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- tampilan figure -->
    <section class="container pt-5 d-flex d-flex justify-content-center">
        <div class="card me-4" style="width: 18rem;">
            <img src="<?= BASEURL; ?>/img/kim-hye-jun.jpg" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
                <p class="card-title">Kim Hye Jun</p>
                <p class="card-text">Kim Hye-jun ialah aktris kelahiran 8 Mei 1995 berkebangsaan Korea Selatan.</p>
                <a href="https://www.instagram.com/hyello._.o/" class="btn btn-primary">Instagram</a>
            </div>
        </div>

        <div class="card me-4" style="width: 18rem;">
            <img src="<?= BASEURL; ?>/img/leedongwook.jpg" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
                <p class="card-title">Lee Dong-wook</p>
                <p class="card-text">Lee Dong-wook, adalah seorang aktor Korea Selatan. Ia terkenal karena peran utamanya</p>
                <a href="https://www.instagram.com/leedongwook_official/" class="btn btn-primary">Instagram</a>
            </div>
        </div>

        <div class="card me-4" style="width: 18rem;">
            <img src="<?= BASEURL; ?>/img/parkjibin.jpg" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
                <p class="card-title">Park Ji-Bin</p>
                <p class="card-text">Park Ji-bin adalah aktor asal Korea Selatan. kelahiran 14 Maret 1995. Pengkhianat di A Shop for Killers</p>
                <a href="https://www.instagram.com/impactorpjb/" class="btn btn-primary">Instagram</a>
            </div>
        </div>
    </section>

    <!-- membuat tambilan konten -->
    <div class="container mt-4">
        <h3 class="text-center">Sinopsis A Shop For Killer</h3>
        <div class="grid col-12 d-flex mt-5">
            <div class="grid-item col-5">
                <img src="<?= BASEURL; ?>/img/csr3.jpg" class="figure-img img-fluid rounded" alt="Gambar" width="400px" height="300px">
            </div>
            <div class="grid-item col-6">
                <p class="card-text">A Shop for Killer mengisahkan tentang pengungkapan misteri seorang gadis yang akan menjadi target korban pembunuhan setelah pamannya meninggal.

                    Serial ini akan mengikuti kisah perjalan hidup seorang gadis remaja Jung Ji An (Kim Hye Jun). hidupnya cukup miris.

                    Sejak kecil ia sudah mengalami kejadian mencekam dalam hidupnya. Sang ibu meninggal karena dibunuh oleh ayahnya sendiri. Tidak lama sang ayah juga memutuskan untuk bunuh diri setelah nenek Jung Ji An meninggal dunia.

                    Jadi yatim piatu dan hidup sebatang kara, Jung Ji An kemudian diasuh oleh pamannya bernama Jung Ji Man (Lee Dong Wook).</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid col-12 d-flex mt-5">

            <div class="grid-item col-6">

                <p class="card-text">Bagi Jung Ji An, pamannya tersebut adalah seorang pengelola sebuah shopping mall. Namun, yang tak Ji An tahu adalah bahwa tempat kerja pamannya tersebut sebenarnya sangat misterius.

                    Jung Ji An sendiri tidak tahu latar belakang pekerjaan pamannya, yang gadis itu tahu pamannya tersebut cukup baik menerimanya yang sebatang kara.

                    Ketika beranjak dewasa, Ji An yang telah lulus SMA berencana untuk pergi kuliah. Jung Ji An kemudian memutuskan untuk tinggal sendiri dan melanjutkan pendidikan di perguruan tinggi.</p>
            </div>
            <div class="grid-item col-5">
                <img src="<?= BASEURL; ?>/img/csr1.jpg" class="ms-4 figure-img img-fluid rounded" alt="Gambar" width="400px" height="300px">
            </div>
        </div>
    </div>
</div>