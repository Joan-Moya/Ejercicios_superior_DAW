/*
Ejercicio53

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio53
{

		public static void main (String [] args)
	{
		
			int numero1;
			int resta;
			int contador;
			String numero1T;
			int factorial=1;
			
			
				System.out.println("Pon Numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
				numero1T= System.console().readLine();
				numero1=Integer.parseInt(numero1T);
				
		contador=numero1;
				
				do{
					
					
					
					factorial*=contador;
					contador--;
				
				}while(contador>0);
				
					
					System.out.println("---------------------------");
					System.out.println("Numero introducido: "+numero1);//imprimimos el numero puesto
					System.out.println("Su factorial: "+factorial);
					
	}
}