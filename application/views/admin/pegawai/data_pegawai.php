<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/data_pegawai/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
  <?php echo $this->session->flashdata('pesan')?>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
   <div class="card-body">
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead class="thead-dark">
           <tr>
              <th class="text-center">No</th>
              <th class="text-center">NIK</th>
              <th class="text-center">Full Name</th>
              <th class="text-center">Date of Birth</th>
              <th class="text-center">Sex</th>
              <th class="text-center">Religion</th>
              <th class="text-center">Address</th>
              <th class="text-center">Phone</th>
              <th class="text-center">Email</th>
              <th class="text-center">Join Date</th>
              <th class="text-center">Divisi</th>
              <th class="text-center">Position</th>
              <th class="text-center">Status</th>
              <th class="text-center">Placement</th>
              <th class="text-center">Hak Akses</th>
              <th class="text-center">Photo</th>
              <th class="text-center">Actions</th>
           </tr>
         </thead>
         <tbody>
           <?php $no=1; foreach($pegawai as $p) : ?>
            <tr>
              <td class="text-center"><?php echo $no++ ?></td>
              <td class="text-center"><?php echo $p->nik ?></td>
              <td class="text-center"><?php echo $p->nama_pegawai ?></td>
              <td class="text-center"><?php echo $p->nama_pegawai ?></td> <!-- tabel buat nampilin tanggal lahir -->
              <td class="text-center"><?php echo $p->jenis_kelamin ?></td>
              <td class="text-center"><?php echo $p->jenis_kelamin ?></td> <!-- tabel buat nampilin agama --> 
              <td class="text-center"><?php echo $p->jenis_kelamin ?></td> <!-- tabel buat nampilin alamat -->
              <td class="text-center"><?php echo $p->jenis_kelamin ?></td> <!-- tabel buat nampilin no telp -->
              <td class="text-center"><?php echo $p->jenis_kelamin ?></td> <!-- tabel buat nampilin email -->
              <td class="text-center"><?php echo $p->tanggal_masuk ?></td>
              <td class="text-center"><?php echo $p->jabatan ?></td> <!-- tabel buat nampilin divisi -->
              <td class="text-center"><?php echo $p->jabatan ?></td>
              <td class="text-center"><?php echo $p->status ?></td>
              <td class="text-center"><?php echo $p->status ?></td> <!-- tabel buat nampilin penempatan kerja -->
              <?php if($p->hak_akses=='1') { ?>
                <td>Admin</td>
                <?php } else { ?>
                  <td>Pegawai</td>
                <?php } ?>
              <td><img src="<?php echo base_url().'photo/'.$p->photo?>" width="50px"></td>
              
              <td>
                <center>
                  <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_pegawai/update_data/'.$p->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_pegawai/delete_data/'.$p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
                </center>
              </td>
            </tr>
          <?php endforeach; ?>
         </tbody>
       </table>
     </div>
   </div>
  </div>
</div>