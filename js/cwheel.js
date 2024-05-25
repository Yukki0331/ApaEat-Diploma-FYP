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
	
	let SC = shuffle([1890, 2250, 2610]);
	let HM = shuffle([1850, 2210, 2570]);
	let WM = shuffle([1770, 2130, 2490]);
	let CR = shuffle([1810, 2170, 2530]);
	let KPC = shuffle([1750, 2110, 2470]);
	let DS = shuffle([1630, 1990, 2350]);
	let FR = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     SC[0],
		 HM[0],
		 WM[0],
		 CR[0],
		 KPC[0],
		 DS[0],
		 FR[0],
	]);
	
	if(SC.includes(results[0]))SelectedItem = "Sweet & Sour Chicken";
	if(HM.includes(results[0]))SelectedItem = "Hakka Mee";
	if(WM.includes(results[0]))SelectedItem = "Wonton Mee";
	if(CR.includes(results[0]))SelectedItem = "Char Siu Rice";
	if(KPC.includes(results[0]))SelectedItem = "Kung Pao Chicken";
	if(DS.includes(results[0]))SelectedItem = "Dim Sum";
	if(FR.includes(results[0]))SelectedItem = "Fried Rice";

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