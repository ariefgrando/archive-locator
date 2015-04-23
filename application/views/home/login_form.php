<!-- Registration form - START -->
<div class="container">
    <div class="row">
		<?php echo form_open('user/auth/'); ?>
            <div class="col-lg-12" style='background: linear-gradient(to right, #F9F9F9 0%, #F9F9F9 100%)'>
				<div>&nbsp;</div>
				<label for="">Web Admin Dashboard</label>
				<div>&nbsp;</div>
				<div class="form-group">
					<?php echo form_error('username'); ?>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'username',
							  'id'          => 'username',
							  'class'       => 'form-control',
							  "required"	=>"required",
							  'value'		=> set_value('username')
							);
							echo form_input($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

				<div class="form-group">
					<?php echo form_error('password'); ?>
                    <div class="input-group">
                        <!--input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required-->
						<?php 
							$data = array(
							  'name'        => 'password',
							  'id'          => 'password',
							  'class'       => 'form-control',
							  "required"	=>"required",
							);
							echo form_password($data); 
						?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

				<div>&nbsp;</div>



                <input type="submit" name="submit" id="submit" value="Log In" class="btn btn-info pull-right">
				<input type="button" name="buttonfromadmin" id="buttonfromadmin" value="Back to Form" class="btn btn-link pull-left">
				<div>&nbsp;</div>
				<div>&nbsp;</div>
				<div>&nbsp;</div>
            </div>
        </form>
    </div>
</div>
<!-- Registration form - END -->
