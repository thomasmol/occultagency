<!-- Only purpose of this file is to generate tailwindcss styling,
since the form plugin in wordpress does not play nicely with tailwind -->
<form action="/" class="justify-center flex gap-4 md:flex-row flex-col">

  <p><label> Artist<br>
      <span class="wpcf7-form-control-wrap" data-name="artist"><input type="text" name="artist" value="angela bakka" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" readonly="readonly" aria-required="true" aria-invalid="false"></span><br>
    </label></p>
  <h2>Contact details</h2>
  <p><label> Message to Agent<br>
      <span class="wpcf7-form-control-wrap" data-name="message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
  <p><label> First name *<br>
      <span class="wpcf7-form-control-wrap" data-name="first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Last name *<br>
      <span class="wpcf7-form-control-wrap" data-name="last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Email address *<br>
      <span class="wpcf7-form-control-wrap" data-name="email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Phone number *<br>
      <span class="wpcf7-form-control-wrap" data-name="phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Organization/Company *<br>
      <span class="wpcf7-form-control-wrap" data-name="organization"><input type="text" name="organization" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Address *<br>
      <span class="wpcf7-form-control-wrap" data-name="address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> City *<br>
      <span class="wpcf7-form-control-wrap" data-name="city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Zip code *<br>
      <span class="wpcf7-form-control-wrap" data-name="zip"><input type="text" name="zip" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <h2>Event details</h2>
  <p><label> Venue Name *<br>
      <span class="wpcf7-form-control-wrap" data-name="venue-name"><input type="text" name="venue-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Venue Capacity *<br>
      <span class="wpcf7-form-control-wrap" data-name="venue-capacity"><input type="number" name="venue-capacity" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Venue Address *<br>
      <span class="wpcf7-form-control-wrap" data-name="venue-address"><input type="text" name="venue-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Venue City *<br>
      <span class="wpcf7-form-control-wrap" data-name="venue-city"><input type="text" name="venue-city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Venue Zip Code *<br>
      <span class="wpcf7-form-control-wrap" data-name="venue-zip"><input type="text" name="venue-zip" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Even name *<br>
      <span class="wpcf7-form-control-wrap" data-name="event"><input type="text" name="event" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Event date *<br>
      <span class="wpcf7-form-control-wrap" data-name="event-date"><input type="date" name="event-date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Confirmed Line Up<br>
      <span class="wpcf7-form-control-wrap" data-name="line-up"><textarea name="line-up" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </label></p>
  <p><label> Ticket Price (in EUR) *<br>
      <span class="wpcf7-form-control-wrap" data-name="ticket-price"><input type="text" name="ticket-price" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Promoter Website / Instagram *<br>
      <span class="wpcf7-form-control-wrap" data-name="promoter-web"><input type="text" name="promoter-web" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Set duration (in minutes) *<br>
      <span class="wpcf7-form-control-wrap" data-name="set-duration"><input type="number" name="set-duration" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false"></span> </label></p>
  <p><label> Budget (in EUR)<br>
      <span class="wpcf7-form-control-wrap" data-name="budget"><input type="text" name="budget" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
  <p><span class="wpcf7-form-control-wrap" data-name="payments"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="payments[]" value="Will pay for travel (flights, train, bus)"><span class="wpcf7-list-item-label">Will pay for travel (flights, train, bus)</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="payments[]" value="Will pay for accommodation"><span class="wpcf7-list-item-label">Will pay for accommodation</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="payments[]" value="Will also pay for ground transportation"><span class="wpcf7-list-item-label">Will also pay for ground transportation</span></label></span></span></span></p>
  <p><input type="submit" value="Request booking" class="btn-primary wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
  <div class="wpcf7-response-output" aria-hidden="true"></div>
</form>