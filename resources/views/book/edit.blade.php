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

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Add New Book</h3>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">New Book</h5>
                                    <div class="card-body">
                                        <form action="{{ route('book.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="Name" class="col-form-label">Name</label>
                                                <input id="Name" type="text" class="form-control" name="name" value="{{ old('name', $books->name) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id" class="col-form-label">Category</label>
                                                <select class="selectpicker form-control" name="category_id">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id', $books->category_id == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Price" class="col-form-label">Price</label>
                                                <input id="Price" type="number" class="form-control" name="price" value="{{ old('price', $books->price) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="Code Book" class="col-form-label">Code Book</label>
                                                <input id="Code Book" type="text" class="form-control" name="code_book" value="{{ old('code_book', $books->code_book) }}">
                                            </div>
                                            <button class="btn btn-outline-primary btn-sm mt-4">Submit</button>
                                        </form>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
</body> 
</html>