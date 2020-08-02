/*
Ejercicio44

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio44
{

		public static void main (String [] args)
	{
		
			String numero;//ponemos una variable tipo string
			System.out.println("Pon un numero");//pedimos el numero
			numero=System.console().readLine();//lo introducimos
			System.out.println("El numero introducido tiene "+numero.length()+" digitos.");//unimos el nombre de la variable a length() para que nos diga los digitos de la cadena string
	}
}