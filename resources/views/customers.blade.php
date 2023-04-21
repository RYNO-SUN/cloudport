
@extends('layouts.sidebar')

@section('content')


                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ported In</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Porting Date</th>
                                            <th>Porting Provider</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ported In</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Porting Date</th>
                                            <th>Porting Provider</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($customers as $customer)
                                        <tr>
                                       
                                            <td scope="row">{{$customer['id' ]}}</td>
                                            <td scope="row">{{$customer['ported_in' ]}}</td>
                                            <td scope="row">{{$customer['Name' ]}}</td>
                                            <td scope="row">{{$customer['number' ]}}</td>
                                            <td scope="row">{{$customer['porting_date' ]}}</td>
                                            <td scope="row">{{$customer['portingProvider' ]}}</td>
                                      
                                        </tr>
                                        @endforeach
                                      
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                       <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
@endsection
