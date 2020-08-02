public class Ejercicio8
{

		public static void main (String [] args)
		{

		char letra; //declaramos una variable de tipo caracter

		letra= (char)(Math.random()*26 +'A');
		System.out.print("Letras aleatorias: "+letra);
		letra= (char)(Math.random()*26 +'A');
		System.out.print(","+ letra); //Aqui volvemos a poner la misma varialbe para que vuelva a generar otra letra
		letra= (char)(Math.random()*26 +'A');
		System.out.print(","+ letra);
		}
}