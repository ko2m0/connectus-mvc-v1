@extends('layout')

@section('content')
        <!-- START OF CONNECTUS APP -->
        <main>
            <div class="container">
                <div class="container-flex">
                    <div class="svgProfileMask">
                        <svg viewBox="0 0 200 300" width="70" height="100">
                            <defs>
                                <clipPath id="clip">
                                    <circle cx="100" cy="100" r="100" />
                                </clipPath>
                            </defs>
                            <image height="70%" preserveAspectRatio="xMinYMin slice" width="100%"
                                xlink:href="profile_pic"
                                clip-path="url(#clip)" />
                        </svg>
        
                    </div>
                    <div class="flexxer flexxer-column align-start just-start" style="padding: 0 10px">
                        <h3 class="unuscolor-txt" style="margin-bottom: 2px">profile_name</h3>
                        <h5 class="trescolor-txt">profile_job</h5>
                    </div>
                    <div class="flexxer wrapit align-center just-center" style="padding: 10px 0">
                        <a href="profile_ws" class="ws-header2" target="_blank"></a>
                        <div class="clear"></div>
                    </div>
    
                </div>
    
                <div class="clear"></div>
            </div>
            <!-- -->
            <div class="container">
                <div class="one-third">
                <a href="sms:user_phonenumber">   
                <!--<a href="https://wa.me//?text=Hello%20I%20would%20like%20to%20contact%20you">-->
                        <div class="k-btn">
                            <img src="https://connextusnow.com/images/svg/msg_icon.svg" alt="Message">
                        </div>
                        <p class="center-text uppercase unuscolor-txt bold">Message</p>
                    </a>
                </div>
                <div class="one-third">
                    <div class="k-btn" id="MeetBtn">
                        <img src="/images/svg/meet_icon.svg" alt="Meeting">
                    </div>
                    <p class="center-text uppercase unuscolor-txt bold">Meeting</p>
                </div>
                <div class="one-third last-column">
                        <div class="k-btn" id="ReferBtn">
                            <img src="/images/svg/refer_icon.svg" alt="Referral">
                        </div>
                    <p class="center-text uppercase unuscolor-txt bold">Referral</p>
                </div>
                <div class="clear"></div>
            </div>
            <!-- -->
            <div class="container">
                <div>
            <a href="tel:user_phonenumber" class="button-big duo-bg phone-btn">
            <img src="http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png" alt="" width="45">
            CALL</a>
                </div>
    
                <div class="clear"></div>
            </div>
            <!-- -->
            <div class="container ">
                <div class="flexxer just-around align-center">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=card.connextusnow.com%2F" target="_blank"
                        class="">
                        <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_linkedinLogo.svg"
                            alt="Linkedin" width="20px">
                    </a>
                    <a href="profile_sm2" target="_blank" class="">
                        <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_instagramLogo.svg" alt=""
                            width="20px">
                    </a>
                    <a href="https://www.facebook.com/sharer.php?u=card.connextusnow.com%2F"
                        target="_blank" class="">
                        <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_facebookLogo.svg" alt=""
                            width="20px">
                    </a>
                    <a href="https://twitter.com/intent/tweet?text=ConneXtusisagreattooltomeetbusinessaquantancies!&url=alt.connextusnow.com" target="_blank">
                        <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_twitterLogo.svg" alt=""
                            width="25px">
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <!-- -->
        </main>
            <!-- END OF CONNECTUS APP -->
        <div>
            <h3>
                {{$guitar['name']}}
            </h3>
            <ul>
                <li>
                    <p>Made by: {{$guitar['brand']}}</p>
                </li>
                <li>
                    <p>Year made: {{$guitar['year_made']}}</p>
                </li>
            </ul>
        </div>
        

@endsection

@section('title', $guitar['name'])


@section('scripts')
<script>
    // Get the modal
    var modalMeet = document.getElementById("ModalMeet");
    var modalRefer = document.getElementById("ModalRefer");

    // Get the button that opens the modal
    var btn = document.getElementById("MeetBtn");
    var btn2 = document.getElementById("ReferBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close2")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modalMeet.style.display = "block";
    }
    btn2.onclick = function () {
        modalRefer.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modalMeet.style.display = "none";
    }

    span2.onclick = function () {
        modalRefer.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modalMeet) {
            modalMeet.style.display = "none";
        }
    }

    window.onclick = function (event) {
        if (event.target == modalRefer) {
            modalRefer.style.display = "none";
        }
    }
</script>
@endsection

