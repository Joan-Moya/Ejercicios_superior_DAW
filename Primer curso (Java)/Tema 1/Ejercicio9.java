public class Ejercicio9
{

		public static void main (String [] args)
		{

		int numero; //declaramos una variable de tipo caracter

		numero= (int)(Math.random()*10); //math random devuelve double por eso hacemos la conversion (int)
		System.out.print("Los numeros del cupon son: "+numero);
		numero= (int)(Math.random()*10);
		System.out.print(""+ numero); //Aqui volvemos a poner la misma varialbe para que vuelva a generar otra letra
		numero= (int)(Math.random()*10);
		System.out.print(""+ numero);
		numero= (int)(Math.random()*10);
		System.out.print(""+ numero);
		numero= (int)(Math.random()*10);
		System.out.print(""+ numero);
		}
}