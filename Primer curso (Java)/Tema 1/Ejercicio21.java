public class Ejercicio21 {
    
	 public static void main(String[] args) 
	{
		String edadT,nivelT,ingresosT;
		double edad,nivel,ingresos;
		boolean jasp;

			System.out.println("Pon la edad: ");
				edadT=System.console().readLine();
					edad=Double.parseDouble(edadT);

			System.out.println("Pon el nivel: ");
				nivelT=System.console().readLine();
					nivel=Double.parseDouble(nivelT);

			System.out.println("Pon los ingresos: ");
				ingresosT=System.console().readLine();
					ingresos=Double.parseDouble(ingresosT);

								jasp=(edad <=28 && nivel >3) || (edad <30 && ingresos > 28000);

			System.out.println("El resultado es: "+jasp);

	}
}