<!-- Refer Modal -->
<div id="ModalRefer" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close2 close">&times;</span>
        <h2 class="unuscolor-txt">Referral</h2>
    </div>
    <div class="decoration"></div>
    <div class="modal-body">
        <div class="container no-bottom">
            <div class="contact-form no-bottom"> 
                <!--
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="big-notification green-notification">
                        <h3 class="uppercase">Message Sent </h3>
                        <a href="#" class="close-big-notification">x</a>
                        <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                    </div>
                </div>
                        -->
            
                <form action="/php/refer_db.php" method="post" class="referralForm" id="referralForm">
                    <fieldset>
                        <!-- 
                        <div class="formValidationError" id="contactNameFieldError">
                            <div class="static-notification-red tap-dismiss-notification">
                                <p class="center-text uppercase">Name is required!</p>
                            </div>
                        </div>             
                        <div class="formValidationError" id="contactEmailFieldError">
                            <div class="static-notification-red tap-dismiss-notification">
                                <p class="center-text uppercase">Mail address required!</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactEmailFieldError2">
                            <div class="static-notification-red tap-dismiss-notification">
                                <p class="center-text uppercase">Mail address must be valid!</p>
                            </div>
                        </div> 
                        <div class="formValidationError" id="contactMessageTextareaError">
                            <div class="static-notification-red tap-dismiss-notification">
                                <p class="center-text uppercase">Message field is empty!</p>
                            </div>
                        </div>   
                        -->
                        <div class="formFieldWrap">
                            <label class="field-title referralToNameField" for="referraltoNameField">Referral to First and Last Name:<span> (required)</span></label>
                            <input type="text" name="referralToNameField" value="" class="contactField requiredField" id="referralToNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralToEmailField" for="referralToEmailField">Referral to Email: <span> (required)</span></label>
                            <input type="email" name="referralToEmailField" value="" class="contactField requiredField referralEmailField" id="referralToEmailField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralToPhoneField" for="referralToPhoneField">Referral to Phone number:</label>
                            <input type="tel" name="referralToPhoneField" value="" class="contactField requiredField referralToPhoneField" id="referralToPhoneField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralfromNameField" for="referralFromNameField">Referral from First and Last Name: </label>
                            <input type="text" name="referralFromNameField" value="" class="contactField requiredField" id="referralFromNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralFromEmailField" for="referralFromEmailField">Referral from Email: </label>
                            <input type="text" name="referralFromEmailField" value="" class="contactField requiredField" id="referralFromEmailField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralPriority" for="referralPriority">Choose priority:</label>
                                <select class="contactField" name="referralPriority" id="referralPriority">
                                    <option value="High Priority">High</option>
                                    <option value="Medium Priority">Medium</option>
                                    <option value="Low Priority">Low</option>    
                                </select>
                        </div>
                        
                        <div class="formTextareaWrap">
                            <label class="field-title referralMsgField" for="referralMsgField">Comment: <span>(required)</span></label>
                            <textarea name="referralMsgField" class="contactTextarea requiredField" id="referralMsgField"></textarea>
                        </div>
                        <input type="hidden" id="txtUrl2" name="txtUrl2" value="" />
                        <script>document.getElementById('txtUrl2').value = window.location.href;</script>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button unus-bg contactSubmitButton" id="referralSubmitButton" value="SUBMIT" data-formId="referralForm"/>
                        </div>
                    </fieldset>
                </form>       
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <h3>&nbsp;</h3>
    </div>
</div>

</div>