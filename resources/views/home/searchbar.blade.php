<div class="container-fluid p-0 search-bar">
    <nav class="navbar bg-dark">
    <div class="container">
        <a class="navbar-brand"></a>
        <form action="{{ url('searching_page') }}" method="get" class="d-flex" role="search" >
        <input name="search" class="form-control me-2 border-2" type="search" aria-label="Search">
        <button class="btn btn-outline-success border-2" type="submit">Tìm kiếm</button>
        </form>
    </div>
    </nav>
</div>