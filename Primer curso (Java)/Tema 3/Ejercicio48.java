/*
Ejercicio48

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio48
{

		public static void main (String [] args)
	{
		
			int numero;
			int division;
			int numeros;
			int i;
			int contadorDivisible=0;
			int contador=0;
			String numeroT;
			
			System.out.println("Pon el numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
			numeroT= System.console().readLine();
			numero=Integer.parseInt(numeroT);
			
			for(i=1; i<=numero; i++){
				if(numero%i==0){
					contadorDivisible++;
				}
				
			}
			if(contadorDivisible==2){//si se divide solo entre dos numeros quiere decir que es primo
				System.out.println("El numero es primo");
			}else{
				System.out.println("El numero no es primo");
			}
			
			do{
				if(contadorDivisible==2){
				numero=numero+1;
				System.out.println(numero);}
				contador++;
			}while(contador<100);//le sumaremos 100 veces 1  si el numero es primo
	}
}