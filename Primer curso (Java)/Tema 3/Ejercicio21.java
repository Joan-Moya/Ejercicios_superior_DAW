/*
Ejercicio21

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio21
{

		public static void main (String [] args)
	{
		
			
			
			int contador=0;
			int resultado;
			int numero;
			String numerot;
			
			
			System.out.println("Que tabla de multiplicar quieres?: ");
				numerot=System.console().readLine();
				numero=Integer.parseInt(numerot);
				
			do{
				
				
				
				resultado=numero*contador;
				System.out.println(+numero+"X"+contador+"="+resultado);
				
				
				contador++;
			}while(contador<=10); 
			
			
		
			
	
		
	}
}