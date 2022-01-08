@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_job_modal' tabindex='-1' role='dialog' aria-labelledby='job_modal' aria-hidden='true'>
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
                        <label>Title</label>
                        <input required type="text" class="form-control" id="title" name="title" title="Title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Title Arabic</label>
                        <input required type="text" class="form-control" id="title_ar" name="title_ar" title="Title Arabic" placeholder="Title Arabic">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="description" name="description" title="Description" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description Arabic</label>
                        <textarea id="description_ar" name="description_ar" title="Description Arabic" placeholder="Description Arabic" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>What You Have Got</label>
                        <textarea id="what_you_have_got" name="what_you_have_got" title="What You Have Got" placeholder="What You Have Got" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>What You Have Got Arabic</label>
                        <textarea id="what_you_have_got_ar" name="what_you_have_got_ar" title="What You Have Got Arabic" placeholder="What You Have Got Arabic" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Active</label>
                        <select id="active" name="active" title="Active" placeholder="Active" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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

<div class='modal fade' id='manage_job_data_modal' tabindex='-1' role='dialog' aria-labelledby='job_data_modal' aria-hidden='true'>
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
                    <input type="hidden" id="job_id" name="job_id" value="0"/>
                    <div class="form-group">
                        <label>Name</label>
                        <input required type="text" class="form-control" id="name" name="name" title="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Name Arabic</label>
                        <input required type="text" class="form-control" id="name_ar" name="name_ar" title="Name Arabic" placeholder="Name Arabic">
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
        <a id="add_job" href="javascript:void(0)"><i class="fa fa-plus"></i> Add job</a>
    </div>
    <div class="card-body">
        <table id="job_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>What You Have Got</th>
                    <th>Requirementst</th>
                    <th>What We Expect</th>
                    <th>Active</th>
                    <th class="no-content"></th>
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
                var table = $('#job_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('job_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "title", "name": "title"},
                        { "data": "description", "name": "description"},
                        { "data": "what_you_have_got", "name": "what_you_have_got"},
                        { "data": "requirements", "name": "requirements" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';

                               oData.requirements.forEach(function(value) {
                                    console.log(value)
                                    html += value.name + '&nbsp;';
                                    html += "<a title='Edit Requirement' href='javascript:void(0)' data-id='"+value.id+"' data-name='"+value.name+"' data-name-ar='"+value.name_ar+"' class='editRequirement'><i class='fa fa-edit'></i></a>&nbsp;|&nbsp;";
                                    html += "<a title='Delete Requirement' href='javascript:void(0)' data-id='"+value.id+"' data-name='"+value.name+"' data-name='"+value.name_ar+"' class='deleteRequirement'><i class='fa fa-trash'></i></a>";
                                    html += "<br>";
                               });
                                $(nTd).html(html);
                            }
                        },
                        { "data": "whatWeExpect", "name": "whatWeExpect",
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';

                               oData.whatWeExpect.forEach(function(value) {
                                    console.log(value)
                                    html += value.name + '&nbsp;';
                                    html += "<a title='Edit whatWeExpect' href='javascript:void(0)' data-id='"+value.id+"' data-name='"+value.name+"' data-name-ar='"+value.name_ar+"' class='editWhatWeExpect'><i class='fa fa-edit'></i></a>&nbsp;|&nbsp;";
                                    html += "<a title='Delete whatWeExpect' href='javascript:void(0)' data-id='"+value.id+"' data-name='"+value.name+"' data-name='"+value.name_ar+"' class='deleteWhatWeExpect'><i class='fa fa-trash'></i></a>";
                                    html += "<br>";
                               });
                                $(nTd).html(html);
                            }
                        },
                        { "data": "id", "name": "id" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.id == 1)
                                    html = "<span class='badge badge-success'>Yes</span>";
                                else 
                                    html = "<span class='badge badge-danger'>No</span>";
                                $(nTd).html(html);
                            }
                        },
                        { "data": "id", "name": "id",
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = "";
                                html += "<a title='Add Requirement' href='javascript:void(0)' class='addRequirement'><i class='fa fa-plus'></i></a>&nbsp;|&nbsp;";
                                html += "<a title='Add What We Expect' href='javascript:void(0)' class='addWhatWeExpect'><i class='fa fa-plus'></i></a>&nbsp;|&nbsp;";
                                html += "<a title='Edit' href='javascript:void(0)' class='edit'><i class='fa fa-edit'></i></a>&nbsp;|&nbsp;";
                                html += "<a title='Delete' href='javascript:void(0)' class='delete'><i class='fa fa-trash'></i></a>";
                                $(nTd).html("<span class='action-column'>"+html+"</span>");
                            }
                        },
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

            $('#add_job').on('click', function () {

                var modal = $('#manage_job_modal').clone();
                var action = '{{route('save_job')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add job');
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
                var modal = $('#manage_job_modal').clone();
                var action = '{{route('save_job')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit job');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#title').val(data.title);
                        dialog.find('#description').val(data.description);
                        dialog.find('#what_you_have_got').val(data.what_you_have_got);
                        dialog.find('#title_ar').val(data.title_ar);
                        dialog.find('#description_ar').val(data.description_ar);
                        dialog.find('#what_you_have_got_ar').val(data.what_you_have_got_ar);
                        dialog.find('#active option[value='+data.active+']').attr('selected', 'selected');

                  });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_job',['id'=>'#id'])}}';
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

            $(document).on("click", ".addRequirement", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_job_data_modal').clone();
                var action = '{{route('save_requirement')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add Requirement');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    //console.log(response);
                    table.draw();

                }, function (response) {

                }, function (dialog) {
                    dialog.find('#job_id').val(data.id)
                });

            });
            $(document).on("click", ".editRequirement", function () {

                var data = table.row($(this).closest('tr')).data();
                var id = $(this).attr('data-id');
                var name = $(this).attr('data-name');
                var name_ar = $(this).attr('data-name-ar');
                var modal = $('#manage_job_data_modal').clone();
                var action = '{{route('save_requirement')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Requirement');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(id);
                        dialog.find('#name').val(name);
                        dialog.find('#name_ar').val(name_ar);
                        dialog.find('#job_id').val(data.id)

                });
            });

            $(document).on("click", ".addWhatWeExpect", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_job_data_modal').clone();
                var action = '{{route('save_what_we_expect')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add What We Expect');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    //console.log(response);
                    table.draw();

                }, function (response) {

                }, function (dialog) {
                    dialog.find('#job_id').val(data.id)
                });

            });
            $(document).on("click", ".editWhatWeExpect", function () {

                var data = table.row($(this).closest('tr')).data();
                var id = $(this).attr('data-id');
                var name = $(this).attr('data-name');
                var name_ar = $(this).attr('data-name-ar');
                var modal = $('#manage_job_data_modal').clone();
                var action = '{{route('save_what_we_expect')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit What We Expect');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(id);
                        dialog.find('#name').val(name);
                        dialog.find('#name').val(name_ar);
                        dialog.find('#job_id').val(data.id)

                });
            });

            $(document).on("click", ".deleteRequirement", function () {

                var id = $(this).attr('data-id');
                var name = $(this).attr('data-name');
                var url = '{{route('delete_requirement',['id'=>'#id'])}}';
                url = url.replace('#id',id);

                warningBox("Are you sure to delete" + name +"</b>?", function () {
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
            $(document).on("click", ".deleteWhatWeExpect", function () {

                var id = $(this).attr('data-id');
                var name = $(this).attr('data-name');
                var url = '{{route('delete_what_we_expect',['id'=>'#id'])}}';
                url = url.replace('#id',id);

                warningBox("Are you sure to delete" + name +"</b>?", function () {
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