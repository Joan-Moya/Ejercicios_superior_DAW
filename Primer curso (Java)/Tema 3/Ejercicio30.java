/*
Ejercicio30

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio30
{

		public static void main (String [] args)
	{		
			
		
			int numero;
			String numeroT;
			String []diasSemana={"...","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"};
			//VARIABLES
			
				System.out.println("Pon un numero : ");//ponemos el numero
				numeroT=System.console().readLine();//introducimos el numero por pantalla
				numero=Integer.parseInt(numeroT);//pasamos el numero a int
				System.out.println(diasSemana[numero]);//aqui imprimimos el numero que hemos puesto que sera igual a un valor de la variable 
				
			
	}
}