public class Ejercicio25
{

		public static void main (String [] args)
		{

		
		
		String at,bt;
		int a,b,mayor;


				System.out.print("Pon los dos numeros");
				at=System.console().readLine();
				System.out.print("  y ");
				bt=System.console().readLine();

			a=Integer.parseInt(at);
			b=Integer.parseInt(bt);
			
			System.out.println((a>b)?"El mayor es "+a : "El mayor es "+ b);

				
		}
}