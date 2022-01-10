@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_course_modal' tabindex='-1' role='dialog' aria-labelledby='course_modal' aria-hidden='true'>
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
                        {!! Form::select('category_id', array(""=>__("Select Category"))+$categories, null, array('id'=> 'category_id', 'title'=> 'Category', 'class'=>'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" required class="form-control" id="description" name="description" title="Description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="number" required class="form-control" id="rating" name="rating" title="rating" placeholder="rating">
                    </div>
                    <div class="form-group">
                        <label>Views</label>
                        <input type="number" required class="form-control" id="views" name="views" title="views" placeholder="views">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        {!! Form::select('levels', array(""=>__("Select Level"))+'App\Course'::levelsList(), null, array('id'=> 'levels', 'title'=> 'levels', 'class'=>'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label>Hours</label>
                        <input type="number" required class="form-control" id="hours" name="hours" title="hours" placeholder="hours">
                    </div>
                    <div class="form-group">
                        <label>Active</label>
                        <select id="active" required name="active" title="Active" placeholder="Active" class="form-control">
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

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_course" href="javascript:void(0)"><i class="fa fa-plus"></i> Add Course</a>
    </div>
    <div class="card-body">
        <table id="course_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
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
                var table = $('#course_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('course_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "name", "name": "name"},
                        { "data": "category_name", "name": "category_name"},
                        { "data": "active", "name": "active" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.active == 1)
                                    html = "<span class='badge badge-success'>Yes</span>";
                                else 
                                    html = "<span class='badge badge-danger'>No</span>";
                                $(nTd).html(html);
                            }
                        },
                        { "data": "id", "name": "id",
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = "";
                                html += "<a title='Edit' href='javascript:void(0)' class='edit'><i class='fa fa-edit'></i></a>&nbsp;";
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

           

            $('#add_course').on('click', function () {

                var modal = $('#manage_course_modal').clone();
                var action = '{{route('save_course')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add Course');
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
                var modal = $('#manage_course_modal').clone();
                var action = '{{route('save_course')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Course');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#name').val(data.name);
                        dialog.find('#rating').val(data.rating);
                        dialog.find('#hours').val(data.hours);
                        dialog.find('#description').val(data.description);
                        dialog.find('#views').val(data.views);
                        dialog.find('#category_id option[value=' + data.category_id + ']').attr('selected', 'selected');
                        dialog.find('#levels option[value=' + data.levels + ']').attr('selected', 'selected');
                        dialog.find('#active option[value='+data.active+']').attr('selected', 'selected');

                  });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_course',['id'=>'#id'])}}';
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