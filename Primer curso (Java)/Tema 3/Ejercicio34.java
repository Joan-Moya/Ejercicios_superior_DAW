/*
Ejercicio34

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio34
{

		public static void main (String [] args)
	{
		
			int mes;
			int dia;
			String diaT;
			String mesT;
			String horoscopo="";
			
			System.out.println("Pon el mes: ");
			mesT=System.console().readLine();
			mes=Integer.parseInt(mesT);
			
			System.out.println("Pon el dia: ");
			diaT=System.console().readLine();
			dia=Integer.parseInt(diaT);
		
			switch (mes){
				
				case 1: if(dia<21) horoscopo="Acuario"; else horoscopo="Piscis"; break;
				case 2: if(dia<19) horoscopo="Piscis"; else horoscopo="Aries"; break;
				case 3: if(dia<22) horoscopo="Aries"; else horoscopo="Tauro"; break;
				case 4: if(dia<22) horoscopo="Tauro"; else horoscopo="Geminis"; break;
				case 5: if(dia<22) horoscopo="Geminis"; else horoscopo="Cancer"; break;
				case 6: if(dia<22) horoscopo="Cancer"; else horoscopo="Leo"; break;
				case 7: if(dia<22) horoscopo="Leo"; else horoscopo="Virgo"; break;
				case 8: if(dia<24) horoscopo="Virgo"; else horoscopo="Libra"; break;
				case 9: if(dia<24) horoscopo="Libra"; else horoscopo="Escorpio"; break;
				case 10: if(dia<24) horoscopo="Escorpio"; else horoscopo="Sagitario"; break;
				case 11: if(dia<22) horoscopo="Sagitario"; else horoscopo="Capricornio"; break;
			
				
	
			}
			
			System.out.println("El horoscopo es: "+horoscopo);
			
	}
	
}