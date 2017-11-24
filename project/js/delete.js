function del(event) {
	let n = event.currentTarget.parentNode;
	let id = event.currentTarget.parentNode.childNodes[event.currentTarget.parentNode.childNodes.length - 2].innerHTML;
	let data = new FormData();
	data.append("data", id);
	fetch("funs/del.php",{
		method: "POST",
		body: data
	}).then(function(response){
		return response.text().then(function(response){
			if(response == "1") {
				n.style.display = "none";
			}
		})
	})
}

let nodes = document.getElementsByClassName("del");
for(let i of nodes){
	i.addEventListener("click", del);
}
