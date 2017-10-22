
function strike(event) {
	const b = event.currentTarget;
	b.dataset.status = 'done';
}

let tasks = document.querySelector("#tasks").childNodes;

for(let i = 1 ; i < tasks.length; i += 2) { 
	tasks[i].addEventListener("click", strike);
}