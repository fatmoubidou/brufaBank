<form method="post" action="" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>New Account</legend>

<input type='hidden' value = "<?php echo $user->getId()?>"

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Account</label>
  <div class="col-md-4">
    <select name="name" class="form-control">
      <option value="1">livret A</option>
      <option value="2">P.E.L.</option>
      <option value="3">C.E.L.</option>
    </select>
  </div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Sum</label>
  <div class="col-md-4">
  <input name="sum" type="text" placeholder="sum" class="form-control input-md">
  </div>
</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>
