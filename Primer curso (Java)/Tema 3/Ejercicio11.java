public class Ejercicio11
{

		public static void main (String [] args)
	{
			int total=0,num2;
			String num2t;
		
		
		do
		{
			
			System.out.println("Pon tu numero: ");
		num2t=System.console().readLine();
		num2=Integer.parseInt(num2t);
		
			total=total+num2;
			
		}while(num2!=0);

		System.out.println("La suma total es de= " +total);
	}
}