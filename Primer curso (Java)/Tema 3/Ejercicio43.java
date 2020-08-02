/*
Ejercicio43

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio43
{

		public static void main (String [] args)
	{
		
			
			String clave="";
			int clave2=0;
			int contador=0;
			
			System.out.println("		---------------------");
			System.out.println("		LA CONTASE\u00d1A ES: 1234");
			System.out.println("		---------------------");
			System.out.println("");
			
			do{
				System.out.println("PON LA CONTRASE\u00d1A PARA ABRIR LA CAJA FUERTE: ");//pedimos la contraseña por string, que ya tenemos una predefinida
				clave=System.console().readLine();
				clave2=Integer.parseInt(clave);
				System.out.println("");
				//-------------------------------------------------------------
				if(clave2==1234){//1234 es la contraseña que hemos puesto predefinida
					System.out.println("La caja fuerte se ha abierto satisfactoriamente");//pedimos la contraseña
					break; //si hemos puesto la contraseña bien salimos del bucle
				}else{
					System.out.println("Lo siento, esa no es la combinacion");
				}
				contador++;//le sumamos uno, tenemos 4 intentos
			}while(contador<4);
				
				if(contador==4){//si contador es igual a 4 (que son nuestros intentos...)
					System.out.println("Se han acabado las oportunidades");
				}
				
	}
}