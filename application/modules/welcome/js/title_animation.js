$(document).ready(function(){
	var title = "SynIgniter!                                                                     ";
	var position = 0;

	function titleAnimation () {
		var content = $('.title');

		if (title.length > content.html().length) {
			content.html(
				title.substring(0,content.html().length+1)
			);
		}
		else {
			content.html('');
		}
		
	}

	setInterval(function(){titleAnimation()}, 80);
});