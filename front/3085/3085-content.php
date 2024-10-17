<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3085">
  <div class="container">
    <div class="row">
      <div class="col-md-8 form-container">
        <div class="title">
          <h1>Give Us Your Feedback</h1>
          <div>The most important for us is your feedback.</div>
        </div>
        <form>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="fname">First Name<span class="required">*</span></label>
              <input class="form-control custom-form-control" id="fname" type="text" name="FirstName">
            </div>
          </div>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="lname">Last Name<span class="required">*</span></label>
              <input class="form-control custom-form-control" id="lname" type="text" name="LastName">
            </div>
          </div>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="email">Email<span class="required">*</span></label>
              <input class="form-control custom-form-control" id="email" type="email" name="Email">
            </div>
          </div>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="phone">Phone<span class="required">*</span></label>
              <input class="form-control custom-form-control" id="phone" type="text" name="Phone">
            </div>
          </div>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="datepicker">Date of Visited<span class="required">*</span></label>
              <input class="form-control custom-form-control" id="datepicker" placeholder="Select Date" type="text" name="Date">
            </div>
          </div>
          <div class="col-md-6 custom-col-6">
            <div class="form-group custom-form-group">
              <label for="location">Visited Location<span class="required">*</span></label>
              <select class="form-control custom-form-control" id="location" name="VisitedLocation">
                <option value="Pc &amp; Mac Repair">Pc &amp; Mac Repair</option>
                <option value="Laptop Repair">Laptop Repair</option>
                <option value="Tablet Repair">Tablet Repair</option>
                <option value="Smart Phone Repair">Smart Phone Repair</option>
                <option value="Console Repair">Console Repair</option>
                <option value="Data Recovery">Data Recovery</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 custom-col-12">
            <div class="form-group custom-form-group">
              <label class="col-md-12">How Would You Like to Recommend Us?<span class="required">*</span></label>
              <div class="col-md-12 custom-radio-group">
                <label>
                  <input type="radio" name="Radio" value="Likely" checked="checked">
                  <span>Likely</span>
                </label>
                <label>
                  <input type="radio" name="Radio" value="Very Likely">
                  <span>Very Likely</span>
                </label>
                <label>
                  <input type="radio" name="Radio" value="Fabulous">
                  <span>Fabulous</span>
                </label>
                <label>
                  <input type="radio" name="Radio" value="Unlikely">
                  <span>Unlikely</span>
                </label>
              </div>
            </div>
          </div>

          <div class="col-md-12 custom-col-12">
            <div class="form-group custom-form-group">
              <label for="reason">Your Main Reason to Choose Us<span class="required">*</span></label>
              <textarea class="custom-textarea" cols="40" rows="10" maxlength="2000" id="reason" name="Reason"></textarea>
            </div>
          </div>  

         
          <div class="col-xs-6 btn">
            <button type="submit">Submit feedback</button>
          </div>
          <div class="col-xs-6">
            <div class="note text-right required">
              *REQUIRED FIELD
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>