window.addEventListener("resize", function(e) {
	var icntse=document.getElementById("icntse");
	if(window.innerWidth<1000)
	{
		icntse.style.letterSpacing='0.125em';
		if(window.innerWidth<800)
			icntse.style.letterSpacing="0em";
	}
	else icntse.style.letterSpacing='0.5em';
});
