<div class="d-none" id="admin_dashboard_show_users">
    <div class="container" id="users_datatable">
        <div class="col-sm-12">
            <div class="mt-5 mb-5 mx-0 shadow-lg">
                <div class="row text-center">
                    <div class="col-sm-12 p-0">
                        <h1
                            class="text-uppercase display-5 text-size-24 text-center rounded p-2 bg-success text-white  ">
                            Users
                        </h1>
                        <div class="pull-right mt-2 mb-1">
                            <a class="btn btn-success" onClick="add()" href="javascript:void(0)">Create New User</a>
                        </div>
                        <div class="container bg-success text-center shadow-lg alert alert-succes alert-dismissible fade show d-none"
                            role="alert" id="alert">
                            Account <strong>Created </strong> Succesfully
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <div class="card-body m-1 p-5">
                            <table class="table table-bordered" id="show_users_datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Avatar</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Role</th>
                                        <th>Created At</th>
                                        <th>Created By</th>
                                        <th>Updated At</th>
                                        <th>Updated By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- boostrap user model -->
    <div class="modal fade" id="user-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="UserModal"></h4>
                </div>
                <div class="modal-body">
                    <div id="error-message-wrapper" class="d-none">
                        <p style="text-align:center; color: red;" id="error-message-show"></p>
                    </div>
                    <form action="{{ route('store-user') }}" id="UserForm" name="UserForm"
                        class="form-horizontal p-2 needs-validation" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">

                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter User First Name" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter User Last Name" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter User Email" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <label class="input-group-text" for="password">User Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter User Password" maxlength="50" required="" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <label class="input-group-text" for="picture">User Picture</label>
                                <input type="file" class="form-control" id="picture" name="picture" required
                                    accept="image/*">
                            </div>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-12">
                                <Select name="role_id" id="role_id">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </Select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">User Status</label>
                            <div class="col-sm-12">
                                <Select name="status" id="status">
                                    <option value="0">InActive</option>
                                    <option value="1">Active</option>
                                </Select>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10 text-end mt-2">
                            <button type="submit" class="btn btn-primary" id="btn-save">Save
                                changes
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end bootstrap model -->

</div>

<script type="text/javascript">
    setInterval(
        function() {
            if ($("#success-alert").hasClass("d-none")) {

            } else {

                $("#success-alert").addClass("d-none");
            }
        }, 1000
    );
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#show_users_datatable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('show_users_datatable') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'profile_picture_path',
                    name: 'profile_picture_path',
                    "render": function(data, type, full, meta) {
                        return "<img src=\" " + data + " \" height=\" 80px \" />"
                    }
                },
                {
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'role_id',
                    name: 'role_id'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'created_by',
                    name: 'created_by'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                },
                {
                    data: 'updated_by',
                    name: 'updated_by'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
            ],
            order: [
                [0, 'desc']
            ]
        });
    });

    function show_admin_dashboard() {
        if ($("#admin_dashboard_index").has("d-none")) {
            $("#admin_dashboard_index").addClass('d-block').removeClass("d-none");
        }

        if ($("#admin_dashboard_show_users").has("d-block")) {
            $("#admin_dashboard_show_users").addClass('d-none').removeClass("d-block");
        }
    }

    function show_admin_dashboard_show_users() {
        if ($("#admin_dashboard_show_users").has("d-none")) {
            $("#admin_dashboard_show_users").addClass('d-block').removeClass("d-none");
        }

        if ($("#admin_dashboard_index").has("d-block")) {
            $("#admin_dashboard_index").addClass('d-none').removeClass("d-block");
        }
    }

    function add() {
        $('#UserForm').trigger("reset");
        $('#UserModal').html("Add User");
        $('#user-modal').modal('show');
        $('#id').val('');
    }

    function editFunc(id) {

        $('#first_name').attr('required', false);
        $.ajax({
            type: "POST",
            url: "{{ url('edit-user') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                $('#UserModal').html("Edit User");
                $('#user-modal').modal('show');
                $('#id').val(res.id);
                $('#first_name').val(res.first_name);
                $('#last_name').val(res.last_name);
                $('#email').val(res.email);
                $("#role_id").val(res.role_id).change();
                $('#status').val(res.status).change();
            }
        });
    }

    function deleteFunc(id) {
        if (confirm("Delete Record?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('delete-user') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#show_users_datatable').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }
    $("#UserForm").validate({
        rules: {
            id: {
                required: false
            },
            name: "required",
            email: {
                required: true,
                email: true
            },
            picture: {
                required: true,
                extension: "jpg|jpeg|png|gif"
            }
        },
        messages: {
            name: "Please specify your name",
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            },
            picture: {
                required: 'Required!',
                extension: 'Not an image!'
            }

        },
        invalidHandler: function(event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ?
                    'You missed 1 field. It has been highlighted' :
                    'You missed ' + errors + ' fields. They have been highlighted';
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        errorElement: 'div',
        errorClass: "errorTxt",
        errorPlacement: function(error, element) {
            if (element.attr("name") == "fname" || element.attr("name") == "lname") {
                error.insertAfter("#lastname");
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            $('#UserForm').submit(function(e) {
                let formData = new FormData(this);
                if ($('#UserModal').html() == 'Edit User') {
                    formData.append('edit_or_add', 'edit');
                }
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('store-user') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#user-modal").modal('hide');
                        var classList = $("#alert").attr("class");
                        $("#success-alert").removeClass("d-none");
                        var oTable = $('#show_users_datatable').dataTable();
                        oTable.fnDraw(false);
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);

                    },
                    error: function(data) {
                        $('#error-message-wrapper').removeClass('d-none');
                        $('#error-message-show').html(data.responseJSON[
                            'message']);
                    }
                });
            });
        }
    });
    show_admin_dashboard();
</script>
