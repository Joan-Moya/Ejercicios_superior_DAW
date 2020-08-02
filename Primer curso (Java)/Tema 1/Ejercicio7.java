public class Ejercicio7
{

		public static void main (String [] args)
		{

		
		String kb;		 //string para varialbes donde vamos a "leer" un valor
		double kb2;
		final double conversion=1024; //Aqui hacemos la constante que dividira los datos puestos

		System.out.print("Pon los kb: ");
		kb= System.console().readLine();
		
		kb2= Double.parseDouble(kb); //aqui pasamos el valor string a double para poder calcular
		System.out.println("Son tantos kilobytes: " +kb2/conversion);

		}
}