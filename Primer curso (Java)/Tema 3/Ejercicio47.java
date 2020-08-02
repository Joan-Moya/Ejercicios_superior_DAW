/*
Ejercicio47

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio47
{

		public static void main (String [] args)
	{
		
			int numero;
			int division;
			int i;
			int contadorDivisible=0;
			String numeroT;
			
			System.out.println("Pon el numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
			numeroT= System.console().readLine();
			numero=Integer.parseInt(numeroT);
			
			for(i=1; i<=numero; i++){
				if(numero%i==0){
					contadorDivisible++;
				}
				
			}
			if(contadorDivisible==2){
				System.out.println("El numero es primo");
			}else{
				System.out.println("El numero no es primo");
			}
	}
}