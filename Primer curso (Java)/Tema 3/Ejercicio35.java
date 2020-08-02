/*
Ejercicio35

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio35
{

		public static void main (String [] args)
	{
		
			int p1;
			int p2;
			int p3;
			int p4;
			int respuestaCorrecta=0;
			int respuestaNoCorrecta=0;
			String p1T;
			String p2T;
			String p3T;
			String p4T;
			//VARIABLES
			
				System.out.println("Bienvenido al cuestionario tipo test");
				System.out.println("------------------------------------");
					System.out.println("En este curso se implantan clases de programacion? SI=1 NO=0 : ");
					p1T=System.console().readLine();
					p1=Integer.parseInt(p1T);
							if(p1==1){
								respuestaCorrecta++;//si la respuesta es correcta le sumamos mas 1 a la variable que nos dice cuantas son correctas
							}else{
								respuestaNoCorrecta++;
							}
					
					System.out.println("En este curso se implantan clases de Sistemas? SI=1 NO=0 : ");
					p2T=System.console().readLine();
					p2=Integer.parseInt(p2T);
							if(p2==1){
								respuestaCorrecta++;//si la respuesta es correcta le sumamos mas 1 a la variable que nos dice cuantas son correctas
							}else{
								respuestaNoCorrecta++;
							}
					
					System.out.println("En este curso se implantan clases de aleman? SI=1 NO=0 : ");
					p3T=System.console().readLine();
					p3=Integer.parseInt(p3T);
							if(p3==0){
								respuestaCorrecta++;//si la respuesta es correcta le sumamos mas 1 a la variable que nos dice cuantas son correctas
							}else{
								respuestaNoCorrecta++;
							}
							
					System.out.println("En este curso se implantan clases de plastica? SI=1 NO=0 : ");
					p4T=System.console().readLine();
					p4=Integer.parseInt(p4T);
							if(p4==0){
								respuestaCorrecta++;//si la respuesta es correcta le sumamos mas 1 a la variable que nos dice cuantas son correctas
							}else{
								respuestaNoCorrecta++;
							}		
							
							System.out.println("Resultado del test");
							System.out.println("------------------");
							System.out.println("Preguntas correctas: "+respuestaCorrecta);
							System.out.println("Preguntas Erroneas: "+respuestaNoCorrecta);
	}
}