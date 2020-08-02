public class Ejercicio10
{

		public static void main (String [] args)
		{

		
		char letra; //para la letra es char que es caracter

		letra= (char)(Math.random()*26+ 'A');
		boolean comprobar;
		comprobar = (letra == 'A'| letra== 'E' | letra== 'I' | letra=='O' | letra=='U'); //comprobamos si letras es "a" o "e" o "i".....
		System.out.print("La letra es: " +letra);
		System.out.print(" " +comprobar);

		}
}