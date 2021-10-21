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
      <th>Doctor ame</th>
      <th>Email</th>
      <th>Speciality</th>
      <th>Room</th>
      <th>Image</th>
      <th>Accept</th>
      <th>Cancel</th>
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach ($data as $doctors)
	<td>{{$doctors->name}} </td>
	<td>{{$doctors->email}} </td>
	<td>{{$doctors->speciality}} </td>
	<td>{{$doctors->room}} </td>
	<td ><img src="doctorimage/{{$doctors->image}}"> </td>
  <td><a class="badge badge-success" href="{{url('updatedoctor',$doctors->id)}}">Update</a></td>
  <td><a onclick="return confirm('Are you sure to delete?')" class="badge badge-warning" href="{{url('deletedoctor',$doctors->id)}}">Delete</a></td>
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