
@extends('layouts.sidebar')

@section('content')


                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Porting Submitted</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Adress</th>
                                            <th>ID Number</th>
                                            <th>Email</th>
                                            <th>Paperwork</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Adress</th>
                                            <th>ID Number</th>
                                            <th>Email</th>
                                            <th>Paperwork</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($porting as $port)
                                        <tr>
                                       
                                            <td scope="row">{{$port['id' ]}}</td>
                                            <td scope="row">{{$port['Name' ]}}</td>
                                            <td scope="row">{{$port['Surname' ]}}</td>
                                            <td scope="row">{{$port['Adress' ]}}</td>
                                            <td scope="row">{{$port['ID_number' ]}}</td>
                                            <td scope="row">{{$port['email' ]}}</td>
                                            <td scope="row">{{$port['paperwork' ]}}</td>
                                      
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
