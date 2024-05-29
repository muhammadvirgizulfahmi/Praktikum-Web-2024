<x-layout>
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="kode" class="col-sm-4 col-form-label">Kode</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kode" name="kode"
                    placeholder="Masukkan Kode Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama"
                    placeholder="Masukkan Nama Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                    placeholder="Masukkan Tempat Lahir Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-4 col-form-label">tgl_lahir</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    placeholder="Masukkan Tanggal Lahir Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L" required="required"> 
                    <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P" required="required"> 
                    <label for="radio_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="email" name="email"
                    placeholder="Masukkan Email Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="alamat" name="alamat"
                    placeholder="Masukkan Alamat Pasien">
            </div>
        </div>
        <div class="form-group row">
            <label for="kelurahan_nama" class="col-sm-4 col-form-label">Nama Kelurahan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kelurahan_nama" name="kelurahan_nama"
                    placeholder="Masukkan Nama Kelurahan Pasien">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
      </form>
    </x-slot>
</x-layout>