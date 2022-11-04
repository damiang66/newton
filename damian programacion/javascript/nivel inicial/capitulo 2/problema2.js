// alumnos en una clase
let cantidad = prompt("cuantos alumnos son");
let alumnosTotales=[];
for(i=0; i < cantidad;i++){
	alumnosTotales[i]= [prompt("nombre del alumno"+(i+1)),0];
}
const tamarAsistencia=(nombre,p)=>{
	let presencia = prompt(nombre);
	if (presencia == "p" || presencia == "P"){
		alumnosTotales[i][1]++;
	}
}

for (i=0; i < 30; i++){
	for (alumnos in alumnosTotales){
		 tomarAsistencia (alumnosTotales[alumnos][0],alumnos);
	}
}
for (alumnos in alumnosTotales){
let resultado = `${alumnosTotales[alumnos][0]}<br>
_________presentes: ${alumnosTotales[alumnos][1]}<br>
_________ausentes: ${30-alumnosTotales[alumnos[1]]}  `;
}
if (30-alumnosTotales[alumnos][1] > 18){
	resultado = " reprobado por insasistencias"
}
else {
	resultado += "<br> <br>";
}
