@extends('layouts.sidebar')

@section('content')
<div class="card-body">
                

                <form action="{{ route('contact.submit') }}" method="POST" >
@csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="Name">Name</label>
                        <input name="Name" type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="Surname">Surname</label>
                        <input name="Surname" type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="Adress">Adress</label>
                        <input name="Adress" type="adress" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="ID_number">ID Number</label>
                        <input name="ID_number" type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="paperwork">Paperwork Zip</label>
                        <input name="paperwork" type="file" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                   
                  <!--
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="cars">Status:</label>

                            <select class="form-control form-control-lg"name="status" id="cars">
                            <option value="volvo">Forms Submit</option>
                            <option value="volvo">Pending</option>
                            <option value="saab">Accepted</option>
                            <option value="mercedes">Rejected</option>
                            <option value="audi">Ported Successfully</option>
                            </select>

                            </div>
                    </div>
                  </div>
-->
                    

                 

                    
                    <button  style="width : 100%; background-color : grey ; color : black; position:relative;  top:2px;" class="form-control">Add</button>
                   
                 

                </form>
     
              
@endsection
