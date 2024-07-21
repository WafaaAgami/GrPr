<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <input type="hidden" id="ItemId" name="ItemId" />
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="item_name">
            Tag Name 
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="item_name" name="item_name" required="required" class="form-control" value="<?php echo $item_name; ?>">
        </div>
    </div>
    
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="categories.php" class="btn btn-primary">Cancel</a>
            <button type="submit" id="AddBtn" name="Add" class="btn btn-success">Add</button>
        </div>
    </div>
</form>