@extends('mahasiswa.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" >
                        </div>

                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" class="form-control">
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan" >
                        </div>

                        <div class="form-group">
                            <label for="No_Handphone">No_Handphone</label>
                            <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone" aria-describedby="No_Handphone" >
                        </div>

                        <div class="form-group">
                            <label for="EMail">E-mail</label>
                            <input type="EMail" name="EMail" class="form-control" id="EMail" aria-describedby="EMail" >
                        </div>

                        <div class="form-group">
                            <label for="Tanggal_lahir">Tanggal Lahir</label>
                            <input type="Tanggal_lahir" name="Tanggal_lahir" class="form-control" id="Tanggal_lahir" aria-describedby="Tanggal_lahir" >
                        </div>
                        
                        <div class="form-group">
                            <label for = "foto">Gambar</label>
                            <input type  = "file" class = "form-control-file" required = "required" name = "foto">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection