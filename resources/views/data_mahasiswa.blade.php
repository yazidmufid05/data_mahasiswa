@php
$no = 1;
// array scalar
$s1 = ['nama' => 'Yazid', 'alamat' => 'Surabaya'];
$s2 = ['nama' => 'Bayu Indrawan', 'alamat' => 'Medan'];
$s3 = ['nama' => 'Haeril', 'alamat' => 'Lombok'];
$s4 = ['nama' => 'Hasan', 'alamat' => 'Medan'];
$judul = ['No', 'Nama', 'Alamat'];
// array associative
$siswa = [$s1, $s2, $s3, $s4];
@endphp
<h1 style="text-align: center;">Data Mahasiswa</h1>
<table border="3" align="center" cellpadding="25">
    <thead>
        <tr bgcolor="#A2D6F9">
            @foreach($judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $sis)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $sis['nama'] }}</td>
            <td>{{ $sis['alamat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>