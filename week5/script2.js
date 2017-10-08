function clickMe(){
	console.log("alala");
	console.log(event.target.src);
	let i = document.querySelector("img");
	i.src = (event.target.src);
  
}
document.querySelector("#carousel").addEventListener('click', clickMe);
