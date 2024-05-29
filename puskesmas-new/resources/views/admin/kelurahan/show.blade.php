<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Detail</x-slot>
    <x-slot name="page_content">
    <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>ID Kelurahan</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kelurahan->id }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>{{ $kelurahan->nama_kecamatan }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>