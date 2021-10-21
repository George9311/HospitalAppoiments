<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  label{
    display: inline-block;
    width: 200px;
  }
</style>
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

            <div class="container" align="center">
              <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                  <label>Doctor</label>
                  <input type="text" name="name" style="color: black;" placeholder="write the name" required>
                </div>
              
           

            <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Phone</label>
                  <input type="tel" name="phone" style="color: black;" placeholder="write the number" required>
                </div>
              
            </div>

             <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Room NO</label>
                  <input type="number" name="room" style="color: black;" placeholder="write the number" min="0" max="25" required>
                </div>
              
            </div>

            <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Speciality</label>
                  <select name="speciality" style="color: black;" required >
                    <option value="Skin">Skin</option>
                    <option value="Eye">Eye</option>
                    <option value="Heart">Heart</option>
                  </select>
                </div>


            
             
                <div style="padding: 15px;">
                  <label>Doctor image</label>
                    <input type="file" name="file" required>
                </div>
              
               <input type="submit" class="btn btn-outline-success">

              </form>
            </div>




      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>