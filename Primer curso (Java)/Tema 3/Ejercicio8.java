public class Ejercicio8
{

		public static void main (String [] args)
	{
			String numerot;
			int numero,operacion,operacion2;
		
		do
		{
			
			
			System.out.println("Introduce un numero: ");
			
			numerot=System.console().readLine();
			numero=Integer.parseInt(numerot);
			operacion2=numero%2;
			
			
			if (operacion2==0)//Si el numero es par
			{
				System.out.println("El numero es par");
				
			}else
			{
				System.out.println("El numero es impar");
			}

			
		
		}while(numero!=0);//"do" hacer mientras el numero sea distinto a cero "!=0" 
		
	}
}