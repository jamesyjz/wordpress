
$( document ).ready( function () {

	$('#sidebar .widget li a').on('mouseover', function(){
		$(this).animate({
			paddingLeft : '10px'
		},500);
	});
	$('#sidebar .widget li a').on('mouseout', function(){
		$(this).animate({
			paddingLeft : '0'
		},500);
	});

});

