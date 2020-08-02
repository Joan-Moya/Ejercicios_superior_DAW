/*
Ejercicio29

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio29
{

		public static void main (String [] args)
	{		
			
		
			int hora;
			String horaT;
			//VARIABLES
			
				System.out.println("Pon una hora : ");//ponemos la hora
				horaT=System.console().readLine();//introducimos la hora por pantalla
				hora=Integer.parseInt(horaT);//pasamos la hora introducida a int
			
				
				
					if(hora<=12){//si la hora es menor que 12....
						System.out.println("Buenos dias");
					}else if(hora>=13){
						System.out.println("Buenos tardes");
					}else if(hora>=20){
						System.out.println("Buenas noches");
					}else if(hora>24){
						System.out.println("Hora puesta es erronea");
					}
					
	}
}