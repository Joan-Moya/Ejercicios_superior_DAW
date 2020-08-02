public class Ejercicio9
{

		public static void main (String [] args)
	{
		String num1t;
		int num1;
		int contador=0;
		do
		{
			
			System.out.println("Pon un numero: ");
		num1t=System.console().readLine();
		num1=Integer.parseInt(num1t);
		
		contador++;
			
			

	}while(num1>=0);
	System.out.println("Has puesto: "+contador+"Numeros");
	
	}
	
}