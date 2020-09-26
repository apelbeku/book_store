@php

    $isEdit = isset($orders);
    $action = $isEdit ? route('order.update', $order->id) : route('order.store');
    $put = $isEdit ? method_field('PUT') : null;

@endphp
<!doctype html>
<html lang="en">
 
<head>
    @include('layout.link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
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
                                                            <form x-data="form()" x-init="{} => { initSelect() }" action="{{ $action }}" method="POST">
                                                                @csrf {{ $put }}
                                                            <template x-for="(row, index) in rows" :key="row">
                                                            <button type="button" class="btn btn-outline-primary btn-sm align-self-center" x-on:click="addRow">Add</button>
                                                            <button type="button" class="btn btn-outline-primary btn-sm align-self-center" x-on:click="removeRow">Delete</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table class="table table-striped table-bordered first dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 123.333px">Customer Name</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">Books</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">Qty</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 123.333px;">Price</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127.778px;">SubTotal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">
                                                                            <input class="form-control" type="text" name="row.customer_name" x-model="customer_name">
                                                                        </td>
                                                                        <td>
                                                                            <select class="select form-control" :class="'row' + index" x-model="row.book_id">
                                                                                @foreach($books as $book)
                                                                                <option>{{ $book->category->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="qty" x-model="row.qty">
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="price" x-model="row.price" readonly>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="number" name="subtotal" x-model="row.subtotal" readonly>
                                                                        </td>
                                                                    </tr>
                                                                </template>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.7.0/alpine.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script><!-- 
    <script type="text/javascript">
        function form() {
            const initRow = {book_id: null, qty: 0, price: 0, subtotal: 0};
            const books = @json($books);

            return {

                // Data
                @if($isEdit)
                    rows: @json($order->order_deatails),
                    total: {{ $orders->total }},
                    customer_name: '$order->customer_name',
                @else
                    rows: [Object.assign({}, initRow)],
                    total: 0,
                    customer_name: '',
                @endif

                // metohd
                initSelect() {
                    $('.select').select2();

                    this.rows.forEach((row, index) => {
                        $('.row' + index).on('select2:select', (e) => {
                            row.book_id = e.target.value;
                            this.setPrice(row.book_id, index);
                        })
                    })
                },

                addRow() {
                    this.rows.push(Object.assign({}, initRow));
                    this.$nextTick(() => {this.initSelect()});
                },
            }
        }
    </script> -->
    <script type="text/javascript">
        function form()
        {
                const initialRow =  {book_id: null, qty: 0, price: 0, subtotal: 0,};
                const items = @json($books);
            
            return {

                //  Data
                @if($isEdit)
                    rows: @json($order->order_details),
                    total: {{  $order->total }},
                    customer_name: '{{ $order->customer_name }}',
                @else
                    rows: [Object.assign({}, initialRow)],
                    total: 0,
                    customer_name: '',
                @endif



                // Method
                initSelect() {
                    $('.select').select2();

                    this.rows.forEach((row, index) => {
                        $('.row' + index).on('select2:select', (e) => {
                            row.book_id = e.target.value;
                            this.setPrice(row.book_id, index);
                        });
                    });

                },

                addRow()
                {
                    this.rows.push(Object.assign({}, initialRow) );
                    this.$nextTick( () => { this.initSelect(); } );
                },

                removeRow()
                {
                    this.rows.pop();

                    this.setTotal();
                },

                setPrice(id, index) { 
                    const item = items.find(item => item.id == id);
                    const result = item && item.price;

                    this.rows[index].price = result;

                    this.setSubtotal(index);            
                },

                setSubtotal(index) {
                    const row = this.rows[index];

                    if (row.price && row.qty) {
                        const result = row.price * row.qty;

                        row.subtotal = result;
                        this.setTotal();
                    }
                },

                setTotal() {
                    let result = 0;

                    if (this.rows.length > 1) {
                        result = this.rows.reduce((total, row) => (total + row.subtotal), 0);
                    } else if (this.rows.length == 1) {
                        result = this.rows[0].subtotal;
                    }
                    this.total = result;
                },
            }
        }
    </script>
</body> 
</html>