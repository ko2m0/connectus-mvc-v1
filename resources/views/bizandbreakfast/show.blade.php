@extends('card')


@section('content')

    <!-- START OF CONNECTUS APP -->
    <main class="mainSection">
        <div class="mainSectionContent content p-hck">
            <div class="container P-2vh">
                <div class="container-flex">
                    <div class="svgProfileMask" id="InfoBtn">
                        <svg viewBox="0 0 200 300" width="70" height="100">
                        <defs>
                            <clipPath id="clip">
                                <circle cx="100" cy="100" r="100" />
                            </clipPath>
                        </defs>
                        <image height="70%" preserveAspectRatio="xMinYMin slice" width="100%"
                            xlink:href="{{$bandb_profile['profile_pic']}}"
                            clip-path="url(#clip)" />
                    </svg>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" style="position:absolute; top: 0;"  xmlns="https://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g fill="#ff9900"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></g></svg>
    
                </div>
                <div class="flexxer flexxer-column align-start just-start" style="padding: 0 10px">
                    <h3 class="unuscolor-txt" style="margin-bottom: 2px">{{$bandb_profile['profile_name']}}</h3>
                    <h5 class="trescolor-txt">{{$bandb_profile['profile_job']}}</h5>
                </div>
                <div class="flexxer wrapit align-center just-center" style="padding: 10px 0">
                    <a href="{{$bandb_profile['profile_ws']}}" class="ws-header2" target="_blank">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_websiteLogo.svg" alt="Website">
                    </a>
                    <div class="clear"></div>
                </div>

            </div>

            <div class="clear"></div>
        </div>
        <!-- -->
        <div class="container P-2vh">
            <div class="one-third">
            <a href="sms:{{$bandb_profile['profile_phonenumber']}}">   
            <!--<a href="https://wa.me//?text=Hello%20I%20would%20like%20to%20contact%20you">-->
                    <div class="k-btn">
                        <img src="https://www.connectusnw.com/profiles_img/assets/msg_icon.svg" alt="Message">
                    </div>
                    <p class="center-text uppercase unuscolor-txt bold">Message</p>
                </a>
            </div>
            <div class="one-third">
                <div class="k-btn" id="MeetBtn">
                    <img src="https://www.connectusnw.com/profiles_img/assets/meet_icon.svg" alt="Meeting">
                </div>
                <p class="center-text uppercase unuscolor-txt bold">Meeting</p>
            </div>
            <div class="one-third last-column">
                    <div class="k-btn" id="ReferBtn">
                        <img src="https://www.connectusnw.com/profiles_img/assets/refer_icon.svg" alt="Referral">
                    </div>
                <p class="center-text uppercase unuscolor-txt bold">Referral</p>
            </div>
            <div class="clear"></div>
        </div>

        <!-- -->
        <div class="container P-2vh">
            <div>
        <a href="tel:{{$bandb_profile['profile_phonenumber']}}" class="button-big duo-bg phone-btn">
            <div class="flexxer just-center">
                <div class="callbtn_icon">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_call_phoneIcon1.svg" alt="Call" width="30">
                </div>
                <div class="callbtn_icon">
                    <img src="https://www.connectusnw.com/profiles_img/assets/connextus_textlogoW.svg" alt="ConneXtus" width="150">
                </div>
                <div class="callbtn_icon">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_logoSmall_whiteborder1.svg" alt="Logo" width="30" style="border: 2px solid #ffffff; border-radius:5px">
                </div>
            </div>
        </a>
        </div>
            <div class="clear"></div>
        </div>

        <div class="container P-2vh">
            <div class="flexxer just-around align-center">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=card.connextusnow.com%2F" target="_blank"
                    class="">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_linkedinLogo.svg"
                        alt="Linkedin" width="20px">
                </a>
                <a href="" target="_blank" class="">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_instagramLogo.svg" alt="Instagram"
                        width="20px">
                </a>
                <a href="https://www.facebook.com/sharer.php?u=card.connextusnow.com%2F"
                    target="_blank" class="">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_facebookLogo.svg" alt="Facebook"
                        width="20px">
                </a>
                <a href="https://twitter.com/intent/tweet?text=ConneXtusisagreattooltomeetbusinessaquantancies!&url=alt.connextusnow.com" target="_blank">
                    <img src="https://www.connectusnw.com/profiles_img/assets/Connextus_twitterLogo.svg" alt="Twitter"
                        width="25px">
                </a>
                
            </div>
            <div class="clear"></div>
          </div>
         
         </div>
    
    </main>

@endsection


