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
	
	let AM = shuffle([1890, 2250, 2610]);
	let IB = shuffle([1850, 2210, 2570]);
	let RJ = shuffle([1770, 2130, 2490]);
	let AP = shuffle([1810, 2170, 2530]);
	let Bihun = shuffle([1750, 2110, 2470]);
	let ND = shuffle([1630, 1990, 2350]);
	let Kukus = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     AM[0],
		 IB[0],
		 RJ[0],
		 AP[0],
		 Bihun[0],
		 ND[0],
		 Kukus[0],
	]);
	
	if(AM.includes(results[0]))SelectedItem = "Ayam Masak Merah";
	if(IB.includes(results[0]))SelectedItem = "Ikan Bakar";
	if(RJ.includes(results[0]))SelectedItem = "Roti John";
	if(AP.includes(results[0]))SelectedItem = "Asam Pedas";
	if(Bihun.includes(results[0]))SelectedItem = "Bihun Goreng";
	if(ND.includes(results[0]))SelectedItem = "Nasi Dagang";
	if(Kukus.includes(results[0]))SelectedItem = "Nasi Kukus";

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