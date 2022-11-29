 <!-- -->
    
        <!-- END OF CONNECTUS APP -->

<!-- Meeting Modal -->
<div id="ModalMeet" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close1 close">&times;</span>
            <h2 class="unuscolor-txt">Meeting</h2>
        </div>
        <div class="decoration"></div>
        <div class="modal-body">
            <div class="contact-form no-bottom">
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="big-notification green-notification">
                        <h3 class="uppercase">Message Sent </h3>
                        <a href="#" class="close-big-notification">x</a>
                        <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank
                            you!</p>
                    </div>
                </div>
    
                <form action="/php/meet_db.php" method="post" class="meetingForm" id="meetingForm">
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
                            <label class="field-title meetingNameField" for="meetingNameField">
                                First and last name:<span> (required)</span></label>
                            <input type="text" name="meetingNameField" value="" placeholder="John Smith" class="contactField requiredField"
                                id="meetingNameField" />
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title meetingEmailField" for="meetingEmailField">Email:
                                <span> (required)</span></label>
                            <input type="email" name="meetingEmailField" value="" placeholder="joe@mycompany.com"
                                class="contactField requiredField requiredEmailField" id="meetingEmailField" />
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title meetingPhoneField" for="meetingPhoneField">Phone
                                Number: </label>
                            <input type="tel" name="meetingPhoneField" value="" placeholder="XXX XXX XX XX"
                                class="contactField requiredField requiredEmailField" id="meetingPhoneField" />
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title meetingDateField" for="meetingDateField">Date you&apos;d like to meet:
                                <span>(required)</span></label>
                            <input type="datetime-local" name="meetingDateField" value=""
                                class="contactField requiredField meetingDateField" id="meetingDateField" />
                        </div>
                        <div class="formTextareaWrap">
                            <label class="field-title meetingMsg" for="meetingMsg">Comment:
                                </label>
                            <textarea name="meetingMsg" class="contactTextarea requiredField"
                                id="meetingMsg"></textarea>
                        </div>
                        <input type="hidden" id="txtUrl" name="txtUrl" value="" />
                        <script>document.getElementById('txtUrl').value = window.location.href;</script>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button unus-bg contactSubmitButton"
                                id="meetingSubmitButton" value="SUBMIT" data-formId="meetingForm"/>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <h3>&nbsp;</h3>
        </div>
    </div>
    
    </div>