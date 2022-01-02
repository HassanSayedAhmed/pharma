@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')


<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        Contacts
    </div>
    <div class="card-body">
        <table id="contact_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
        </table>
    </div>
    </div>
</div>
@endsection

@section('scripts')
   <script>
        $(document).ready(function(){
                var table = $('#contact_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('contact_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "full_name", "name": "full_name"},
                        { "data": "email", "name": "email"},
                        { "data": "phone", "name": "phone"},
                        { "data": "subject", "name": "subject"},
                        { "data": "message", "name": "message"},
                    ]
                });

                $(".dataTables_filter").hide();

                $('#search_button').on( 'click', function () {
                    table.search($("#text_search").val());
                    table.draw();
                } );

                $('#text_search').keyup(function (e){
                    if(e.keyCode == 13)
                        $('#search_button').trigger('click');
                });

                $('#reset_button').on( 'click', function () {
                    $("#text_search").val("");
                    $('#search_button').trigger('click');
            });
		});	
   </script> 
@endsection