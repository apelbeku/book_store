<!doctype html>
<html lang="en">
 
<head>
    @include('layout.link')
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('layout.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('layout.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <h3 class="pt-3">category</h3>
                                                        <a href="{{ route('category.create') }}" class="btn btn-outline-primary btn-sm align-self-center">Add New</a>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                <div class="row my-2">
                                                                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length">
                                                                        <label class="d-flex justify-content-start">Show 
                                                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm col-sm-1 mx-2">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                            </select> entries
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                                    <label class="d-flex justify-content-end">Search:
                                                                        <input type="search" class="form-control form-control-sm col-sm-4 ml-2" placeholder="" aria-controls="DataTables_Table_0">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table class="table table-striped table-bordered first dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 176.667px;">Name</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 102.222px;">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($categories as $category)
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">{{ $category->name }}</td>
                                                                        <td class="d-flex inline-block justify-content-around">
                                                                            <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                                                                            <form action="{{ route('category.delete', ['id'=>$category->id]) }}" method="POST">
                                                                                @csrf @method('DELETE')
                                                                                <button class="btn btn-outline-danger btn-sm">Delete</button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-12 col-md-5 mt-2">
                                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item active">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item ">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item ">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item ">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item ">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item ">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                                    </li>
                                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    @include('layout.script')
</body> 
</html>