Algoritmo contraseña
	//Si la palabra introducida tiene menos de 6 caracteres, 
	//te indica que la contraseña es débil
	Definir clave Como Caracter
	Escribir "Dime una contraseña"
	Leer clave
	
	Si Longitud(clave)<=6 Entonces
		Escribir "La contraseña es débil"
	SiNo
		Escribir "Contraseña correcta"
	FinSi
	
FinAlgoritmo
