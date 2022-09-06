@extends('layouts.master')
@section('title','Barang')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <a href="{{ route('tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah
                Data</a>
            <hr>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($barang as $no => $data)
                <tr>
                    <td>{{ $barang->firstItem()+$no }}</td>
                    <td>{{ $data->kode_barang }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>
                        <a href="#" class="badge badge-info">Edit</a>
                        <a href="#" data-id="{{ $data->id }}" class="badge badge-danger swal-confirm">Hapus</a>
                        <form action="{{ route('hapus',$data->id) }}" id="delete{{ $data->id }}" method="POST">
                        @csrf
                        @method('delete')
                        </form>
                        
                    </td>

                </tr>
                @endforeach

            </table>
            {{ $barang->links() }}
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
@endpush

@push('after-scripts')
<script>
    $(".swal-confirm").click(function (e) {
        id = e.target.dataset.id;
        swal({
                title: 'Yakin Ingin Hapus Data?',
                text: 'Data yang terhapus tidak bisa dikembalikan lagi',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal('Data Berhasil Dihapus!', {
                        icon: 'success',
                    });
                    $(`#delete${id}`).submit();
                } else {
                    // swal('Your imaginary file is safe!');
                }
            });
    });

</script>
@endpush
