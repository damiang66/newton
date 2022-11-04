// realizamos una fiesta si sos mayor de 18 pasas y si sos el primero despues de las 2 pasas gratis
let free =false;

const validarcliente = (time)=>{
	let edad = prompt("cual es tu edad");
	if (edad > 18) {
		if (time>=2 && time < 7 && free == false){
			alert("podes pasar gratis");
			free = true;
		} else{
			alert("podes pasar pero tenes que pagar");
		}	
		
	}else {
			alert("prohibida la entrada a menores");
		}
	}

validarcliente(23)
validarcliente(24)
validarcliente(1)
validarcliente(2)
validarcliente(5)
