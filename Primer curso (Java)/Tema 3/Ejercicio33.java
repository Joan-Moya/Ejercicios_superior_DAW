/*
Ejercicio33

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio33
{

		public static void main (String [] args)
	{		
			
		
			double nota1;
			double nota2;
			double nota3;
			double resultadoOperacion=0;
			double resultadoTotal=0;
			String nota1T;
			String nota2T;
			String nota3T;
			//VARIABLES
			
				
				System.out.println("Pon una nota : ");//Pedimos una nota y la convertimos
				nota1T=System.console().readLine();
				nota1=Double.parseDouble(nota1T);
					System.out.println("Pon una nota : ");//pedimos una nota y la convertimos
					nota2T=System.console().readLine();
					nota2=Double.parseDouble(nota2T);
						System.out.println("Pon una nota : ");//pedimos una nota y la convertimos
						nota3T=System.console().readLine();
						nota3=Double.parseDouble(nota3T);
						resultadoOperacion= nota1+nota2+nota3;//Sumamos las 3 
						resultadoTotal=resultadoOperacion/3;
						System.out.println("La media de las notas es: "+resultadoTotal);
						//A partir de aqui hacemos el ampliamiento
						if(resultadoTotal<5){
							System.out.println("Insuficiente");
						}else if(resultadoTotal>5 && resultadoTotal<6){
							System.out.println("Suficiente");
							}else if (resultadoTotal>6 && resultadoTotal<=7){
								System.out.println("Notable");
							}else if (resultadoTotal>8 && resultadoTotal<=10){
								System.out.println("Sobresaliente");
							}
							
	}
}