/*
Ejercicio24

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio24
{

		public static void main (String [] args)
	{
		
			
			
			int contadorNotasAprobadas=0;
			int alumnosSuspendidos=0; //esta variable guarda la cantidad de notas que son menores a 5
			int alumnosAprobados=0; //esta variable guarda la cantidad de notas que son mayores a 5
			int notasIntroducidas=0; //Esta variable se sumara cuando pongamos una nota con el tope de 6 notas.
			int nota;
			String notaT;
				
			do{
				System.out.println("Pon una nota: ");
				notaT=System.console().readLine();
				nota=Integer.parseInt(notaT);
					if (nota<5){
						alumnosSuspendidos++; //Este if dice que si hay una nota menor a 5, se sume +1 para saber cuantos alumnos estan suspendidos
					}else{
						alumnosAprobados++; //Sino si la nota es mas que 5 le sumamos 1 a lo alumnos aprobados para saber cuantos hay aprobados al final
						}
					notasIntroducidas++;
				}while(notasIntroducidas<=6); 
				System.out.println("-------------------------------------------");
				System.out.println("-Alumnos Aprobados: "+alumnosAprobados);
				System.out.println("-Alumnos Suspendidos: "+alumnosSuspendidos);
				System.out.println("-------------------------------------------");	
	}
}