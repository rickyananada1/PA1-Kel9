<?php
// Variabel untuk menentukan jumlah total halaman
$totalHalaman = 10;

// Variabel untuk menentukan nomor halaman aktif saat ini
$halamanAktif = 3;
?>

<div class="panel-footer">
    <div class="row">
        <div class="col-md-12 m-pagination" id="paginator">
            <ul class="m-pagination-page" style="">

                <?php
                // Looping untuk menampilkan halaman
                for ($i = 1; $i <= $totalHalaman; $i++) {
                    // Tambahkan kelas "active" jika nomor halaman sama dengan halaman aktif saat ini
                    $kelasAktif = ($i == $halamanAktif) ? 'active' : '';
                ?>

                <li><a data-page-index="<?php echo $i - 1; ?>" class="<?php echo $kelasAktif; ?>"><?php echo $i; ?></a></li>

                <?php } ?>

                <li><a data-page-index="3">»</a></li>
                <li><a data-page-index="99">Last</a></li>
            </ul>
            <div class="m-pagination-size" style="display: none;">
                <select data-page-btn="size">
                    <option value="5">5</option>
                    <option value="10" selected="">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="m-pagination-jump" style="">
                <div class="m-pagination-group"><input data-page-btn="jump" type="text"><button data-page-btn="jump"
                        type="button">Jump</button>
                </div>
            </div>
            <div class="m-pagination-info" style="">21 ~ 30 Total 1000</div>
        </div>
    </div>
</div>
