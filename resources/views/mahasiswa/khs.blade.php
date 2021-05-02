@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mt-2" style="text-align: center">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            <br><h1>KARTU HASIL STUDI(KHS)</h1>
        </div>
        <div class="card-body">
                <p><b>Nama  : </b>{{ $Mahasiswa->Nama }}
                <p><b>NIM   : </b>{{ $Mahasiswa->Nim }}
                <p><b>Kelas : </b>{{ $Mahasiswa->kelas->nama_kelas }}
        </div>
    </div>
</div>

<table class="table">
    <thead class="thead-dark">
      <tr>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Mahasiswa->matakuliah as $item)
            <tr>
                <th scope="row">{{$item->nama_matkul}}</th>
                <td>{{$item->sks}}</td>
                <td>{{ $item->semester }}</td>
                <td>{{$item->pivot->nilai}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
<a class="btn btn-danger mt-3" href="{{ route('mahasiswa.cetak',$Mahasiswa->id) }}">Cetak Ke PDF</a>
@endsection