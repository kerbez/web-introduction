function search() {
	let str = document.querySelector("#search").value;
	let srch = document.querySelector(".search");
	srch.innerHTML = "";
	if(str.length == 0){
		return 0;
	}
	let data = new FormData();
	data.append("data", str);

	fetch("funs/search.php",{
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
				srch.appendChild(h);
			}
		})
	})
}

document.querySelector("#search").addEventListener("keyup", search);