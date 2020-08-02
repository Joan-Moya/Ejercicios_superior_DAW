public class Ejercicio24
{

		public static void main (String [] args)
		{

		
		double operacion;
		String preciot;
		double precio;


				System.out.print("Pon el precio del producto");
				preciot=System.console().readLine();

		precio=Double.parseDouble(preciot);
		
		operacion= precio*0.85*1.21; //0,80 es el descuento del 15 y 1,21 es el iva
		

				System.out.print("El precio total del producto es= "+operacion);
				
		}
}