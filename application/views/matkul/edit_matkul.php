<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1>Form Matakuliah</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Matakuliah</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
            <form action ="<?php echo base_url('matkul/update/'. $matkul['id_matkul']);?>" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="kode_matkul">Kode Matakuliah</label>
                    <input type="text" class="form-control" name="kode_matkul" value="<?= $matkul['kode_matkul']; ?>"id="kode_matkul" placeholder="Kode Mata Kuliah" required>
                </div>
                <div class="form-group">
                    <label for="nama_matkul">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" name="nama_matkul" value="<?= $matkul['nama_matkul']; ?>" id="nama_matkul" placeholder="Nama Mata Kuliah" required>
                </div>
                <div class="form-group">
                    <label for="sks">SKS</label><br>
                    <select id="sks" name="sks" required>
                        <option value="">-- Pilih --</option>
                        <option value="2" <?= ($matkul['sks'] == '2') ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?= ($matkul['sks'] == '3') ? 'selected' : ''; ?>>3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label><br>
                    <select id="semester" name="semester"  required>
                        <option value="">-- Pilihan --</option>
                        <option value="1" <?= ($matkul['semester'] == '1') ? 'selected' : ''; ?>>1</option>
                        <option value="2" <?= ($matkul['semester'] == '1') ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?= ($matkul['semester'] == '3') ? 'selected' : ''; ?>>3</option>
                        <option value="4" <?= ($matkul['semester'] == '4') ? 'selected' : ''; ?>>4</option>
                        <option value="5" <?= ($matkul['semester'] == '5') ? 'selected' : ''; ?>>5</option>
                        <option value="6" <?= ($matkul['semester'] == '6') ? 'selected' : ''; ?>>6</option>
                        <option value="7" <?= ($matkul['semester'] == '7') ? 'selected' : ''; ?>>7</option>
                        <option value="8" <?= ($matkul['semester'] == '8') ? 'selected' : ''; ?>>8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label><br>
                    <select id="jenis" name="jenis" required>
                        <option value="">-- Pilih --</option>
                        <option value="Umum" <?= ($matkul['jenis'] == 'Umum') ? 'selected' : ''; ?>>Umum</option>
                        <option value="Wajib" <?= ($matkul['jenis'] == 'Wajib') ? 'selected' : ''; ?>>Wajib</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label><br>
                    <select id="prodi" name="prodi" required>
                        <option value="">-- Pilih --</option>
                        <option value="Sistem Informasi" <?= ($matkul['prodi'] == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                        <option value="Teknologi Informasi" <?= ($matkul['prodi'] == 'Teknologi Informasi') ? 'selected' : ''; ?>>Teknologi Informasi</option>
                        <option value="Komputerisasi Akuntansi" <?= ($matkul['prodi'] == 'Komputerisasi Akuntansi') ? 'selected' : ''; ?>>Komputerisasi Akuntansi</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('matkul'); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
</section>
</div>
