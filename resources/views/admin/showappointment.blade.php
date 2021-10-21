<!DOCTYPE html>
<html lang="en">
 @include('admin.css')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidenavbar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
             <div class="container-fluid page-body-wrapper">

             <table class="table table-hover table-dark table-responsive">
  <thead>
    <tr style="background-color:white;">
      <th>Customer name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Doctor Name</th>
      <th>Date</th>
      <th>Message</th>
      <th>Status</th>
      <th>Accept</th>
      <th>Cancel</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach ($data as $appoint)
	<td>{{$appoint->name}} </td>
	<td>{{$appoint->email}} </td>
	<td>{{$appoint->phone}} </td>
	<td>{{$appoint->doctor}} </td>
	<td>{{$appoint->date}} </td>
	<td>{{$appoint->message}} </td>

	
	<td><label class="badge badge-info">{{$appoint->status}}</label></td>
	
	
	<td><a class="badge badge-success" href="{{url('accept',$appoint->id)}}">Accept</a></td>
	<td><a class="badge badge-warning" href="{{url('cancel',$appoint->id)}}">Cancel</a></td>
  <td><a class="badge badge-info" href="{{url('emailtouser',$appoint->id)}}">Send Notify</a></td>


</tr>


@endforeach
    </tr>
  </tbody>
</table>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>