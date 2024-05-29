<x-layout>
    <x-slot name="page_name">Halaman Pasien / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>ID</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Nama Kelurahan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tgl_lahir }}</t>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->kelurahan_nama }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>