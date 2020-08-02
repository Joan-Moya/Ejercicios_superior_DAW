/*
Ejercicio31

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio31
{

		public static void main (String [] args)
	{		
			
		
			int horas1;
			int horas2;
			int resultadoHoras1=0;
			int resultadoHoras2=0;
			int resultadoTotal=0;
			String horas1T;
			String horas2T;
			//VARIABLES
			
				//Calculamos las horas ordinarias
				System.out.println("Pon la cantidad de horas ordinarias : ");//Ponemos las horas ordinarias
				horas1T=System.console().readLine();
				horas1=Integer.parseInt(horas1T);
				if(horas1<=40){//Dado que las primeras 40 horas son ordinarias, si es menor a 40.... sino error.
					resultadoHoras1= horas1*12;//Multiplicamos las horas por los euros que son pagadas.
				}else{
					System.out.println("ERROR: las horas ordinarias solo pueden ser 40");
				}
				//------------------------------------
				
				//Ahora lo mismo pero en las horas no ordinarias
				System.out.println("Pon la cantidad de horas no ordinarias : ");
				horas2T=System.console().readLine();
				horas2=Integer.parseInt(horas2T);
				resultadoHoras2= horas2*16;//se multiplica por 16 porque las horas no ordinarias se multiplican por 16.
				//------------------------------------
				resultadoTotal= resultadoHoras1+resultadoHoras2;//Sumamos la cantidad de euros
				System.out.println("El dinero total a pagar al trabajador es: "+resultadoTotal);
	}
}