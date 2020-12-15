
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
      <div class="col-md-12">
          <div class="form-area">  
            <form role="form" method="post" action="{{ route('employee.update', $employee->id)}}" accept-charset="UTF-8">
              <div class="alert alert-success hide"></div>
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="alert alert-danger hide"></div>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" placeholder="Name"/>
              </div>
              <div class="form-group">
                <input type="number" pattern="[0-9]*"  class="form-control" id="salary" name="salary" value="{{ $employee->salary }}" placeholder="Salary Number" />
              </div>
              <div class="form-group">
                <input class="form-control" type="number" id="age" name="age" placeholder="age" value="{{ $employee->age }}"/>               
              </div>
              <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Employee</button>
            </form>
          </div>
        </div>
     </form>