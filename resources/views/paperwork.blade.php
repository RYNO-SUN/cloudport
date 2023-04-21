@extends('layouts.sidebar')

@section('content')
    <div class="tab-content bg-transparent">

       
            
<div style="float: left; width: 40%" class="col-md-4 single-note-item all-category note-important" style="">
    <div class="card card-body">
        <span class="side-stick"></span>
        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch"> <i class="point fa fa-circle ml-1 font-10"></i></h5>
        <p class="note-date font-12 text-muted"> </p>
        <p class="note-date font-12 text-muted"> </p>
       
        <div class="note-content">
        <table class="table">
             <thead>
                   <tr>
                        <th>Name</th>
                        <th>File</th>
                   </tr>
             </thead>
             <tbody>
             @foreach($files as $file)
                  @php

                      $ext = strtolower(pathinfo($file->filepath, PATHINFO_EXTENSION));

                      $imgext_arr = array("jpg","jpeg","png");

                      $isImage = false;
                      if(in_array($ext,$imgext_arr)){
                            $isImage = true;
                      }
                  @endphp
                  <tr>
                      <td>{{ $file->name }}</td>
                      <td>
                          @if($isImage)
                               <img src="{{ $file->filepath }}" width="100px" height="100px;">
                          @else
                               <a href="{{ $file->filepath }}" target="_blank">View file</a>
                          @endif
                      </td>
                  </tr>
             @endforeach
             </tbody>
        </table>
          </div>

        <p class="note-title "> </p>
        <div class="d-flex align-items-center">
        
            
            


<button class="fa fa-trash remove-note" type="submit"></button>

</form>
        </div>
        

</div>

</div>

    


<div class="container">
<div class="row">
  <div class="col-md-8 mt-5" style="margin: 0 auto;">

        <!-- Alert message (start) -->
        @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }} ">
                 {{ Session::get('message') }}
            </div>
        @endif
        <!-- Alert message (end) -->

        <form method="post" action="{{ route('submitformgallery') }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group mb-4">

                    <label class="control-label col-sm-2" for="name">Name:</label>

                    <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                    </div>

                    <!-- Error -->
                    @if($errors->has('name'))

                        <div class='text-danger mt-2'>
                             * {{ $errors->first('name') }}
                        </div>

                    @endif
              </div>

              <div class="form-group mb-4">

                    <label class="control-label col-sm-2" for="file">File:</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" class="form-control">
                    </div>

                    <!-- Error -->
                    @if($errors->has('file'))

                        <div class='text-danger mt-2'>
                             * {{ $errors->first('file') }}
                        </div>

                    @endif

              </div>

              <div class="form-group "> 
                    <div class="col-sm-offset-2 col-sm-10">
                          <button style="background-color : #4569D8; border : 1px solid black"type="submit" class="btn btn-info">Submit</button>
                    </div>
              </div>

        </form>

  </div>

</div>

<!-- File list -->
<div class="row">
  <div class="col-md-12">
        
  </div>
</div>
</div>
@endsection