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
	
	let TP = shuffle([1890, 2250, 2610]);
	let Ramen = shuffle([1850, 2210, 2570]);
	let Oden = shuffle([1770, 2130, 2490]);
	let YK = shuffle([1810, 2170, 2530]);
	let Ton = shuffle([1750, 2110, 2470]);
	let Sushi = shuffle([1630, 1990, 2350]);
	let K = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     TP[0],
		 Ramen[0],
		 Oden[0],
		 YK[0],
		 Ton[0],
		 Sushi[0],
		 K[0],
	]);
	
	if(TP.includes(results[0]))SelectedItem = "Teppanyaki";
	if(Ramen.includes(results[0]))SelectedItem = "Ramen";
	if(Oden.includes(results[0]))SelectedItem = "Oden";
	if(YK.includes(results[0]))SelectedItem = "Yakiniku";
	if(Ton.includes(results[0]))SelectedItem = "Tonkatsu";
	if(Sushi.includes(results[0]))SelectedItem = "Sushi";
	if(K.includes(results[0]))SelectedItem = "Kaarage";

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