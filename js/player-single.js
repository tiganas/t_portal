$(document).ready(function(){
	

	$("video").attr("src",$(this).attr('href'));

		var myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_N",
		cssSelectorAncestor: "#jp_container_N"
	}, [
				{
					title:$(this).parent().parent().find("h2").text(),
					artist:"",
					webmv: $(this).attr('href'),
					poster:""
				},
	], {
		playlistOptions: {
			enableRemoveControls: true
		},
		swfPath: "js",
		supplied: "webmv, ogv, m4v, oga, mp3",
		smoothPlayBar: true,
		keyEnabled: true,
		audioFullScreen: true,
	});
	
	$("#jp_container_N").fadeIn('slow',function(){
		$("body").find('.jp-play').click();
		
		
	});
	
	
	
	$('#jp_close').bind('click', function(){
		$("#jp_container_N").fadeOut('slow');
		$(".jp-stop").click();
		return false;
  });
  
  
  
  
  
  
	
	
	// The next/previous commands
	$("#playlist-next").click(function() {
		myPlaylist.next();
	});
	$("#playlist-previous").click(function() {
		myPlaylist.previous();
	});
	// The pause command
	$("#playlist-pause").click(function() {
		myPlaylist.pause();
	});
	
	
});