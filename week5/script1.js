function clickMe(){
	const s11 = document.querySelector("#s11");
	const s12 = document.querySelector("#s12");
	const s13 = document.querySelector("#s13");
	const s21 = document.querySelector("#s21");
	const s22 = document.querySelector("#s22");
	const s23 = document.querySelector("#s23");
	const s31 = document.querySelector("#s31");
	const s32 = document.querySelector("#s32");
	const s33 = document.querySelector("#s33");
	const det = document.querySelector("#result");
	let d = parseInt(s11.value) * parseInt(s22.value) * parseInt(s33.value) + parseInt(s12.value)*parseInt(s23.value)*parseInt(s31.value) + parseInt(s13.value) * parseInt(s21.value)*parseInt(s32.value) - (parseInt(s31.value)* parseInt(s22.value) * parseInt(s13.value) + parseInt(s32.value)* parseInt(s23.value)* parseInt(s11.value) +parseInt(s33.value)* parseInt(s21.value)* parseInt(s12.value));
	det.innerHTML = d;
	console.log("here");
	console.log(d);
}
document.querySelector("#determinant").addEventListener("click", clickMe);