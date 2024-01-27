<?php
// include header file
include 'header.php';
include "php_files/config.php";
?>

<div class="container">
    <p id="success"></p>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Manage <b>Users</b></h2>
                </div>
                <div class="col-sm-4">
                    <a href="#user_add" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New User</span></a>
                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <table class="table table-striped table-hover" id="all_table">

        </table>
        

    </div>
</div>

<!-- Add Modal HTML -->
<div id="user_add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
					<div class="modal-text align-text-center bg-danger" id="error-message"></div>
					<div class="modal-text  align-text-center bg-success" id="success-message"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
			<form id=addform>
               
            </form>
        </div> <div class="modal-body add_user" id="adduser">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" id="f_name" name="f_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" id="l_name" name="l_name" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label>userName</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
					
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" id="mobile" name="mobile" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" id="city" name="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>User Status</label>
                        <input type="number" id="user_role" name="user_role" class="form-control" required>
                    </div>
                    <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" name="add_user" id="useradd">Add</button>
                </div>
    </div>
</div>

<!-- Add Update button -->
<div id="user_update" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_user">
					<div class="modal-header">						
						<h4 class="modal-title">Update User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body" id="updateform">
						<input type="hidden" id="id" name="id" class="form-control" required>					
						<div class="form-group">
							<label>First Name</label>
							<input type="text" id="f_name" name="f_name" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Last Name</label>
							<input type="text" id="l_name" name="l_name" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>User Name</label>
							<input type="text" id="username" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="number" id="mobile" name="mobile" class="form-control" required>
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" id="city" name="city" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>User Role</label>
							<input type="number" id="user_role" name="user_role" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update_btn">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- User details view -->
<div class="modal fade" id="user_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="view_user_form">
                <div class="modal-header">
                    <h4 class="modal-title">User Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Add your view user form fields here -->
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" id="btn-add">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_d" name="id" class="form-control">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /Modal -->

<!-- Add Modal HTML -->

<?php
// include footer file
include "footer.php";
?>
