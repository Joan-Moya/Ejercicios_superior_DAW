public class Ejercicio6
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
			if (numero<0) break; //Aqui ponemos un if para que si el valor introducido es menor a 0 no haga nada
			operacion= numero*numero;
			
		
			System.out.println("El cuadrado del numero es: "+operacion);
			System.out.println("");
			
		
		}while(numero>=0);
		
	}
}