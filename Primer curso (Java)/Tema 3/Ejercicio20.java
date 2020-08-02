/*
Ejercicio20

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio20
{

		public static void main (String [] args)
	{
		
			
			double edad;
			double altura;
			double operacionEdad=0;
			double operacionAltura=0;
			int alumnosMayores=0;
			int alumnosAltos=0;
			double division=5;
			int contador=0;
			String edadt;
			String alturat;
			
			
			do{
				System.out.println("Pon la edad y la altura de 1 alumno");
				System.out.println("Edad: "); 
				edadt=System.console().readLine(); 
				edad=Double.parseDouble(edadt); 
				//En esta linea pedimos la edad, y la pasamos a double.

				
				System.out.println(" Y Altura: "); 
				alturat=System.console().readLine(); 
				altura=Double.parseDouble(alturat); 
				//En esta linea pedimos la altura y la pasamos a double
				
				operacionEdad= operacionEdad+edad; //Aqui almacenamos las edades en una variable cada vez que pedmos una.
				operacionAltura= operacionAltura+altura; //Aqui almacenamos las alturas en una variable.
				
				if(edad>18){ //Si edad es mayor a 18...
					
					alumnosMayores++;//le sumamos uno a esta variable para decir que hay una edad mayor a 18
					
				}	
				
				if(altura>1.75){ //Si altura es mayor a 1.75....
					
					alumnosAltos++;//le sumamos uno a esta variable para decir que hay un alumno mas alto que...
					
				}	
			
				contador++;
			}while(contador<=division); 
			
			
			System.out.println("la edad media es de= " +operacionEdad/division);
			System.out.println("la media de altura es de= " +operacionAltura/division);
			System.out.println("Hay " +alumnosMayores+ " alumnos mayores de 18 años");
			System.out.println("Hay " +alumnosAltos+ " alumnos mas altos de 1.75cm");
			
	
		
	}
}