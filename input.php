<?php

//Ambil Data
@$wilayah = $_GET['wilayah'];
@$positif = $_GET['positif'];
@$dirawat = $_GET['dirawat'];
@$sembuh = $_GET['sembuh'];
@$meninggal = $_GET['meninggal'];
$file = file('db.html');
$files = 'db.html';

// Baca file

$handle = @fopen('db.html', "r");

if ($handle) {
    while (!feof($handle)) {
        $lines[] = fgets($handle, 4096);
    }
    fclose($handle);
}


//print_r($lines);

// Proses Input File
if (!is_null($wilayah) && !is_null($positif) && !is_null($dirawat) && !is_null($sembuh) && !is_null($meninggal)) { ?>
    <?php if ($wilayah == 'DKI Jakarta') { ?>

        <?php
        $line_1 = 1;
        foreach ($file as $index_1 => $lines_1) {
            if ($index_1 == $line_1) {
                $file[$index_1] = $positif . "\n";
            }
        }
        $content_1 = implode($file);
        file_put_contents($files, $content_1);

        $line_2 = 2;
        foreach ($file as $index_2 => $lines_2) {
            if ($index_2 == $line_2) {
                $file[$index_2] = $dirawat . "\n";
            }
        }
        $content_2 = implode($file);
        file_put_contents($files, $content_2);

        $line_3 = 3;
        foreach ($file as $index_3 => $lines_3) {
            if ($index_3 == $line_3) {
                $file[$index_3] = $sembuh . "\n";
            }
        }
        $content_3 = implode($file);
        file_put_contents($files, $content_3);

        $line_4 = 4;
        foreach ($file as $index_4 => $lines_4) {
            if ($index_4 == $line_4) {
                $file[$index_4] = $meninggal . "\n";
            }
        }
        $content_4 = implode($file);
        file_put_contents($files, $content_4);
        ?>

    <?php } elseif ($wilayah == 'Jawa Barat') { ?>
        <?php
        $line_1 = 6;
        foreach ($file as $index_1 => $lines_1) {
            if ($index_1 == $line_1) {
                $file[$index_1] = $positif . "\n";
            }
        }
        $content_1 = implode($file);
        file_put_contents($files, $content_1);

        $line_2 = 7;
        foreach ($file as $index_2 => $lines_2) {
            if ($index_2 == $line_2) {
                $file[$index_2] = $dirawat . "\n";
            }
        }
        $content_2 = implode($file);
        file_put_contents($files, $content_2);

        $line_3 = 8;
        foreach ($file as $index_3 => $lines_3) {
            if ($index_3 == $line_3) {
                $file[$index_3] = $sembuh . "\n";
            }
        }
        $content_3 = implode($file);
        file_put_contents($files, $content_3);

        $line_4 = 9;
        foreach ($file as $index_4 => $lines_4) {
            if ($index_4 == $line_4) {
                $file[$index_4] = $meninggal . "\n";
            }
        }
        $content_4 = implode($file);
        file_put_contents($files, $content_4);
        ?>

    <?php } elseif ($wilayah == 'Banten') { ?>
        <?php
        $line_1 = 11;
        foreach ($file as $index_1 => $lines_1) {
            if ($index_1 == $line_1) {
                $file[$index_1] = $positif . "\n";
            }
        }
        $content_1 = implode($file);
        file_put_contents($files, $content_1);

        $line_2 = 12;
        foreach ($file as $index_2 => $lines_2) {
            if ($index_2 == $line_2) {
                $file[$index_2] = $dirawat . "\n";
            }
        }
        $content_2 = implode($file);
        file_put_contents($files, $content_2);

        $line_3 = 13;
        foreach ($file as $index_3 => $lines_3) {
            if ($index_3 == $line_3) {
                $file[$index_3] = $sembuh . "\n";
            }
        }
        $content_3 = implode($file);
        file_put_contents($files, $content_3);

        $line_4 = 14;
        foreach ($file as $index_4 => $lines_4) {
            if ($index_4 == $line_4) {
                $file[$index_4] = $meninggal . "\n";
            }
        }
        $content_4 = implode($file);
        file_put_contents($files, $content_4);
        ?>

    <?php } elseif ($wilayah == 'Jawa Tengah') { ?>
        <?php
        $line_1 = 16;
        foreach ($file as $index_1 => $lines_1) {
            if ($index_1 == $line_1) {
                $file[$index_1] = $positif . "\n";
            }
        }
        $content_1 = implode($file);
        file_put_contents($files, $content_1);

        $line_2 = 17;
        foreach ($file as $index_2 => $lines_2) {
            if ($index_2 == $line_2) {
                $file[$index_2] = $dirawat . "\n";
            }
        }
        $content_2 = implode($file);
        file_put_contents($files, $content_2);

        $line_3 = 18;
        foreach ($file as $index_3 => $lines_3) {
            if ($index_3 == $line_3) {
                $file[$index_3] = $sembuh . "\n";
            }
        }
        $content_3 = implode($file);
        file_put_contents($files, $content_3);

        $line_4 = 19;
        foreach ($file as $index_4 => $lines_4) {
            if ($index_4 == $line_4) {
                $file[$index_4] = $meninggal . "\n";
            }
        }
        $content_4 = implode($file);
        file_put_contents($files, $content_4);
        ?>

    <?php } ?>
    <meta http-equiv="refresh" content="0; URL=index.php?wilayah=<?php echo $wilayah; ?>" />
<?php } else {
?>
    <div class="card card-primary" style="width: 70%;">
        <div class="card-header">
            <h3 class="card-title">Wilayah : <?php echo @$wilayah; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <?php if ($wilayah == 'DKI Jakarta') { ?>

                    <form action="index.php" method="get">

                        <div class="form-group row">
                            <label for="Jumlah Positif" class="col-sm-2 col-form-label">Jumlah Positif</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="Jumlah Positif" name="positif" value=<?php print_r($lines[1]); ?> placeholder="Jumlah Positif">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah dirawat" class="col-sm-2 col-form-label">Jumlah dirawat</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="Jumlah dirawat" name="dirawat" value=<?php print_r($lines[2]); ?> placeholder="Jumlah dirawat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah sembuh" class="col-sm-2 col-form-label">Jumlah sembuh</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="Jumlah sembuh" name="sembuh" value=<?php print_r($lines[3]); ?> placeholder="Jumlah sembuh">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah meninggal" class="col-sm-2 col-form-label">Jumlah meninggal</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="Jumlah meninggal" name="meninggal" value=<?php print_r($lines[4]); ?> placeholder="Jumlah meninggal">
                            </div>
                        </div>

                        <input type="hidden" name="wilayah" value='<?php echo $wilayah; ?>'>

                    <?php } elseif ($wilayah == 'Jawa Barat') { ?>
                        <form action="index.php" method="get">
                            <div class="form-group row">
                                <label for="Jumlah Positif" class="col-sm-2 col-form-label">Jumlah Positif</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="Jumlah Positif" name="positif" value=<?php print_r($lines[6]); ?> placeholder="Jumlah Positif">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Jumlah dirawat" class="col-sm-2 col-form-label">Jumlah dirawat</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="Jumlah dirawat" name="dirawat" value=<?php print_r($lines[7]); ?> placeholder="Jumlah dirawat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Jumlah sembuh" class="col-sm-2 col-form-label">Jumlah sembuh</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="Jumlah sembuh" name="sembuh" value=<?php print_r($lines[8]); ?> placeholder="Jumlah sembuh">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Jumlah meninggal" class="col-sm-2 col-form-label">Jumlah meninggal</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="Jumlah meninggal" name="meninggal" value=<?php print_r($lines[9]); ?> placeholder="Jumlah meninggal">
                                </div>
                            </div>
                            <input type="hidden" name="wilayah" value='<?php echo $wilayah; ?>'>

                        <?php } elseif ($wilayah == 'Banten') { ?>
                            <form action="index.php" method="get">
                                <div class="form-group row">
                                    <label for="Jumlah Positif" class="col-sm-2 col-form-label">Jumlah Positif</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Jumlah Positif" name="positif" value=<?php print_r($lines[11]); ?> placeholder="Jumlah Positif">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jumlah dirawat" class="col-sm-2 col-form-label">Jumlah dirawat</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Jumlah dirawat" name="dirawat" value=<?php print_r($lines[12]); ?> placeholder="Jumlah dirawat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jumlah sembuh" class="col-sm-2 col-form-label">Jumlah sembuh</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Jumlah sembuh" name="sembuh" value=<?php print_r($lines[13]); ?> placeholder="Jumlah sembuh">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Jumlah meninggal" class="col-sm-2 col-form-label">Jumlah meninggal</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Jumlah meninggal" name="meninggal" value=<?php print_r($lines[14]); ?> placeholder="Jumlah meninggal">
                                    </div>
                                </div>
                                <input type="hidden" name="wilayah" value='<?php echo $wilayah; ?>'>

                            <?php } elseif ($wilayah == 'Jawa Tengah') { ?>
                                <form action="index.php" method="get">
                                    <div class="form-group row">
                                        <label for="Jumlah Positif" class="col-sm-2 col-form-label">Jumlah Positif</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="Jumlah Positif" name="positif" value=<?php print_r($lines[16]); ?> placeholder="Jumlah Positif">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Jumlah dirawat" class="col-sm-2 col-form-label">Jumlah dirawat</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="Jumlah dirawat" name="dirawat" value=<?php print_r($lines[17]); ?> placeholder="Jumlah dirawat">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Jumlah sembuh" class="col-sm-2 col-form-label">Jumlah sembuh</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="Jumlah sembuh" name="sembuh" value=<?php print_r($lines[18]); ?> placeholder="Jumlah sembuh">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Jumlah meninggal" class="col-sm-2 col-form-label">Jumlah meninggal</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="Jumlah meninggal" name="meninggal" value=<?php print_r($lines[19]); ?> placeholder="Jumlah meninggal">
                                        </div>
                                    </div>
                                    <input type="hidden" name="wilayah" value='<?php echo $wilayah; ?>'>

                                <?php } ?>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

<?php
}
?>