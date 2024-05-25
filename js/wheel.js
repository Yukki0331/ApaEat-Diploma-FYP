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
	
	let MG = shuffle([1890, 2250, 2610]);
	let WM = shuffle([1850, 2210, 2570]);
	let Laksa = shuffle([1770, 2130, 2490]);
	let CKT = shuffle([1810, 2170, 2530]);
	let Tomyam = shuffle([1750, 2110, 2470]);
	let NK = shuffle([1630, 1990, 2350]);
	let Roti = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     MG[0],
		 WM[0],
		 Laksa[0],
		 CKT[0],
		 Tomyam[0],
		 NK[0],
		 Roti[0],
	]);
	
	if(MG.includes(results[0]))SelectedItem = "Mee Goreng Mamak";
	if(WM.includes(results[0]))SelectedItem = "Wonton Mee";
	if(Laksa.includes(results[0]))SelectedItem = "Curry Laksa";
	if(CKT.includes(results[0]))SelectedItem = "Char Kuey Teow";
	if(Tomyam.includes(results[0]))SelectedItem = "Tomyam MeeHoon";
	if(NK.includes(results[0]))SelectedItem = "Nasi Kandar";
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