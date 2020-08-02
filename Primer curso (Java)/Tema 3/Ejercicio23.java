/*
Ejercicio23

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio23
{

		public static void main (String [] args)
	{
		
			int nota;
			int litros;
			int precioLitros=2;
			int precioDeLosLitros=0;
			String codigo="";
			String litrosT;
			
			System.out.print("Pon el codigo del articulo");
			codigo=System.console().readLine();
			System.out.println("");
			System.out.println("Pon la cantidad de litros que quieres");
			litrosT=System.console().readLine();
			litros=Integer.parseInt(litrosT);
			System.out.println("");
			System.out.println("");
			
			precioDeLosLitros=litros*precioLitros;
			System.out.println("--------------------------------------------------");
			
			System.out.println("El codigo del producto es: "+codigo);
			System.out.println("Litros comprados: "+litros);
			System.out.println("Precio del litro: "+precioLitros);
			System.out.println("Precio total de la compra: "+precioDeLosLitros+"EUROS");
			
			
	}
	
}