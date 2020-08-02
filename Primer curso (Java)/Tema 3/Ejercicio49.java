/*
Ejercicio49

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio49
{

		public static void main (String [] args)
	{
		
			int numero1;
			int numero2;
			int numeroMayor;
			int numeroMenor;
			int numeroAlreves=0;
			String numero1T;
			String numero2T;
			
			System.out.println("Pon el primer numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
			numero1T= System.console().readLine();
			numero1=Integer.parseInt(numero1T);
			
			System.out.println("Pon el primer numero: ");//Pedimos el numero por pantalla y lo pasamos a int.
			numero2T= System.console().readLine();
			numero2=Integer.parseInt(numero2T);
			
			if(numero1<numero2){
				numeroMenor=numero1; //en caso de que el numero 1 sea mas grande, ponemos el numero pequeño en otra variable y el mas grande ne otra variabe, es decir, le cambiamos el sentido
				numeroMayor=numero2;
				
			}else{
				numeroMenor=numero2;
				numeroMayor=numero1;
			}
			
			do{
				numeroMenor=numeroMenor+7;
				System.out.println(numeroMenor);//si el numero 1 es mas pequeño que el otro le vamos sumando +7 hasta que no sea mas pequeño
			}while(numeroMenor<numeroMayor);
			
			
			
			
			
	}
}