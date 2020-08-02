/*
Ejercicio57

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio57
{

		public static void main (String [] args)
	{
		
			double nota;
			String notaT;
			
			System.out.println("Pon una nota: ");
			notaT=System.console().readLine();
			nota=Double.parseDouble(notaT);
			//Pedimos la nota por texto y la pasamos a double
			
			if(nota<=4){
				System.out.println("La nota introducida es Insuficiente");
				
			}else if(nota>=5&&nota<=5.9){
				System.out.println("La nota introducida es Suficiente");
				
			}else if(nota>=6&&nota<=6.9){
				System.out.println("La nota introducida es Bien");
				
			}else if (nota>=7&&nota<=8.9){
				System.out.println("La nota introducida es Notable");
				
			}else if(nota>=9&&nota<=10){
				System.out.println("La nota introducida es Sobresaliente");
			}
	}
	
}