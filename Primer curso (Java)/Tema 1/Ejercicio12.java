public class Ejercicio12
{

		public static void main (String [] args)
		{

		
		String edadt,nivelt,ingresost;
		int edad,nivel;
		double ingresos;   //ponemos varialbes con una t para decir que es texto, luego pasamos ese valor que es string a double o int a otra varialbe para ya poder calcular los resultados
		boolean jasp;
		



		System.out.print("Introduce la edad: ");
			edadt= System.console().readLine();
		edad=Integer.parseInt(edadt);             //Aqui pasamos a edad que es tipo int el valor de edadt que es tipo string y lo convertimos a int.



		System.out.print("Introduce el nivel: ");
			nivelt= System.console().readLine();
		nivel=Integer.parseInt(nivelt); 

		

		System.out.print("Introduce los ingresos: ");
			ingresost= System.console().readLine();
		ingresos=Double.parseDouble(ingresost); 

		

				jasp=(edad <=28 & nivel >3 & ingresos >=28000);
		System.out.print("El resultado es: "+jasp);



		}
}