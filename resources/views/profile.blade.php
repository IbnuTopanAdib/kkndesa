@extends('layouts/main')
@section('active0', 'active')

@section('content')
<h1 class="mb-5 text-center">{{ $title }}</h1>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31738.80496703227!2d107.19491040557033!3d-6.083372159770783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a2a34c28ce959%3A0xc36107c6756fc908!2sKaryamulya%2C%20Kec.%20Batujaya%2C%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1695096278108!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                frameborder="0" style="border:0; width: 100%; height: 290px;"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-md-6">
        <h3>INFORMASI DESA</h3>
        <table class="table">
            <tr>
                <th>Kode desa</th>
                <td>41354</td>
            </tr>
            <tr>
                <th>Nama Kelurahan</th>
                <td>Desa Karyamulya</td>
            </tr>
            <tr>
                <th>Nama Kecamatan</th>
                <td>Batujaya</td>
            </tr>
            <tr>
                <th>Nama Kabupaten</th>
                <td>Karawang</td>
            </tr>
            <tr>
                <th>Koordinat</th>
                <td>-6.0875 LU/LS, 107.2131 BT/BB</td>
            </tr>
            <tr>
                <th>Luas Wilayah</th>
                <td>6.87 km<sup>2</sup></td>

            </tr>
        </table>

    </div>
</div>
@endsection