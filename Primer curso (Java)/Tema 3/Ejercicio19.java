/*
Ejercicio19

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio19
{

		public static void main (String [] args)
	{
		
			int contador=0;
			double sueldo;
			double sumaSueldos=0;
			double sueldoMayor=0;
			String sueldot;
			
			
			do{
				
				
				System.out.println("Pon el sueldo: ");
				sueldot=System.console().readLine();
				sueldo=Double.parseDouble(sueldot);
				//Pedimos un numero y lo pasamos de string a double
				
				contador++; //le sumamos uno para que le digamos que ya tenemos un sueldo puesto
				
				sumaSueldos= sumaSueldos+sueldo; //ponemos una variable uq ecada vez que pongamos un sueldo lo sume con el siguiente que pongamos
				
				if(sueldo>1000){//Si sueldo es mayor a 1000...
					
						sueldoMayor++; //creamos una varialbe que cada vez que pongamos un sueldo mayor a mil se sume para decir que ya hay un sueldo mayor a mil
				}
				
			}while(contador<=10); //cada vez que se haga el while se suma uno "el contador ya le hemos puesto que es 0"
			
			
			
			System.out.println("La suma de los sueldos es: " +sumaSueldos);
			System.out.println("Se han introducido "+sueldoMayor+" sueldos mayores a 1000 euros");
	
		
	}
}