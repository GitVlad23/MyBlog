var counter = 0;

function easterFun(el)
{
	counter++;

	if(counter == 5)
	{
		el.innerHTML = "Да харе уже нажимать!";
	}

	console.log(counter);
}