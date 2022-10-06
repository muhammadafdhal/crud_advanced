@extends('layouts.master')

@section('content')

<div class="container">
    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>
        </thead>
    </table>
</div>
    
@endsection

@push('before-scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        isi()
    })

    function isi() {
        $('#tabel1').Datatable({
            serverside : true,
            responseive : true,
            ajax : {
                url : "{{ route('data') }}"
            },
            columns : [
            {
                "data" : null, "sortable": false,
                render : function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            { data : 'nama', name : 'nama' },
            { data : 'telp', name : 'telp' },
            { data : 'alamat', name : 'alamat' },
        ]
        })
    }
</script>

@endpush