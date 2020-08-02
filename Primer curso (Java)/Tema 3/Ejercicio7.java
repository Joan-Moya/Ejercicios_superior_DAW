public class Ejercicio7
{

		public static void main (String [] args)
	{
			String numerot;
			int numero,operacion;
		
		do
		{
			
			
			System.out.println("Introduce un numero: ");
			
			numerot=System.console().readLine();
			numero=Integer.parseInt(numerot);
			
			if (numero<0)//Si el numero es menor a cero...
			{
				System.out.println("El numero es negativo");
				
			}else
			{
				System.out.println("El numero es positivo");
			}

			
		
		}while(numero!=0);//"do" hacer mientras el numero sea distinto a cero "!=0" 
		
	}
}