Algoritmo Actividad1
	//Muestra un mensaje para cada ciudad usando (switch case)
	
	//declaraci�n de variables
	Definir ciudad Como Caracter
	
	//asignaci�n de valores
	Escribir "Dime ula ciudad a probar"
	Leer ciudad
	ciudad<-Minusculas(ciudad)
	
	//condicional con seg�n - switch case
	//no importa si la ciudad est� en mat�sculas o minus
	
	//si es madrid o m�stoles saca el mismo mensaje
	
	Segun ciudad Hacer
		Caso "madrid" O "m�stoles": Escribir "Bienvenido a Madrid"
		Caso "sevilla": Escribir "Bienvenido a Sevilla"
		Caso "m�laga": Escribir "Bienvenido a M�laga"
		Caso "c�rdoba": Escribir "Bienvenido a C�rdoba"
		De Otro Modo:
			Escribir "Esa ciudad no sirve"
	FinSegun
	
	
	
FinAlgoritmo
