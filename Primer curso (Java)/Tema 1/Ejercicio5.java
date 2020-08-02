public class Ejercicio5
{

		public static void main (String [] args)
		{

		
		String horas;
		double horas2, division;
		

		System.out.print("cuantas horas ha trabajado?: ");
		horas= System.console().readLine();
		
		horas2= Double.parseDouble(horas);
		System.out.println("Su sueldo es de: " +horas2*12);

		}
}