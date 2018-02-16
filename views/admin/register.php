 <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="UserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="../../php/registeruser.php" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eventModalLabel">Register an user</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form form-control">
                <div class="row">
                  <div class="col-md-6">
                    <label for="Event Name">Name</label>
                    <input type="text" name="name" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="Event Name">User of liveops</label>
                    <input type="text" name="username" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="Event Name">Password</label>
                    <input type="password" name="password" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="Event Name">Confirm Password</label>
                    <input type="password" name="cnfpassword" required="">
                  </div>
                  <br>
                  <br>
                  <br>

                  <div class="col-md-12">
                    <label for="level">User Level</label>
                    <select class="col-md-4 btn btn-danger" name="level" required="">
                      <option value="2">agent</option>
                      <option value="1">admin</option>
                    </select>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input class="btn btn-primary" type="submit" value="Register">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>