function save(){
	let sel = document.querySelector("#select").value;
	let name = document.querySelector("#name").value;
	let mini = document.querySelector("#mini").value;
	let description = document.querySelector("#description").value;
	let telephone = document.querySelector("#telephone").value;
	let price = document.querySelector("#price").value;
	let img = document.querySelector("#upload").value;
	let a =[sel, name, mini, price, description, telephone, img];
	let p = document.querySelector("#p");
	for(let i of a){
		console.log(i);
		if(i == ""){
			p.innerHTML = "You didn't fill correct, try again";
			p.style.color="red";
			return 0;
		}
	}

	let data = new FormData();
	data.append("data", a);
	fetch("funs/load.php", {
		method: "POST",
		body: data
	}).then(function(response){
		return response.text().then(function(response){
			p.innerHTML = response;
			p.style.color = "green";
		})
	})

}



document.querySelector("#save").addEventListener("click", save);