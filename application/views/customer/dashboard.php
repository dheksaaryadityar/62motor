<body>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Beli mOTOR </h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->

    <?php foreach ($motor as $mt) : ?>

        <section class="py-2">
            <div class="container px-4">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" width="160px" src="<?php echo base_url('assets/upload/') . $mt->gambar ?>" alt="" />
                            <!-- Product details-->
                            <div class="card-body">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> Merk : <?php echo $mt->merk ?> </h5>
                                    <!-- Product price-->
                                    <h5>Harga : <?php echo $mt->harga ?> </h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <?php
                                if ($mt->status == "0") {
                                    echo "<span class='btn btn-danger' disable>Telah Terjual</span>";
                                } else {
                                    echo anchor('customer/beli/tambah_beli/' . $mt->id_motor, '<button class="btn btn-success">Beli</button>');
                                }

                                ?>
                                <a class="btn btn-warning mr-3" href="<?php echo base_url('customer/dashboard/detail_motor/') . $mt->id_motor ?>">Detail</a>

                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>

    <?php endforeach; ?>
    <!-- Footer-->