/*Ejercicio15

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio15
{

		public static void main (String [] args)
	{
			int total=0;
			int num2;
			int contador=0;
			int veces=0;
			String num2t;
		
		
		
		do
		{
			
			System.out.println("Pon numero: ");
		num2t=System.console().readLine();
		num2=Integer.parseInt(num2t);
		
			total=total+num2;
			veces++;
			
		}while(veces<15);
		
		System.out.println("La suma total es de: "+total);
		
	}
}