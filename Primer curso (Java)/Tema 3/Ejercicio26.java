/*
Ejercicio26

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio26
{

		public static void main (String [] args)
	{
		
			int contador=0;
			String numeroT;
			double numero;
			int numerosNegativos=0;
			//VARIABLES
			
			do{
				System.out.println("Pon un numero: ");//ponemos un numero
				numeroT=System.console().readLine();//introducimos un numero por pantalla
				numero=Double.parseDouble(numeroT);//pasamos el numero introducido a double
					if(numero<0){//si numero es menor a 0 le sumamos 1 a numerosNegativos para decir que hemos introducido un numero negativo
					numerosNegativos++;
					}
				contador++;
				}while(contador<=10);//mientras contador sea menor o igual a 10 asi nos pide 10 numeros
					
				System.out.println("Numeros negativos introducidos: "+numerosNegativos );			
	}
}