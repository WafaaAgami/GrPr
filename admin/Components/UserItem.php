<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <input type="hidden" id="UserId" name="UserId" />
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">
            Full Name 
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="full_name" name="full_name" required="required" class="form-control" value="<?php echo $fullname; ?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_name">
            Username <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="user_name" name="user_name" value="<?php echo $user_name; ?>" required="required" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span s="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="email" class="form-control" type="email" name="email" value="<?php echo $user_email; ?>" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label for="active" class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
            <?php
                if($active == 1){
                    echo "<input type='checkbox' class='flat' id='active' name='active' checked>";
                }
                else{
                    echo "<input type='checkbox' class='flat' id='active' name='active'>";
                }
            ?>
                
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">
            Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="password" id="password" name="password" required="required" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="registraion_date">
            Registraion Date <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="Date" id="registraion_date" name="registraion_date" required="required" value="<?php echo $registraion_date; ?>" class="form-control">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="Users.php" class="btn btn-primary">Cancel</a>
            <button type="submit" id="AddBtn" name="Add" class="btn btn-success">Add</button>
        </div>
    </div>
</form>