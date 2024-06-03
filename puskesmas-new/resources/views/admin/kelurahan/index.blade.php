<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
    @if (session('pesan'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{(session('pesan'))}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
        <a href="{{ url('/dashboard/kelurahan/create') }}" class="btn btn-primary mb-2">+ Tambah Kelurahan</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
            </tr>
            
            <?php $i = 1;
            foreach ($kelurahans as $kelurahan): ?>
            <tr>
                <td>{{ $i ++ }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>{{ $kelurahan->nama_kecamatan }}</td>
                <td>
                    <a href="{{ url('dashboard/kelurahan/show', $kelurahan->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/kelurahan/edit', $kelurahan->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/kelurahan/destroy', $kelurahan->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data {{ $kelurahan->nama }}?')">
                        <i class="far fa-trash-alt"> Hapus</i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </x-slot>
</x-layout>