<?php

$handle = @fopen('db.html', "r");

if ($handle) {
    while (!feof($handle)) {
        $lines[] = fgets($handle, 4096);
    }
    fclose($handle);
}


//print_r($lines);

?>


<center>
    <div class="card card-info" style="width: 70%;">
        <div class="card-header">
            <h3>
                <center><b>
                        <h2>Data Pemantauan Covid19 wilayah <?php echo $wilayah; ?></h2>
                    </b>
                </center>
                <center>
                    <h3>Per <?php echo date("d M Y H:i:s"); ?></h3>
                    <h4>Operator : <?php echo $operator . "/" . $nim; ?></h4>
                </center>
            </h3>
        </div><br>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <?php if ($wilayah == 'DKI Jakarta') { ?>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php print_r($lines[1]); ?></h3>
                                    <p>Positif</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Positif Covid19 <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php print_r($lines[2]); ?></h3>
                                    <p>Dirawat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <a class="small-box-footer">Pasien Dirawat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php print_r($lines[3]); ?></h3>
                                    <p>Sembuh</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bicycle"></i>
                                </div>
                                <a class="small-box-footer">Pasien Sembuh <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php print_r($lines[4]); ?></h3>
                                    <p>Meninggal</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-minus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Meninggal <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    <?php } elseif ($wilayah == 'Jawa Barat') { ?>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php print_r($lines[6]); ?></h3>
                                    <p>Positif</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Positif Covid19 <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php print_r($lines[7]); ?></h3>
                                    <p>Dirawat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <a class="small-box-footer">Pasien Dirawat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php print_r($lines[8]); ?></h3>
                                    <p>Sembuh</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bicycle"></i>
                                </div>
                                <a class="small-box-footer">Pasien Sembuh <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php print_r($lines[9]); ?></h3>
                                    <p>Meninggal</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-minus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Meninggal <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>



                    <?php } elseif ($wilayah == 'Banten') { ?>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php print_r($lines[11]); ?></h3>
                                    <p>Positif</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Positif Covid19 <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php print_r($lines[12]); ?></h3>
                                    <p>Dirawat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <a class="small-box-footer">Pasien Dirawat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php print_r($lines[13]); ?></h3>
                                    <p>Sembuh</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bicycle"></i>
                                </div>
                                <a class="small-box-footer">Pasien Sembuh <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php print_r($lines[14]); ?></h3>
                                    <p>Meninggal</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-minus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Meninggal <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    <?php } elseif ($wilayah == 'Jawa Tengah') { ?>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php print_r($lines[16]); ?></h3>
                                    <p>Positif</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Positif Covid19 <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php print_r($lines[17]); ?></h3>
                                    <p>Dirawat</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <a class="small-box-footer">Pasien Dirawat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php print_r($lines[18]); ?></h3>
                                    <p>Sembuh</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bicycle"></i>
                                </div>
                                <a class="small-box-footer">Pasien Sembuh <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php print_r($lines[19]); ?></h3>
                                    <p>Meninggal</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-minus"></i>
                                </div>
                                <a class="small-box-footer">Pasien Meninggal <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                </div>
            </div>

        <?php } ?>
    </div>