/*
Ejercicio52

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio52
{

		public static void main (String [] args)
	{
		
			int numero1;
			int numeroInicial=1;
			int contador=0;
			String numero1T;
			
				System.out.println("Pon Numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
				numero1T= System.console().readLine();
				numero1=Integer.parseInt(numero1T);
			
					System.out.println(numeroInicial);//imprimimos el uno
			do{
				
				numeroInicial=numeroInicial+2;
				
				System.out.println(numeroInicial);
				
				numeroInicial=numeroInicial+1;
			
				
			}while(numeroInicial<numero1);//hacer mientras numeroInicial sea menor a numero1 asi sumara hasta que llegue al tope que es el numero que hemos puesto.
			
				
			
	}
}