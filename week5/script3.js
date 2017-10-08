function clickMe(){
	const t1 = document.querySelector("#name").value;
	const t2 = document.querySelector("#surname").value;
	const f = document.querySelector("#faculty").value;
	const ta = document.querySelector("#students");



	const tn = document.createElement('td');
	const ts = document.createElement('td');
	const tf = document.createElement('td');
	const tr = document.createElement('tr');
	tn.innerHTML = t1;
	ts.innerHTML = t2;
	tf.innerHTML = "<strong>" + f + "</strong>";
	console.log(tn + " " + ts + " " + tf);
	tr.appendChild(tn);
	tr.appendChild(ts);
	tr.appendChild(tf);
	ta.appendChild(tr);
}
document.querySelector("#addStudent").addEventListener('click', clickMe);