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
                                    <h3 class="section-title">EditProfile</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('user.update', [$user->id]) }}" method="POST">
                                            @csrf @method('PUT')
                                            <div class="form-group">
                                                <label for="inputName" class="col-form-label">Name</label>
                                                <input id="inputName" type="text" class="form-control" value="{{ old('name', $user->name) }}" name="name">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="inputName" class="col-form-label">password</label>
                                                <input id="inputName" type="password" class="form-control" value="{{ old('password', $user->password) }}" name="passowrd">
                                            </div> -->
                                            <button class="btn btn-outline-warning btn-sm float-right mt-2">Submit</button>
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
</body> 
</html>