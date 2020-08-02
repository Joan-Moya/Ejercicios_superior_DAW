/*
Ejercicio25

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio25
{

		public static void main (String [] args)
	{
		
			int cuantosSueldos=0;
			String nuevoSueldoT;
			double nuevoSueldo;
			double sueldoMasAlto=0;
			//VARIABLES
			
			do{
				System.out.println("Pon un sueldo: ");
				nuevoSueldoT= System.console().readLine();
				nuevoSueldo= Double.parseDouble(nuevoSueldoT);//Pasamos el sueldo de string a double
					if(nuevoSueldo>sueldoMasAlto){//si nuevosueldo es mayor a sueldo mas alto, sueldo mas alto obtiene el valor
						sueldoMasAlto=nuevoSueldo;
					}
					cuantosSueldos++;//le sumamos 1 para decirle que ya hemos introducido un valor
				}while(cuantosSueldos<=3);//Nos pedira 3 sueldos, hacer si cuantosSuelos es menor o igual a 3
					
				System.out.println("El Sueldo mas alto es: "+sueldoMasAlto );			
	}
}