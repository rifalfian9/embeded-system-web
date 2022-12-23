<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
</div>
<?php 
  $sesi = $_SESSION["id_user"];
    $kueri = mysqli_query($koneksi, "SELECT *FROM `user` where id_user = '$_SESSION[id_user]' ");
    while ($data = mysqli_fetch_assoc($kueri)){
        $nama = $data['nama'];
        $username = $data['username'];
        $email = $data['email'];
    }
?>
<div class="content mt-3">
     <div class="card">
              
              
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>PROFIL<strong></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%">
                           <?= $nama ?>
                        </td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Username<strong></td>
                        <td width="80%"><?= $username ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?= $email ?> </td>
                      </tr> 
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->
        
</div>