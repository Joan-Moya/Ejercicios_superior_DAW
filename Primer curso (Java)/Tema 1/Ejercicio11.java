public class Ejercicio11
{

		public static void main (String [] args)
		{

		
		String a,b,intermedio; //ponemos varialbes tipo string para que guarde mas de un caracter

		a="hey";
		b="hola";
		
		System.out.println("El valor de a es: "+a);
		System.out.println("El valor de b es: "+b);
		
		intermedio=a;
		a=b;             //ponemos una variable intermedia para apsar el valor de una y cargarnos el otro
		b=intermedio;

		System.out.println("El valor de a es: "+a);
		System.out.println("El valor de b es: "+b);

		}
}