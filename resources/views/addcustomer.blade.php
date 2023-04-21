@extends('layouts.sidebar')

@section('content')
<div class="card-body">
                

                <form action="/addcustomer" method="POST" >
@csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="ported_in">Ported In</label>
                        <input name="ported_in" type="date" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="Name">Name</label>
                        <input name="Name" type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                       
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="number">Number</label>
                        <input name="number"type="number" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="porting_date">Porting Date</label>
                        <input name="porting_date" type="date" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="portingProvider">Porting Provider</label>
                        <input name="portingProvider" type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  

                    

                 

                    
                    <button  style="width : 100%; background-color : grey ; color : black; position:relative;  top:2px;" class="form-control">Add</button>
                   
                 

                </form>
     
              
@endsection
