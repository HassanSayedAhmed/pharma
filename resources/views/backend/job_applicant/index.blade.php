@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_JobApplicant_modal' tabindex='-1' role='dialog' aria-labelledby='JobApplicant_modal' aria-hidden='true'>
    <form action="" method="post" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='modal_title'></h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <input type="hidden" id="id" name="id" value="0"/>
                    <div class="form-group">
                        <label>Name</label>
                        <input required type="text" class="form-control" id="name" name="name" title="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        {{-- {!! Form::select('category_id', array(""=>__("Select Category"))+$categories, null, array('id'=> 'category_id', 'title'=> 'Category', 'class'=>'form-control')) !!} --}}
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="image" name="image" title="Name" placeholder="Name">
                    </div>
                </div>
                <div>
                    <div id='progress_bar' style="background-color: green; width: 0%; height: 2px;"></div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' class='btn btn-primary' id='action'>@lang('tr.Submit') <span id="progress_text"></span></button>
                    <button type='button' class='btn btn-light' id='close' data-dismiss='modal'>@lang('tr.Cancel')</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_JobApplicant" href="javascript:void(0)"><i class="fa fa-plus"></i> Add Sub Category</a>
    </div>
    <div class="card-body">
        <table id="JobApplicant_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Job</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Expected Salary</th>
                    <th>Start Date</th>
                    <th>Experience</th>
                    <th>Application</th>
                    {{-- <th class="no-content"></th> --}}
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
                var table = $('#JobApplicant_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('job_applicant_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "title", "name": "title"},
                        { "data": "first_name", "name": "first_name" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = oData.first_name+' '+oData.last_name;
                              
                                $(nTd).html(html);
                            }
                        },
                        { "data": "email", "name": "email"},
                        { "data": "age", "name": "age"},
                        { "data": "city", "name": "city"},
                        { "data": "expected_salary", "name": "expected_salary"},
                        { "data": "start_date", "name": "start_date"},
                        { "data": "experience", "name": "experience"},
                        { "data": "application", "name": "application"},
                        // { "data": "active", "name": "active" ,
                        //     fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                        //         var html = '';
                        //         if(oData.active == 1)
                        //             html = "<span class='badge badge-success'>Yes</span>";
                        //         else 
                        //             html = "<span class='badge badge-danger'>No</span>";
                        //         $(nTd).html(html);
                        //     }
                        // },
                        // { "data": "id", "name": "id",
                        //     fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                        //         var html = "";
                        //         html += "<a title='Edit' href='javascript:void(0)' class='edit'><i class='fa fa-edit'></i></a>&nbsp;";
                        //         html += "<a title='Delete' href='javascript:void(0)' class='delete'><i class='fa fa-trash'></i></a>";
                        //         $(nTd).html("<span class='action-column'>"+html+"</span>");
                        //     }
                        // },
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

           

            $('#add_JobApplicant').on('click', function () {

                var modal = $('#manage_JobApplicant_modal').clone();
                var action = '{{route('save_job_applicant')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add Sub Category');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    //console.log(response);
                    table.draw();

                }, function (response) {

                }, function (dialog) {
           
                  });

            });

            $(document).on("click", ".edit", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_JobApplicant_modal').clone();
                var action = '{{route('save_job_applicant')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Sub Category');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#name').val(data.name);
                        dialog.find('#category_id option[value=' + data.category_id + ']').attr('selected', 'selected');
                  });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_job_applicant',['id'=>'#id'])}}';
                url = url.replace('#id',data.id);
                
                warningBox("Are you sure to delete" + data.name +"</b>?", function () {
                    $.ajax({
                        type: "GET",
                        url: url,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json",
                        success: function (data) {
                            table.draw();
                        },
                        error: function () {
                            alert("Dynamic content load failed.");
                        }
                    });
                });
            });
		});	
   </script> 
@endsection