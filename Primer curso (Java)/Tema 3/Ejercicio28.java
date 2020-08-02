/*
Ejercicio28

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio28
{

		public static void main (String [] args)
	{
		
			int contador=0;
			String numeroT;
			int numero;
			int multiplos=0;
			int operacion;
			int suspendidos=0;
			//VARIABLES
			
			do{
				System.out.println("Pon un numero : ");//ponemos un numero
				numeroT=System.console().readLine();//introducimos un numero por pantalla
				numero=Integer.parseInt(numeroT);//pasamos el numero introducido a int
				operacion= numero%3;//Calculamos el resto para ver si es multiplo de 3
					if(operacion==0){//si el resto de la division es igual a cero...
					multiplos++; //sumamos uno a multiplo para decir que de los numeros introducidos uno es multiplo
					}
				contador++;
				}while(contador<5);//mientras contador sea menor  a 5 asi nos pide 5 numeros
					
				System.out.println("De los numeros introducidos "+multiplos+" son multiplos de 3" );			
	}
}