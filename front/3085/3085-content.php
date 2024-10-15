<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3085 ">
  <div class="container">
    <div class="row">
      <div class="container">
        <div class="col-md-8">
          <div class="title">
            <h1>Give Us Your Feedback</h1>
            <div>The most important for us is your feedback.</div>
          </div>
          <form>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fname">First Name<span class="required">*</span></label><br>
                <input class="form-control" id="fname" value="" type="text" name="FirstName">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fname">Last Name<span class="required">*</span></label><br>
                <input class="form-control" id="fname" value="" type="text" name="FirstName">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fname">Email<span class="required">*</span></label><br>
                <input class="form-control" id="fname" value="" type="text" name="FirstName">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fname">Phone<span class="required">*</span></label><br>
                <input class="form-control" id="fname" value="" type="text" name="FirstName">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="datepicker">Date of Visited<span class="required">*</span></label><br>
                <input class="form-control is-datepick hasDatepicker" id="datepicker" placeholder="Select Date" value="" type="text" name="Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="location">Visited Location<span class="required">*</span></label><br>
                <span>
                  <select class="form-control" id="location" name="VisitedLocation">
                    <option value="Pc &amp; Mac Repair">Pc &amp; Mac Repair</option>
                    <option value="Laptop Repair">Laptop Repair</option>
                    <option value="Tablet Repair">Tablet Repair</option>
                    <option value="Smart Phone Repair">Smart Phone Repair</option>
                    <option value="Console Repair">Console Repair</option>
                    <option value="Data Recovery">Data Recovery</option>
                  </select>
                </span>
              </div>
            </div>
    
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-md-12">How Would You Like to Recommed Us?<span class="required">*</span></label>
                <div class="col-md-12">
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
            <div class="col-md-12">
              <div class="form-group">
                <label for="reason">Your Main Reason to Choose Us<span class="required">*</span></label><br>
                <span class="" data-name="Reason"><textarea cols="40" rows="10" maxlength="2000" id="reason" name="Reason"></textarea></span>
              </div>
            </div>
            <div class="col-xs-6">
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
</div>
</div>
</div>