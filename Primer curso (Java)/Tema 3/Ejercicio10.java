public class Ejercicio10
{

		public static void main (String [] args)
	{
			int num,num2;
			String num2t;
			
			num=(int)(Math.random()*100);
			
		
		do
		{
			System.out.println("Pon tu numero: ");
		num2t=System.console().readLine();
		num2=Integer.parseInt(num2t);
		
		if(num<num2)
			
			{
				System.out.println("El numero que has puesto es mayor que el del programa");
			}else
			{
				System.out.println("El numero que has puesto es menor que el del programa");
			}
			
			
		}while(num!= num2);

	}
}