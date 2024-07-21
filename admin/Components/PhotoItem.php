<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
	<input type="hidden" id="ItemId" name="ItemId" />
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6 ">
			<input type="text" id="title" name="title" required="required" class="form-control" value="<?php echo $photo_title ?>">
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="license">License <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 ">
			<textarea id="license" name="license" required="required" class="form-control"><?php echo $photo_lisense?></textarea>
		</div>
	</div>
	<div class="item form-group">
		<label for="views" class="col-form-label col-md-3 col-sm-3 label-align">Views <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6 ">
			<input id="views" class="form-control" type="number" name="views" required="required" value="<?php echo $photo_views?>">
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="fileToUpload">Image <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 ">
			<input type="file" id="fileToUpload" name="fileToUpload" required class="form-control" accept="image/jpeg, image/png, image/gif">
		</div>
	</div>
	
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Tag <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 ">
			<select class="form-control" name="category" id="category">
				<option value="">Select Tag</option>
				<option value="cat1">Category 1</option>
				<option value="cat2">Category 2</option>
			</select>
		</div>
	</div>
	<div class="ln_solid"></div>
	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<a href="photos.php" class="btn btn-primary">Cancel</a>
            <button type="submit" id="AddBtn" name="Add" class="btn btn-success">Add</button>
		</div>
	</div>
</form>
