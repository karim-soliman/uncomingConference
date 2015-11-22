function toggle_visibility(id) {
	var e = document.getElementById(id);
	if(e)
	{
		if(e.style.display == 'inline')
		  e.style.display = 'none';
		else
		  e.style.display = 'inline';
	}
	else console.log("element "+id+" not found");
}

window.setInterval(function(){
	toggle_visibility('chairman');
	toggle_visibility('organized');
},20000); 

