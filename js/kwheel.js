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
	
	let JJ = shuffle([1890, 2250, 2610]);
	let B = shuffle([1850, 2210, 2570]);
	let Sam = shuffle([1770, 2130, 2490]);
	let BBQ = shuffle([1810, 2170, 2530]);
	let CD = shuffle([1750, 2110, 2470]);
	let Bulgogi = shuffle([1630, 1990, 2350]);
	let Gimbap = shuffle([1570, 1930, 2290]);
	
	let results = shuffle([
	     JJ[0],
		 B[0],
		 Sam[0],
		 BBQ[0],
		 CD[0],
		 Bulgogi[0],
		 Gimbap[0],
	]);
	
	if(JJ.includes(results[0]))SelectedItem = "Jjajangmyeon";
	if(B.includes(results[0]))SelectedItem = "Bibimbap";
	if(Sam.includes(results[0]))SelectedItem = "Samgyetang";
	if(BBQ.includes(results[0]))SelectedItem = "Korean BBQ";
	if(CD.includes(results[0]))SelectedItem = "Cold Noodle";
	if(Bulgogi.includes(results[0]))SelectedItem = "Bulgogi";
	if(Gimbap.includes(results[0]))SelectedItem = "Gimbap";

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