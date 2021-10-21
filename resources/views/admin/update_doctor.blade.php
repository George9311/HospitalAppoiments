<!DOCTYPE html>
<html lang="en">
<base href="/public">
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
<form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                  <label>Doctor</label>
                  <input type="text" name="name" style="color: black;" placeholder="{{$data->name}}" value="{{$data->name}}" required>
                </div>
              
           

            <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Phone</label>
                  <input type="tel" name="phone" style="color: black;" placeholder="{{$data->phone}}" value="{{$data->phone}}" required>
                </div>
              
            </div>

             <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Room NO</label>
                  <input type="number" name="room" style="color: black;" placeholder="{{$data->room}}" min="0" max="25" value="{{$data->room}}" required>
                </div>
              
            </div>

            <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Speciality</label>
                  <select name="speciality" style="color: black;" required >
                    <option>{{$data->speciality}}</option>
                    <option value="Skin">Skin</option>
                    <option value="Eye">Eye</option>
                    <option value="Heart">Heart</option>
                  </select>
                </div>


            
             
                <div style="padding: 15px;">
                  <label>Old image</label>
                  <img src="doctorimage/{{$data->image}}">
                    <input type="file" name="file" required>
                </div>
              
               <input type="submit" class="btn btn-outline-success">

              </form>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>