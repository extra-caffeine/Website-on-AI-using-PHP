function on() {
		$('button').on('click', function() {
		$id=(this.id);
		alert($id);
    document.getElementById($id).style.display = "block";
		$('#topa').css({
        'overflow-y': 'hidden',
//		'overflow-x': 'hidden'
	});
	});
}

function off() {
    document.getElementById("overlay").style.display = "none";
    $('#topa').css({
        'overflow-y': 'scroll',
		'overflow-x': 'scroll'
	});
}
function my() {
	$('button').on('click', function() {
		$id=(this.id);
		alert($id);
    document.getElementById($id).style.display = "block";
	    $('#top').css({
        'overflow-y': 'hidden',
//		'overflow-x': 'hidden'
	});
    });
}

function offf() {
	$('.overlay').on('click', function() {
		$id=(this.id);
	
   document.getElementById($id).style.display = "none";
    $('#top').css({
        'overflow-y': 'scroll',
		'overflow-x': 'scroll'
	});
    });
	}
