Algoritmo contrase�a
	//Si la palabra introducida tiene menos de 6 caracteres, 
	//te indica que la contrase�a es d�bil
	Definir clave Como Caracter
	Escribir "Dime una contrase�a"
	Leer clave
	
	Si Longitud(clave)<=6 Entonces
		Escribir "La contrase�a es d�bil"
	SiNo
		Escribir "Contrase�a correcta"
	FinSi
	
FinAlgoritmo
