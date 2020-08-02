public class Ejercicio3
{

		public static void main (String [] args)
		{

		
		String base,altura;
		double resultado,baseR,alturaR; //Aqui declaramos las variables


		System.out.print("Pon la base del rectangulo: ");
		base= System.console().readLine(); 			//Por aqui escribimos el valor de base
		System.out.print("Pon la altura del rectangulo: ");
		altura= System.console().readLine();			 //Por aqui ponemos el valor de altura

		baseR=Double.parseDouble(base); //Aqui pasamos el valor string a double para poder operar asignandole ese resultado ao otra variable
		alturaR=Double.parseDouble(altura); //Aqui pasamos el valor string a double para poder operar asignandole ese resultado ao otra variable
		
		resultado= baseR*alturaR; //Esta varialbe sirve para hacer la operacion que es base por altura
		
		System.out.println ("El resultado es: " +resultado); 			//Aqui sacamos el resultado

		}
}