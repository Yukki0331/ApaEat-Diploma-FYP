function shuffle(array){
	var currentIndex = array.length, randomIndex;
	
	//while there remains elements to shuffle
	while(0 !== currentIndex){
		
		//pick a remaining element
		randomIndex = Math.floor(Math.random()*currentIndex);
		currentIndex--;
		//swap with current element
		[array[currentIndex], array[randomIndex]] =[
		     array[randomIndex],
			 array[currentIndex],
		];
	}
	return array;
}

function spin(){
	wheel.play();
	const box = document.getElementById("box");
	const element = document.getElementById("mainbox");
	let SelectItem = "";
	
	let FC = shuffle([1890, 2250, 2610]);
	let Chic = shuffle([1850, 2210, 2570]);
	let Pasta = shuffle([1770, 2130, 2490]);
	let Taco = shuffle([1810, 2170, 2530]);
	let Mac = shuffle([1750, 2110, 2470]);
	let Wrap = shuffle([1630, 1990, 2350]);
	let Pizza = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     FC[0],
		 Chic[0],
		 Pasta[0],
		 Taco[0],
		 Mac[0],
		 Wrap[0],
		 Pizza[0],
	]);
	
	if(FC.includes(results[0]))SelectedItem = "Fish & Chips";
	if(Chic.includes(results[0]))SelectedItem = "Chicken Chop";
	if(Pasta.includes(results[0]))SelectedItem = "Pasta";
	if(Taco.includes(results[0]))SelectedItem = "Taco Bell";
	if(Mac.includes(results[0]))SelectedItem = "Mac n Cheese";
	if(Wrap.includes(results[0]))SelectedItem = "Wrap";
	if(Pizza.includes(results[0]))SelectedItem = "Pizza";

	box.style.setProperty("transition", "all ease 5s");
	box.style.transform = "rotate(" + results[0] + "deg)";
	element.classList.remove("animate");
	setTimeout(function(){
		element.classList.add("animate");
	}, 5000);
	
	setTimeout(function(){
		Swal.fire({
			title: 'Woohoo! Lets eat!',
			html: 'Your suggested food is ' + SelectedItem + ' ! ',
			});
	}, 5500);
	
	setTimeout(function(){
		box.style.setProperty("transition", "initial");
		box.style.transform = "rotate(90deg)";
	}, 6000);
}