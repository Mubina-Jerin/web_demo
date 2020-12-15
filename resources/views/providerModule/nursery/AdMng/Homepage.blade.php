
@extends('layouts.default')

@include('includes.providerNav')

@section('content')


<div class="userHome">
    <!-- Header -->
    <header id="header" class="ex-header" >
      <div style="margin-top:-15px;" class="container" >
          <div class="row">
              <div class="col-lg-12">
                  <h2>
                      Ad Management  
                      পোর্টাল
                  </h2>
                  <h2>   স্বাগতম  {{$user_name}}</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </header> <!-- end of ex-header -->
  <!-- end of header -->
  <div class="row justify-content-center">
    <div class="container">
        <table class="table table-striped table-bordered" style="background:white;">
            <thead>
                <tr>
                    <td>Nursery Name</td>
                    <td>Description of the Nursery</td>
                    <td>Actions</td>
                   </tr>
            </thead>
            <tbody>
     @if($nursery_obj)
     @foreach ($nursery_obj as $item)
     <tr>
          
        <td>{{ $item->nursery_name }}</td>
        <td>{{ $item->description }}</td>
             
        <td>
            <a class="btn btn-small btn-success" href="{{ URL::to('/nurseryDetailsShow/' . $item->id) }}">Show all the details of the nursery</a>
        </td>
    </tr>
            
     @endforeach
     @else

     @endif
     </tbody>
     </table>
     </div>
    </div>
 
  
</div>

@endsection

