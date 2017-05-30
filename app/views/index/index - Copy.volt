<div class="page-header">
    <h1>shahid!</h1>
</div>

<div class="row">
<form>
<div class="row">
<div class="col-sm-12">
<div class="col-sm-6">
<label>Description</label><textarea id="error_description" name="error_description"></textarea>
</div>
<div class="col-sm-6">
  <label for="site_area">Where is the problem occuring?
  <select id="site_area" name="site_area">
  	<option value="home_page">Home Page</option>
   	<option value="payment_page">Payments Page</option>
    <option value="contact_page">Contact Page</option>
    <option value="blackbizui">Back Office</option>
<option value="listing_page">In a listing</option>
<option value="listing_group">Listing Group</option>
    <option value="uncategorized">Other</option>
  </select></label>
</div>
</div>
</div>
  <label for="operating_system">What operating system?
  <select id="operating_system" name="operating_system">
  	<option value="macintosh">Mac OS</option>
   	<option value="windows_10">Windows 10</option>
   	<option value="windows_8">Windows 8</option>
  	<option value="windows_7">Windows 7</option>
    <option value="linux">Linux</option>
    <option value="ubuntu">Ubuntu</option>
  </select></label>

  <label for="user_agent">What web browser?
  <select id="user_agent" name="user_agent">
  	<option value="safari">Safari</option>
   	<option value="explorer">Internet Exploror</option>
   	<option value="microsoft_edge">Micorsoft Edge</option>
  	<option value="google">Google Chrome</option>
    <option value="mozilla">Mozilla Firefox</option>
    <option value="opera">Opera</option>
    <option value="dolphin">Dolphin</option>
  </select></label>

  <label for="html_link">Please provide a link
  <input type="text" name="html_link" id="html_link" /></label>

  <label for="error_message">Please provide the error message if available.
  <input type="text" name="error_message" id="error_message" /></label>

  <label for="submission_date">
  <input id="hidden" name="submission_date" value="<?=date("M j, Y - g:i"); ?>" /></label>

  <input type="submit" value="Please Review">
</form>
</div>