/*
Ejercicio27

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio27
{

		public static void main (String [] args)
	{
		
			int contador=0;
			String notaT;
			double nota;
			int suspendidos=0;
			//VARIABLES
			
			do{
				System.out.println("Pon una nota : ");//ponemos una nota
				notaT=System.console().readLine();//introducimos una nota por pantalla
				nota=Double.parseDouble(notaT);//pasamos el numero introducido a double
					if(nota<5){//si numero es menor a 5 le sumamos 1 para decir que hay un suspenso
					suspendidos++;
					}
				contador++;
				}while(contador<5);//mientras contador sea menor  a 5 asi nos pide 5 notas
					
				System.out.println("Notas suspendiras: "+suspendidos );			
	}
}