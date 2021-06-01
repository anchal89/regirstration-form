<div class="text-center" style="margin-top: 50px;">
  <h4>User Registration Form</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <?php echo $this->Form->create($userEnt, ['name'=>'add_users', 'class'=>'was-validated']) ?>
      <div class="form-group">
        <?php echo $this->Form->control('username', ['type'=>'text', 'class'=>'form-control','placeholder'=>'Enter username','required'=>true]);?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->control('email', ['type'=>'text', 'class'=>'form-control','placeholder'=>'Enter email','required'=>true]);?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->control('mobile', ['type'=>'text', 'class'=>'form-control','placeholder'=>'Enter mobile','required'=>true]);?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->control('country', ['type'=>'select', 'class'=>'form-control','placeholder'=>'country','required'=>true]);?>
      </div>
	   <div class="form-group">
        <?php echo $this->Form->control('state', ['type'=>'select', 'class'=>'form-control','placeholder'=>'state','required'=>true]);?>
      </div>
	   <div class="form-group">
        <?php echo $this->Form->control('city', ['type'=>'select', 'class'=>'form-control','placeholder'=>'city','required'=>true]);?>
      </div>
	   <div class="form-group">
        <?php echo $this->Form->control('comments', ['type'=>'select', 'class'=>'form-control','placeholder'=>'country','required'=>true]);?>
      </div>
	   <div action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

<input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy


</div>
      <button type="submit" class="btn btn-primary" style="float: right;">Sign Up</button>
      <?php echo $this->Form->end() ?>
    </div>
  </div>
</div>