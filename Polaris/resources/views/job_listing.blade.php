
        @include('includes.header')
<div class="container">
   <form>
   <h4>Employer Information</h4>
  <div class="form-group">
    <label for="EmployerName">Name</label>
    <input type="text" class="form-control" name="ename" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="EmployerAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="EmployerAAddress">Additional Address</label>
    <input type="text" class="form-control" name="aaddress" placeholder="Enter Additional Address">
  </div>
  <div class="form-group">
    <label for="EmployerCity">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter City">
  </div>
  <div class="form-group">
    <label for="EmployerState">State</label>
    <input type="text" class="form-control" name="state" placeholder="Enter State">
  </div>
   <div class="form-group">
    <label for="EmployerZip">Zip</label>
    <input type="text" class="form-control" name="zip" placeholder="Enter Zip">
  </div>
  <div class="form-group">
    <label for="EmployerYCS">Year Company Started</label>
    <input type="text" class="form-control" name="ycs" placeholder="Enter Year">
  </div>
  <div class="form-group">
    <label for="EmployerNOE">Number of Employees</label>
    <input type="text" class="form-control" name="noe" placeholder="Enter Number of Employees">
  </div>
  <div class="form-group">
    <label for="EmployerFollow-up">Follow-up</label>
    <input name="follow" type="radio" value="Yes" /><label>Yes</label>
    <input name="follow" type="radio" value="No" /><label>No</label>
  </div>
  <div class="form-group">
    <label for="Employercomments">Follow-up Comments</label>
    <textarea name="fcomments" placeholder="Follow-up Comments"></textarea>
  </div>
  <!--<h4>Position Information</h4>
  <div class="form-group">
    <label for="PositionTitle">Position Title</label>
    <input type="text" class="form-control" name="ptitle" placeholder="Position Title">
  </div>
  <div class="form-group">
    <label for="Positiondskills">Job Duties/Desired Skills</label>
    <input type="text" class="form-control" name="pjskills" placeholder="Job Duties/Desired Skills">
  </div>
  <div class="form-group">
    <label for="Positiontype">Type of Position</label>
    <input type="text" class="form-control" name="ptype" placeholder="Type of Position
">
  </div>
  <div class="form-group">
    <label for="Positionwh">Work Hours</label>
    <input type="text" class="form-control" name="ptype" placeholder="Work Hours">
  </div>
  <div class="form-group">
    <label for="Positionwh">Work Hours</label>
    <input type="text" class="form-control" name="ptype" placeholder="Work Hours">
  </div>-->
  
  
  
  
  
  
</div>
   @include('includes.footer') 
