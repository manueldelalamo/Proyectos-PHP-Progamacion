Algoritmo Actividad2
	//Voy a hacerte una pregunta y hasta que no aciertes, te sigo preguntando
	Definir respuesta Como Caracter
	Definir nota Como Entero
	nota<-10
	
	Repetir 
		Escribir "Dime la capital de Chipre"
		Leer respuesta
		respuesta<-Minusculas(respuesta)
		Si respuesta <> "nicosia" Entonces
			nota<-nota-1
		FinSi
	Hasta Que respuesta="nicosia" 
	
	//Mientras respuesta <> "nicosia" Hacer
	//Escribir "Dime la capital de Chipre"
	//Leer respuesta
	//FinMientras
	//	
	Escribir "Has acertado: tu puntuación es ", nota //Concatenar con comas
	
FinAlgoritmo
