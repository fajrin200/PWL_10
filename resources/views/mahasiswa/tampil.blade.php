@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Handphone</th>
        <th>EMail</th>
        <th>Tanggal_lahir</th>
        <th width="280px">Action</th>
     </tr>

     @foreach ($Mahasiswas as $Mahasiswa)
         <tr>
             <td>{{$Mahasiswa->Nim}}</td>
             <td>{{$Mahasiswa->Nama}}</td> 
             <td>{{$Mahasiswa->Kelas}}</td>
             <td>{{$Mahasiswa->Jurusan}}</td>
             <td>{{$Mahasiswa->No_Handphone}}</td>
             <td>{{$Mahasiswa->EMail}}</td>
             <td>{{$Mahasiswa->Tanggal_lahir}}</td>
             <td> 
                 <form action="{{route('mahasiswas.destroy',$Mahasiswa->Nim)}}" method="POST">
                     <a class="btn btn-info" href="{{route('mahasiswas.show',$Mahasiswa->Nim)}}">Show</a>
                     <a class="btn btn-primary" href="{{route('mahasiswas.edit',$Mahasiswa->Nim)}}">Edit</a>
                     @csrf
                     @method('DELETE')

                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
     @endforeach
     </table>
 Halaman : {{ $Mahasiswas->currentPage() }} <br/>
 Jumlah Data : {{ $Mahasiswas->total() }} <br/>
 Data Per Halaman : {{ $Mahasiswas->perPage() }} <br/>

 {{ $Mahasiswas->links() }}
@endsection
