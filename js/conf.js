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
	var chairman=document.getElementById("chairman");
	var organized=document.getElementById("organized");
	if(chairman.style.display=="none")
	{
		chairman.style.display='inline';
		organized.style.display='none';
	}
	else
	{
		chairman.style.display='none';
		organized.style.display='inline';
	}
},20000); 
