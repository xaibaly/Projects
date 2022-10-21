<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Storage File Management</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>

</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper" id="hello123">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Files</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="javascript:void(0)" class="btn btn-success m-1" data-toggle="modal"
                                onclick="addFile()"><i class="material-icons">&#xE147;</i> <span>Add New
                                    File Here</span></a>
                            <a href="javascript:void(0)" class="btn btn-success m-1" data-toggle="modal"
                                onclick="addFolder()"><i class="material-icons">&#xE147;</i> <span>Add New
                                    Folder Here</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">

                                </span>
                            </th>
                            <th>Name</th>
                            <th>Last Modified</th>
                            <th>File Size</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $count = 1;
                        @endphp

                        @if (isset($files_info['empty']) && $files_info['empty'] == true)
                            @php
                                $arr = explode('-', Request::path());

                                for ($i = 0; isset($arr[$i]); $i++) {
                                    if (!isset($arr[$i + 2])) {
                                        unset($arr[$i]);
                                    }
                                }

                                $arr = implode('-', $arr);
                            @endphp
                            @if ($arr != 'public/storage/')
                                <tr>
                                    <td>

                                    </td>
                                    <td><i class="fa fa-folder me-2" aria-hidden="true"></i><a
                                            href="{{ $arr . '-' }}">../</a>
                                    </td>
                                    <td>-</td>
                                    <td>
                                        Folder
                                    </td>
                                    <td>


                                    </td>
                                </tr>
                            @endif

                            <tr>
                                <td colspan="5" class="justify-content-center" style="text-align: center">
                                    <p>No Files/Folders Found!!</p>
                                </td>
                            </tr>
                        @else
                            @if ($files_info[1]['prevfoldername'] == '-')
                                <tr>
                                    <td>

                                    </td>
                                    <td><i class="fa fa-folder me-2" aria-hidden="true"></i><a href="/"> ../</a>
                                    </td>
                                    <td>-</td>
                                    <td>
                                        Folder
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            @elseif ($files_info[1]['prevfoldername'] != '/')
                                <tr>
                                    <td>

                                    </td>
                                    <td><i class="fa fa-folder me-2" aria-hidden="true"></i><a
                                            href="{{ $files_info[1]['prevfoldername'] }}">../</a>
                                    </td>
                                    <td>-</td>
                                    <td>
                                        Folder
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            @endif
                            @foreach ($files_info as $item)
                                <tr>
                                    @if ($item['file_or_folder'] == 'Folder')
                                        <td>

                                        </td>
                                        <td><i class="fa fa-folder me-2" aria-hidden="true"></i><a
                                                href="{{ $item['foldername'] }}-">{{ ' ' . $item['filename'] }}</a>
                                        </td>
                                        <td>-</td>
                                        <td>
                                            Folder
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="delete" data-toggle="modal"
                                                onclick="delete_('folder','{{ $item['foldername'] }}')"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    @else
                                        <td>

                                        </td>
                                        <td><i class="fa fa-file me-2"
                                                aria-hidden="true"></i>{{ ' ' . $item['filename'] }}
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($item['filelastmodified'])->diffForHumans() }}
                                        </td>
                                        <td>
                                            {{ $item['filesize'] . ' bytes' }} /
                                            {{ round($item['filesize'] / 1000, 1) . ' KB' }} /
                                            {{ round($item['filesize'] / (1000 * 1024), 2) . ' MB' }}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="edit" data-toggle="modal"
                                                onclick="editFile('{{ $item['filename'] }}')"><i class="material-icons"
                                                    data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="javascript:void(0)" class="delete" data-toggle="modal"
                                                onclick="delete_('file','{{ $item['filename'] }}'   )"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach

                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- add File Modal HTML -->
    <div id="addFileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="add_file" name="add_file">
                    <div class="modal-header">
                        <h4 class="modal-title">Add File</h4>
                        <button type="button" class="close" data-dismiss="modal" onclick="addFile('')"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name
                            </label>
                            <input type="text" name="add_file_filename" id="add_file_filename" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="add_file_content" id="add_file_content" cols="40" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" onclick="addFile('')"
                            value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- add  Folders Modal HTML -->
    <div id="addFolderModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form name="add_folder" id="add_folder">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Folder</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name
                            </label>
                            <input type="text" name="add_folder_name" id="add_folder_name" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editFileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="edit_file" name="edit_file">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit File</h4>
                        <button type="button" class="close" onclick="editFile('')" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>File Name</label>
                            <input type="text" class="form-control" name="edit_file_filename"
                                id="edit_file_filename" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <br>
                            <textarea name="edit_file_content" id="edit_file_content" cols="40" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" onclick="editFile('')"
                            value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteFileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="delete_form" name="delete_form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="delete_title">Delete File</h4>
                        <button type="button" class="close" onclick="delete_('','')" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p id="delete_message_show"></p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="folder_or_file" name="folder_or_file">
                        <input type="hidden" id="filename" name="filename">
                        <input type="button" class="btn btn-default" data-dismiss="modal" onclick="delete_('','')"
                            value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function editFile(name) {

            if (name == "") {
                $('#editFileModal').modal('toggle');
            } else {

                url = $(location).attr('pathname');
                $.ajax({
                    type: "GET",
                    url: "{{ route('show_edit_file') }}",
                    data: {
                        name: name,
                        url: url
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#editFileModal').modal('toggle');
                        $('#edit_file_filename').val(res.filename);
                        $('#edit_file_content').text(res.content);
                    }
                })
            }
        }

        function addFile() {
            $('#addFileModal').modal('toggle');
        }

        function delete_(folder_or_file, name) {
            if (folder_or_file == "" && name == "") {
                $('#deleteFileModal').modal('toggle');
            } else {
                if (folder_or_file == 'folder') {
                    $('#deleteFileModal').modal('toggle');
                    $('#delete_title').html('Delete Folder');
                    $('#delete_message_show').html('Are you sure you want to delete this Folder?');
                    $('#folder_or_file').val('folder');
                    $('#filename').val(name);
                } else {
                    $('#deleteFileModal').modal('toggle');
                    $('#delete_message_show').html('Are you sure you want to delete this File?')
                    $('#folder_or_file').val('file');
                    $('#filename').val(name);
                }
            }
        }

        function addFolder() {
            $('#addFolderModal').modal('toggle');
        }

        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('#edit_file').submit(function(e) {
            newdata = $('#edit_file').serialize();
            newdata += "&url=" + $(location).attr('pathname');
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: "{{ route('edit_file') }}",
                data: newdata,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#editFileModal").modal('hide');
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                    $("#hello123").load(" #hello123 > *");

                },
                error: function(data) {
                    $('#error-message-wrapper').removeClass('d-none');
                    $('#error-message-show').html(data.responseJSON[
                        'message']);
                }
            });
        });

        $('#add_file').submit(function(e) {
            dataa = $('#add_file').serialize();
            dataa += "&url=" + $(location).attr('pathname');
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: "{{ route('add_file') }}",
                data: dataa,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#addFileModal").modal('hide');
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                    $("#hello123").load(" #hello123 > *");

                },
                error: function(data) {
                    $('#error-message-wrapper').removeClass('d-none');
                    $('#error-message-show').html(data.responseJSON[
                        'message']);
                }
            });
        });

        $('#add_folder').submit(function(e) {
            dataa = $('#add_folder').serialize();
            dataa += "&url=" + $(location).attr('pathname');
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: "{{ route('add_folder') }}",
                data: dataa,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#addFolderModal").modal('hide');
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                    $("#hello123").load(" #hello123 > *");

                },
                error: function(data) {
                    $('#error-message-wrapper').removeClass('d-none');
                    $('#error-message-show').html(data.responseJSON[
                        'message']);
                }
            });
        });

        $('#delete_form').submit(function(e) {
            dataa = $('#delete_form').serialize();
            dataa += "&url=" + $(location).attr('pathname');
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: "{{ route('delete') }}",
                data: dataa,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#deleteFileModal").modal('hide');
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                    $("#hello123").load(" #hello123 > *");

                }
            });
        });
    </script>
</body>


</html>
