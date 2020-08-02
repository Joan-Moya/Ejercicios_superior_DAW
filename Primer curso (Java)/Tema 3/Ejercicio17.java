/*
Ejercicio17

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio17
{

		public static void main (String [] args)
	{
			int num;
			int factorial=1;
			String numt;
		
	   System.out.println("Pon un numero: ");
		numt=System.console().readLine();
		num=Integer.parseInt(numt);
		
		
		
		
		do{
			
			
			factorial=factorial*num;
			num--;
			
			
		}while(num>0);
		
			System.out.println(+factorial);
		
	}
}