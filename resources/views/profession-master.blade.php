@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <center><h3 style="color: #0099FF;">Profession Master</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
          <form class="form-horizontal" name="profession_master" id="profession_master"  method="post">
           {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="state_name" class="col-sm-2 col-form-label">Profession Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Profession_Name" name="Profession_Name"  value="" placeholder="Enter a Profession Name"  required>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="Is_active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-10">
                         <label><input type="checkbox"  id="Is_active" name="Is_active" value="1" style="zoom:1.5;"></label>
                        </div>
                      </div>

                      <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </center>

                      
        
        </form>
      </div>
    </div>
  </div>
</div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body">

          <div class="container">
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
         <tr style="background-color: #87CEFA;border: 1px ridge black;">
                <th style="border:1px ridge black;">Profession Id</th>
                <th style="border:1px ridge black;">Profession Name</th>
                <th style="border:1px ridge black;">Is_Active</th>
            </tr>

            </thead>
            <tbody>

              @foreach($users as $val)
          
        <tr>
            <td style="border:1px ridge black;">{{$val->Profession_id}}</td>
            <td style="border:1px ridge black;">{{$val->Profession_Name}}</td>
            <td style="border:1px ridge black;">{{$val->Is_Active}}</td>
            
                    
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


@endsection