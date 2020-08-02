/*
Ejercicio36

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio36
{

		public static void main (String [] args)
	{
		
			double nota1;
			double nota2;
			double calculoMedia=0;
			int media=0;
			String recuperacion=".";
			String nota1T;
			String nota2T;
			
			//VARIABLES
			
				System.out.println("Nota del primer control: ");			//pedimos la primera nota
					nota1T=System.console().readLine();
					nota1=Double.parseDouble(nota1T);
					
				System.out.println("Nota del segundo: ");			//pedimos la segunda nota
					nota2T=System.console().readLine();
					nota2=Double.parseDouble(nota2T);
					
					calculoMedia=(nota1+nota2)/2.0;			//calculamos la media
						if(calculoMedia<5){			//Si calculo media es menor a 5...
							System.out.println("Cual ha sido el resultado de la recuperacion? (apto/no apto):");
							
							recuperacion=System.console().readLine();							
						if(recuperacion.equals("apto")){
							System.out.println("La media de programacion es 5");
						}else if (recuperacion.equals("no apto")){
							System.out.println("La media de programacion es 1");
						}else if(recuperacion=="."){
							
						}
						}else{
						 System.out.println("La media total es de: "+calculoMedia);		//Esta es la media que dira en caso que la media salgo aprovada
						}
						
					
							
	}
}