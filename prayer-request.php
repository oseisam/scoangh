	<div class="container ">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Prayer Request</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form role="form" id="feedbackForm" class="text-center">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
				
      <div class="form-group">
        <label for="country">Country</label>
      </div>
      <div class="">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
              <div class="form-group">
                <label for="message">Prayer request</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
            </form>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>