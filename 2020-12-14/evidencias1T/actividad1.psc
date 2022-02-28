Algoritmo Actividad1
	//Muestra un mensaje para cada ciudad usando (switch case)
	
	//declaración de variables
	Definir ciudad Como Caracter
	
	//asignación de valores
	Escribir "Dime ula ciudad a probar"
	Leer ciudad
	ciudad<-Minusculas(ciudad)
	
	//condicional con según - switch case
	//no importa si la ciudad está en matúsculas o minus
	
	//si es madrid o móstoles saca el mismo mensaje
	
	Segun ciudad Hacer
		Caso "madrid" O "móstoles": Escribir "Bienvenido a Madrid"
		Caso "sevilla": Escribir "Bienvenido a Sevilla"
		Caso "málaga": Escribir "Bienvenido a Málaga"
		Caso "córdoba": Escribir "Bienvenido a Córdoba"
		De Otro Modo:
			Escribir "Esa ciudad no sirve"
	FinSegun
	
	
	
FinAlgoritmo
