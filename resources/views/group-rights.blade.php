@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Group Rights</h3></center>
        </div><br><br>
<!-- **Header section end -->





      <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}

                  <div class="row">

                  	 <div class="col-sm-4"></div>
                  	 	<div class="col-sm-2">
                       	<label for="companyname" class="col-lg-4 col-sm-12 control-label">Menu&nbsp;Name:</label>
                       </div>
                       <div class="col-sm-2">
                       	<select  class="form-control" id="companyname" name="companyname" style="margin-left: -15%;">
                      <option disabled selected  value="0">Select One</option>
                      @foreach ($shows as $show)
          <option value="{{ $show->Groupid}}">{{ $show->GroupName}}</option>
        @endforeach
                       </select>
                       </div><br><br><br>

                               <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
               </div>
           </center>
       </div>
   </form>
</div>
</div>

@endsection