<div class="d-none" id="admin_dashboard_index">
    <h1>Welcome Admin -- {{ Auth::user()->first_name }}</h1>
    <img src="{{ Auth::user()->profile_picture_path }}" alt="" style="width: 10%" class="rounded">
    <br />
    <a href="/logout" class="btn btn-primary mt-2">Logout</a>

    <script></script>
</div>
