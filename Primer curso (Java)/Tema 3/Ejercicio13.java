public class Ejercicio13
{

		public static void main (String [] args)
	{
			int total=0,cont=0,num2;
			String num2t;
		
		
		System.out.println("Pon tu numero: ");
		num2t=System.console().readLine();
		num2=Integer.parseInt(num2t);
		
		do
		{
			
			
			cont++;
			System.out.print(+cont+" + ");
			
		}while(cont<num2);

		
	}
}