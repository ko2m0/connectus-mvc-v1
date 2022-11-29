
 <!-- INFO & CLIENTS Modal -->
 <div id="ModalInfo" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close3 close">&times;</span>
            <h2 class="unuscolor-txt">About Me</h2>
        </div>
        <div class="decoration"></div>
        <div class="modal-body">
            <div class="container P-2vh">
                <h4>
                    {{$bandb_profile['profile_about']}}
                </h4>
                <div class="clear"></div>
            </div>
            <div class="decoration"></div>
            <div class="container P-2vh">
                <h4 class="caps unuscolor-txt">Some of my Clients</h4>
            <ul class="gallery">
                <li><a class="" title="Client1"><img src="{{$bandb_profile['profile_client_img1']}}" alt="img" /></a>
                </li>
                <li><a class="" title="Client2"><img src="{{$bandb_profile['profile_client_img2']}}" alt="img" /></a>
                </li>
                <li><a class="" title="Client3"><img src="{{$bandb_profile['profile_client_img3']}}" alt="img" /></a>
                </li>
                <li><a class="" title="Client4"><img src="{{$bandb_profile['profile_client_img4']}}" alt="img" /></a>
                </li>
            </ul>
            <div class="clear"></div>
            </div> 
        </div>
        <div class="modal-footer">
            <h3>&nbsp;</h3>
        </div>
    </div>
    
    </div>