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
	
	let BLR = shuffle([1890, 2250, 2610]);
	let B = shuffle([1850, 2210, 2570]);
	let MC = shuffle([1770, 2130, 2490]);
	let CM = shuffle([1810, 2170, 2530]);
	let FHC = shuffle([1750, 2110, 2470]);
	let U = shuffle([1630, 1990, 2350]);
	let Roti = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     BLR[0],
		 B[0],
		 MC[0],
		 CM[0],
		 FHC[0],
		 U[0],
		 Roti[0],
	]);
	
	if(BLR.includes(results[0]))SelectedItem = "Banana Leaf Rice";
	if(B.includes(results[0]))SelectedItem = "Biryani";
	if(MC.includes(results[0]))SelectedItem = "Mutton Curry";
	if(CM.includes(results[0]))SelectedItem = "Chicken Masala";
	if(FHC.includes(results[0]))SelectedItem = "Fish Head Curry";
	if(U.includes(results[0]))SelectedItem = "Uttapam";
	if(Roti.includes(results[0]))SelectedItem = "Roti Canai";

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