@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                </div>
            <div class="float-left my-2">
                <p> Cari data Mahasiswa : </p>
                <form action="{{'/cari'}}" method="GET">
                    <input type="text" name="cari" placeholder="Cari mahasiswa .." value="{{ old('cari') }}">
                    <input type="submit" value="cari">
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->Nim}}</td>
            <td>{{ $mhs->Nama}}</td>
            <td>{{ $mhs->kelas->nama_kelas}}</td>
            <td>{{ $mhs->Jurusan }}</td>
            <td>{{ $mhs->No_Handphone}}</td>
            <td>{{ $mhs->EMail}}</td>
            <td>{{ $mhs->Tanggal_lahir}}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$mhs->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{route('mahasiswa.nilai',$mhs->id)}}">Nilai</a>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection