<?php  error_reporting(E_ALL ^ E_WARNING || E_NOTICE); ?>
<?php include("koneksi/koneksi.php") ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Recorded</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Recorder</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <?php 
                if(isset($_GET['delete']) && $_GET['delete'] == 'success'){?>
                     <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            </div>  
            <?php }?>

            <table class="table table-bordered bg-light border-primary">
                <thead>
                    <th width=5%>No</th>
                    <th>Tanggal</th>
                    <th>Indikator</th>
                    <th>Nilai Asli</th>
                    <th>Nilai Convert</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php 
                    $s = 1 ;
                    $data = mysqli_query($koneksi, "SELECT *FROM `data` ORDER BY id_data DESC LIMIT 15");
                    while ($dt = mysqli_fetch_array($data)) {
                            $tanggal = $dt[1];
                            $indikator = $dt[2];
                            $nilai = $dt[3];
                            $nilai_v = $dt[4];
                            $id = $dt[0]; ?>
                <tr> 
                    <td><?=$s?></td>
                    <td><?=$tanggal?></td>
                    <td><?=$indikator?></td>
                    <td><?=$nilai?></td>
                    <td><?=$nilai_v?></td>
                    <td><a type=button class="btn btn-danger"  href="index.php?include=hapus&id=<?=$id?>">Delete</a></td>
                    <?php $s++; }; 
                    ?>
                </tr> 
                </tbody>
            </table>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

