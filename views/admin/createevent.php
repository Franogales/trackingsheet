<div class="modal fade" id="EventModal" tabindex="-1" role="dialog" aria-labelledby="EventModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      	<form action="../../php/registerevent.php" method="post">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="eventModalLabel">Register an event</h5>
	            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
	          </div>
	          <div class="modal-body">
	          	<div class="form form-control">
	          		<div class="row">
	          			<div class="col-md-6">
	          				<label for="Event Name">Event Name</label>
	          				<input type="text" name="eventname" required="">
	          			</div>
	          			
	          			<div class="col-md-2">
          					<label>since</label>
          					<select name="since" required="">
	          					<option>00:00</option>
	          					<option>00:30</option>
	          					<option>01:00</option>
	          					<option>01:30</option>
                      <option>02:00</option>
                      <option>02:30</option>
                      <option>03:00</option>
                      <option>03:30</option>
                      <option>04:00</option>
                      <option>04:30</option>
                      <option>05:00</option>
                      <option>05:30</option>
                      <option>06:00</option>
                      <option>06:30</option>
                      <option>07:00</option>
                      <option>07:30</option>
                      <option>08:00</option>
                      <option>08:30</option>
                      <option>09:00</option>
                      <option>09:30</option>
                      <option>10:00</option>
                      <option>10:30</option>
                      <option>11:00</option>
                      <option>11:30</option>
                      <option>12:00</option>
                      <option>12:30</option>
                      <option>13:00</option>
                      <option>13:30</option>
                      <option>14:00</option>
                      <option>14:30</option>
                      <option>15:00</option>
                      <option>15:30</option>
                      <option>16:00</option>
                      <option>16:30</option>
                      <option>17:00</option>
                      <option>17:30</option>
                      <option>18:00</option>
                      <option>18:30</option>
                      <option>19:00</option>
                      <option>19:30</option>
                      <option>20:00</option>
                      <option>20:30</option>
                      <option>21:00</option>
                      <option>21:30</option>
                      <option>22:00</option>
                      <option>22:30</option>
                      <option>23:00</option>
                      <option>23:30</option>

          					</select>
	          			</div>
	          			<div class="col-md-2">
	      					<label>until</label>
	      					<select name="until" required="">

	          					<option>00:00</option>
                      <option>00:30</option>
                      <option>01:00</option>
                      <option>01:30</option>
                      <option>02:00</option>
                      <option>02:30</option>
                      <option>03:00</option>
                      <option>03:30</option>
                      <option>04:00</option>
                      <option>04:30</option>
                      <option>05:00</option>
                      <option>05:30</option>
                      <option>06:00</option>
                      <option>06:30</option>
                      <option>07:00</option>
                      <option>07:30</option>
                      <option>08:00</option>
                      <option>08:30</option>
                      <option>09:00</option>
                      <option>09:30</option>
                      <option>10:00</option>
                      <option>10:30</option>
                      <option>11:00</option>
                      <option>11:30</option>
                      <option>12:00</option>
                      <option>12:30</option>
                      <option>13:00</option>
                      <option>13:30</option>
                      <option>14:00</option>
                      <option>14:30</option>
                      <option>15:00</option>
                      <option>15:30</option>
                      <option>16:00</option>
                      <option>16:30</option>
                      <option>17:00</option>
                      <option>17:30</option>
                      <option>18:00</option>
                      <option>18:30</option>
                      <option>19:00</option>
                      <option>19:30</option>
                      <option>20:00</option>
                      <option>20:30</option>
                      <option>21:00</option>
                      <option>21:30</option>
                      <option>22:00</option>
                      <option>22:30</option>
                      <option>23:00</option>
                      <option>23:30</option>
	      					</select>
	          			</div>

	          			<div class=" col-md-6">
	          				<label for="howmany">how many people</label>
	          				<input type="text" name="howmany"  placeholder="100" class="col-md-4" required="">
	          			</div>
	          			<div class=" col-md-6">
	          				<label for="howmany">date</label>
	          				<input type="date" name="date"  placeholder=""  required="">
	          			</div>
	          		</div>
	          	</div>
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	            <input class="btn btn-primary" type="submit" value="Register">
	          </div>
	        </div>
        </form>
      </div>
    </div>