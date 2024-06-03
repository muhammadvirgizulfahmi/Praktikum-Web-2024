<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
    @if (session('pesan'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{(session('pesan'))}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a href="{{ url('/dashboard/pasien/create') }}" class="btn btn-primary mb-2">+ Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Nama Kelurahan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach ($pasiens as $pasien): ?>
            <tr>
                <td>{{ $i ++ }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tgl_lahir }}</t>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->kelurahan_nama }}</td>
                <td>
                    <a href="{{ url('dashboard/pasien/show', $pasien->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/pasien/edit', $pasien->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/pasien/destroy', $pasien->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data {{ $pasien->nama }}?')">
                        <i class="far fa-trash-alt"> Hapus</i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </x-slot>
</x-layout>