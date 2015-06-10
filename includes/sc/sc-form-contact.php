<div id="form3" class="form3 formhide">
 <h2>Contact</h2>
 <div class="desc-lg">
  Please contact our Sole Commerce show team members, <a href="mailto:bpina@advanstar.com?subject=Sole Commerce Contact Form">Belinda Pina</a>, Sales Director, or <a href="mailto:sbarbosa@advanstar.com?subject=Sole Commerce Contact Form">Sharon Barbosa</a>, Sales Manager. You can also fill out the form below and we will respond within 24 business hours, Monday through Friday.
</div>
<div class="module-content">
  <div id="contact_form">
    <form id="contactForm" method="post" action="../bin/contactForm.php" class="form">
      <fieldset>
        <div class="formcol-l" >
          <input type="hidden" class="showName" name="showName" value="SOLE"> 
          <input type="text" name="fullName" size="30" value="Full Name" class="fullName text-input required" tabindex="601"><br>
          <br>
          <div class="contactCompanyPhone">
            <input type="text" name="companyName"  size="30" value="Company Name" class="contactCompanyName text-input required" tabindex="603"><br>
            <br>
            <input type="text" name="contactPhone" size="30" value="Contact Phone" class="contactPhone2 text-input required" tabindex="604">
          </div> 

        </div>
        <div class="formcol-r" >
          <select name="InquiryType" class="inquiry text-input required" tabindex="602">
            <option value="NONE" selected="selected">INQUIRY TYPE</option>
            <option value="PRESS">PRESS</option>
            <option value="BUYER">BUYER</option>
            <option value="ACCOUNTING">ACCOUNTING</option>
            <option value="OPERATIONS">OPERATIONS</option>
            <option value="SOLE">SOLE COMMERCE SHOW TEAM</option>
          </select><br>
          <input type="text" name="contactEmail" size="30" value="Contact Email" class="contactEmail2 text-input email" tabindex="605">
        </div>

        <div class="form-bottom">
          <textarea name="comments" cols="27" rows="5" value="" class="comments text-input required" tabindex="606">Comments
          </textarea><br>
          <br>
        </div>
        <input type="submit" name="submit" class="button" id="contactForm_button" value="Submit" tabindex="607">
        <div class="captcha">
          <div class="enkCaptcha" id="scContactFormCaptcha"></div>
        </div>

      </fieldset>
      <div class="form_message"></div>
    </form>

  </div>
  <br>

  </div>

</div>