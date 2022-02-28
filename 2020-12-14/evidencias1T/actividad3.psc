Algoritmo Actividad3
	//muestra la nómina de un salario bruto superior a 1000 "aleatorio"
	Definir bruto Como Real
	bruto<-Aleatorio(1000,10000)
	Escribir "El salario bruto es ", bruto
	calcularNomina(bruto,5.25)
FinAlgoritmo

SubProceso calcularNomina(bruto,retencion)
	Definir neto Como Real
	
	neto<-bruto-(bruto*retencion/100)-100
	Escribir "Tu salario neto es ", Redon(neto)
	Escribir "La retención es " , (bruto-neto)
FinSubProceso
	