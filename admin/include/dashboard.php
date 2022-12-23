<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script>
        $(document).ready( function () {
            setInterval(function(){
                $(".indikator").load("./cekindikator.php")
            }, 3000);
        });
         $(document).ready( function () {
            setInterval(function(){
                $(".tanggal").load('./cektanggal.php')
            }, 3000);
        });
        $(document).ready( function () {
            setInterval(function(){
                $(".value").load('./ceknilai.php')
            }, 3000);
        });
    </script>
<div class="bg-light">    
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <?php $data = mysqli_query($koneksi, "SELECT *FROM `data` ORDER BY id_data DESC LIMIT 1");
                    while ($dt = mysqli_fetch_array($data)) {
                            $tanggal = $dt[1];
                            $indikator = $dt[2];
                            $nilai = $dt[3];
                            $nilai_v = $dt[4];
                            $id = $dt[0];
                        };

            ?> 
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="text-light fw-bold pb-3">Indikator</h4>
                        <h4 class="mb-0">
                            <h5 class="mb-5"><span class="indikator"> - </span></h4>
                        </h4>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Value</h4>
                        <h4 class="mb-0">
                            <h5 class="mb-5"><span class="value"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Value Convert</h4>
                        <h4 class="mb-0">
                            <h5 class=" mb-5"><span class="value"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>
             <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Time and Date</h4>
                        <h4 class="mb-0">
                            <h5 class=" pb-5"><span class="tanggal"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div>