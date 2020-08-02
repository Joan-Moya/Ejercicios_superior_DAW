public class Ejercicio12
{

		public static void main (String [] args)
	{
			int total=0,contador=1,num2;
			String num2t;
		
		
		do
		{
			
			System.out.println("Pon tu numero: ");
		num2t=System.console().readLine();
		num2=Integer.parseInt(num2t);
		
			total=total+num2;
			contador++;
			
		}while(num2>=0);

		System.out.println("La media total es de= " +total);
	}
}