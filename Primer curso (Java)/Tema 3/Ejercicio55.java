/*
Ejercicio55

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio55
{

		public static void main (String [] args)
	{
		
			int anyo;
			String anyoT;
			
			System.out.println("Pon un año: ");
			anyoT=System.console().readLine();
            anyo=Integer.parseInt(anyoT);
			//Pedimos el año
			
			if((anyo%4==0 ) && (anyo/100!=0) || (anyo%400==0)){
				System.out.println("Este año es bisiesto");
			}else{
				System.out.println("Este año no es bisiesto");
			}
	}
}