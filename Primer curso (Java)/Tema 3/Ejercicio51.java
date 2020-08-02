/*
Ejercicio51

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio51
{

		public static void main (String [] args)
	{
		
			int numero1;
			int numero2;
			int suma=0;
			int numerosIntroducidos=0;
			int media;
			int totalAcumulado;
			String numero1T;
			String numero2T;
			
			
			do{
				
				System.out.println("Pon Numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
				numero1T= System.console().readLine();
				numero1=Integer.parseInt(numero1T);
				
					numerosIntroducidos++;//hemos introducido un numero, entonces le sumamos +1
				
						System.out.println("Pon Numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
						numero2T= System.console().readLine();
						numero2=Integer.parseInt(numero2T);
					
								numerosIntroducidos++;//hemos introducido un numero, entonces le sumamos +1
					
									suma=suma+numero1+numero2; //esta operacion es para hacer la suma de los numeros introducidos
									
										media=suma/numerosIntroducidos;//Esto nos dice la media de los numeros
										
											totalAcumulado=suma;//Esto nos dira el total de la suma
			}while(suma<10000);
			
				System.out.println("-------------------------------------------");
				System.out.println("Numeros introducidos: "+numerosIntroducidos);
				System.out.println("Media de los numeros: "+media);
				System.out.println("Total acumulado: "+totalAcumulado);
				System.out.println("-------------------------------------------");
			
			
	}
}