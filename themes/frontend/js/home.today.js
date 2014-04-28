$(document).ready(function(){
        $(window).resize(function() {
            $('body').height($(window).height());
        });
        
        $('body').height($(window).height());
	var current_trailer = $("#current-trailer-url").val();
	
        
        $(".jp-video-play").click(function(){
            $("#jquery_jplayer_N").jPlayer('play');
        });
        
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };
        if( !isMobile.any() ) {var autoplay = 'play';}
        else {var autoplay = ''; };

	$("#jquery_jplayer_N").jPlayer({
                playlistOptions: {
			enableRemoveControls: true,
			autoPlay:true,
		},
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Film Trailer",
				m4v: current_trailer,
				ogv: current_trailer,
				webmv: current_trailer,
				poster: ""
			}).jPlayer(autoplay);
                        
                        $('body').height($(window).height());
                        
                        if( isMobile.any() ) {$(".jp-video-play").click();}
		},
		play: function() { // To avoid multiple jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
                ended : function(){
                    location.reload();
                 },
		swfPath: "/js/player",
		supplied: "webmv, ogv, m4v",
		globalVolume: true,
		smoothPlayBar: true,
		keyEnabled: true,
                
	});
	
});