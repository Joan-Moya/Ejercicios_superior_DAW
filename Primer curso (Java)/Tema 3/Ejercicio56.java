/*
Ejercicio56

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio56
{

		public static void main (String [] args)
	{
		
			int a\u00d1o;
			int mes;
			int dia;
			int diaPuesto=0;
			int mesPuesto=0;
			int a\u00d1oPuesto=0;
			int calculo=0;
			String a\u00d1oT;
			String mesT;
			String diaT;
			
						System.out.println("-----------------");
						System.out.println("Pon el dia: ");
						System.out.println("-----------------");
						System.out.println("");
						diaT=System.console().readLine();
						dia=Integer.parseInt(diaT);
						//Pedimos el dia
						
						System.out.println("-----------------");
						System.out.println("Pon el mes: ");
						System.out.println("-----------------");
						System.out.println("");
						mesT=System.console().readLine();
						mes=Integer.parseInt(mesT);
						//Pedimos el mes
						
						System.out.println("-----------------");
						System.out.println("Pon el a\u00d1o: ");
						System.out.println("-----------------");
						System.out.println("");
						a\u00d1oT=System.console().readLine();
						a\u00d1o=Integer.parseInt(a\u00d1oT);
						//Pedimos el año
			
			
			if(dia<0 && dia>31){
					
			}else{
				diaPuesto++;
			}
			//Ya hemos terminado de calcular si el dia introducido es correcto
			//--------------------------------------------------------------
			
			if(mes<0 && mes>12){
				
			}else{
				mesPuesto++;
			}
			//Ya hemos calculado si el mes puesto es correcto o no
			//--------------------------------------------------------------
			
			if(a\u00d1o>0){
				a\u00d1oPuesto++;
			}else{
			}
			//Ya hemos calculado si el mes puesto es correcto o no
			//--------------------------------------------------------------
				
				calculo=calculo+diaPuesto+mesPuesto+a\u00d1oPuesto;
				
				if(calculo==3){//si calculo es igual a 4 quiere decir que las 3 fechas estan bien por lo tanto la fecha ontroducida es correcta
					System.out.println("");
					System.out.println("LA FECHA INTRODUCIDA ES CORRECTA");
				}else{
					System.out.println("LA FECHA INTRODUCIDA ES INCORRECTA");
				}
				
	}			
}