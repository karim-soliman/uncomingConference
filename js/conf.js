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
function initHomePage()
{
window.addEventListener("resize", function(e) {
	var icntse=document.getElementById("icntse");
      	var items= document.getElementsByClassName('navmenuitem');
	if(window.innerWidth<1000)
	{
		if(window.innerWidth>800)
		{
			icntse.style.letterSpacing='0.125em';
			for(i=0; i<items.length; i++) {
				items[i].style.fontSize='1.5em';
			}
		}
		else
		{
			icntse.style.letterSpacing="0em";
			for(i=0; i<items.length; i++) {
				items[i].style.fontSize='1em';
			}
		}
	}
	else 
	{
		icntse.style.letterSpacing='0.5em';
		for(i=0; i<items.length; i++) {
			items[i].style.fontSize='2em';
		}
	}
});

window.setInterval(function(){
	toggle_visibility('chairman');
	toggle_visibility('organized');
},20000); 
}
