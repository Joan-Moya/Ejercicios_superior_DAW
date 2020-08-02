/*
Ejercicio45

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio45
{

		public static void main (String [] args)
	{
		
			int numero;
			int contador1=0;
			int contador2=0;
			String numeroT;
			//VARIABLES
			
			System.out.println("Pon un numero: ");//introducimos un numeor y lo pasamos a int
			numeroT=System.console().readLine();
			numero=Integer.parseInt(numeroT);
			
			System.out.println("-----CUADRADO---- ");
			do{
				numero=numero*2;
				System.out.println(""+numero+"");//Aqui calculamos el cuadrado del numero introducido
				contador1++;
			}while(contador1<5);
			System.out.println("-----CUBO-----");
			do{
				numero=numero*3;
				System.out.println(""+numero+"");//Aqui calculamos el cubo del numero introducido
				contador2++;
			}while(contador2<5);
			
	}
}