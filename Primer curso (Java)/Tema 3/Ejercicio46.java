/*
Ejercicio46

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio46
{

		public static void main (String [] args)
	{
		
			int base;
			int operacion;
			int exponente;
			int contador=0;
			String baseT;
			String exponenteT;
			//VARIABLES
			
			System.out.println("-----CALCULO DE UNA POTENCIA----- ");
			System.out.println("--------------------------------- ");
			System.out.println("Introduce la base: ");//introducimos la base y la pasamos a int
			baseT=System.console().readLine();
			base=Integer.parseInt(baseT);
				System.out.println("Introduce el exponente: ");//introducimos el exponente y lo pasamos a int
				exponenteT=System.console().readLine();
				exponente=Integer.parseInt(exponenteT);
			
			do{
				operacion=base*base;//calculamos base por base las veces que hemos puesto en el exponente (como enta puesto en el while)
				contador++;
			}while(contador<exponente);
				System.out.println("---------- ");
				System.out.println("El resultado es:"+operacion);
			
	}
}