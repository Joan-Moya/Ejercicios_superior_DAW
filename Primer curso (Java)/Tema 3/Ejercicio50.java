/*
Ejercicio50

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio50
{

		public static void main (String [] args)
	{
		
			int numero;
			String numeroT;
			double parMayor=0;
			double sumaImpar=0;
			int imparesIntroducidos=0;
			double mediaImpares;
			int numerosIntroducidos=0;
			

			
			
			
			do{
			
				System.out.println("Introduce un numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
				numeroT= System.console().readLine();
				numero=Integer.parseInt(numeroT);
				
				if (numero<0) break;
				
				if(numero%2==0){//si el resto de la division entre 2 es 0 quiere decir que es par
				
						if (numero>parMayor) parMayor=numero;

				} else {//sino quiere decir que es impar y tenemos que decir la media de los impares
				
						sumaImpar+=numero;
						imparesIntroducidos++; // esta variable sirve para saber la cantidad de impares que hay, para luego hacer la media
				}
				numerosIntroducidos++;
			}while(numero>=0);//hacer mientras numero sea mayor a 0, porque si introducimos un negativo se acaba el programa
			
			
			mediaImpares=sumaImpar/imparesIntroducidos;//esta es la operacion para hacer la media de los numeros impares.

			System.out.println("La media de los impares es: "+mediaImpares);
			System.out.println("El mayor de los pares es: "+parMayor);
			System.out.println("El total de números introducidos es: "+numerosIntroducidos);
			
			
			
	}
}