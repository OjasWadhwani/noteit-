$("#note1").focus(function()
	{
		$(span).css("display","inline");
		$(span).css("display","none");
	}).blur(function()
	{
		$(span).css("display","none");
		$(span).css("display","block");
	});
console.log("I'M Working!!");