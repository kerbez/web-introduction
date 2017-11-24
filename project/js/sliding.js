let cl = false;
function mouseOver(event){
	let p = event.currentTarget.innerHTML;
	if(p == "-"){
		cl = true;
	}
	console.log(event.currentTarget);
	if(cl == false){
		let sm = event.currentTarget.parentNode.childNodes[5];
		let cat = event.currentTarget.parentNode.childNodes[1].innerHTML;
		console.log(cat);
		let data = new FormData();
		data.append("data", cat);
		fetch("funs/sliding.php", {
			method: "POST",
			body: data
		}).then(function(response){
			return response.json().then(function(response){
				console.log(response);
				for(let i of response){
					let h = document.createElement("a");
					h.innerHTML = i[1];
					h.style.background="#fff";
					h.onmouseover = function() {
						this.style.background = "gray";
						this.style.color = "#fff";
					}
					h.onmouseout = function() {
						this.style.background = "#fff";
						this.style.color = "#000000";
					}
					h.href = "jewel.php?id=" + i[0];
					h.style.zIndex = 1;
					sm.appendChild(h);
				}
			})
		})
		event.currentTarget.innerHTML = '-';
	}
	else{
		event.currentTarget.parentNode.childNodes[5].innerHTML = "";
		event.currentTarget.innerHTML = '+';
	}
	
}
function mouseOut(event){
	console.log(event.currentTarget);
	event.currentTarget.innerHTML = "";	
	/*for(let i = 0; i < sm.lenth; i++){

		sm.removeChild(sm.childNode[0]);
	}*/
}
for(let i = 0; i <= 3; i++){
	//console.log(document.getElementsByClassName("menu_cat")[i]);
	document.getElementsByClassName("p")[i].addEventListener("click", mouseOver);
	//document.getElementsByClassName("sliding_menu")[i].addEventListener("mouseout", mouseOut);
}

