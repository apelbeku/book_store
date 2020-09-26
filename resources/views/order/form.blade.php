@php
    $isEdit = isset($orders);
    $action = $isEdit ? route('order.update', $order->id) : route('order.store');
    $put = $isEdit ? method_fleid('PUT') : null;
@endphp
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
                                                        <h3 class="pt-3">Order</h3>
                                                        <div class="align-self-center">
                                                    <form action="{{ $action }}" method="POST">
                                                        @csrf {{ $put }}
                                                            <button type="button" class="btn btn-outline-primary btn-sm align-self-center">Add</button>
                                                            <button type="button" class="btn btn-outline-primary btn-sm align-self-center">Delete</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table class="table table-striped table-bordered first dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 123.333px">Customer Name</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">Book</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">Qty</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 123.333px;">SubTotal</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">Price</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <template>
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">
                                                                            <input class="form-control" type="text" name="customer_name">     
                                                                        </td>
                                                                        <td>
                                                                            <select class="select2 form-control">
                                                                                @foreach($books as $book)
                                                                                <option>{{ $book->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="qty">
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="price" readonly>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="subtotal" readonly>
                                                                        </td>
                                                                    </tr>
                                                                </template>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-outline-primary btn-sm mt-4 float-right">Submit</button>
                                                        </div>
                                                    </form>
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