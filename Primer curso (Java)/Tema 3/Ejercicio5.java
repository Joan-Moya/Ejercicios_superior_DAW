public class Ejercicio5
{

		public static void main (String [] args)
		{

		
		int valor;

		for(valor=1; valor<=100; valor++)

		{
			if(valor%5==0) //Aqui lo que le decimos es que si el resto de la division de 5 es cero que se lo salte y no imprima nada para eso ponemos el continue
			{
				continue;
			}

			System.out.println(valor);




		}
		
		
		
		

		}
}