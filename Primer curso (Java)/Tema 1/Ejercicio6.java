public class Ejercicio6
{

		public static void main (String [] args)
		{

		
		String mb;		 //string para varialbes donde vamos a "leer" un valor
		double mb2;
		final double conversion=1024; //Aqui hacemos la constante que dividira los datos puestos

		System.out.print("Pon los mb: ");
		mb= System.console().readLine();
		
		mb2= Double.parseDouble(mb); //aqui pasamos el valor string a double para poder calcular
		System.out.println("Son tantos kilobytes: " +mb2*conversion);

		}
}