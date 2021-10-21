<!DOCTYPE html>
<html lang="en">
<base href="/public">
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
              <form action="{{url('sendemail',$data->id)}}" method="post">
                @csrf
                <div style="padding: 15px;">
                  <label>Greeting</label>
                  <input type="text" name="greeting" style="color: black;" placeholder="write the name" required>
                </div>
              
           

            <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Body</label>
                  <input type="text" name="body" style="color: black;" placeholder="write the number" required>
                </div>
              
            </div>

             <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Action Text</label>
                  <input type="text" name="actiontext" style="color: black;" placeholder="write the number" required>
                </div>
              
            </div>

             <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>Action url</label>
                  <input type="text" name="actionurl" style="color: black;" placeholder="write the number"required>
                </div>
              
            </div>

             <div class="container" align="center">
             
                <div style="padding: 15px;">
                  <label>End Part</label>
                  <input type="text" name="endpart" style="color: black;" placeholder="write the number" required>
                </div>
              
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