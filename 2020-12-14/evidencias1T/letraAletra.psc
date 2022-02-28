Algoritmo letra
	//Muestra letra a letra la palabra que has introducido. La palabra se puede 
	//considerar como un array
	Escribir "Dime una palabra"
	Leer palabra
	
	Escribir "letra a letra"
	Para x<-1 Hasta Longitud(palabra) Hacer
		Escribir Sin Saltar Subcadena(palabra, x , x)
		Escribir Sin Saltar " "
	FinPara
	Escribir ""
	

FinAlgoritmo
