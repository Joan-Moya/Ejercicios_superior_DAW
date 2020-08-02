public class Ejercicio27
{

		public static void main (String [] args)
	{

		String dia1t,mes1t,dia2t,mes2t;
		int dia1,mes1,dia2,mes2,meses,tiempodias,dias1,dias2;

			System.out.print("Pon una fecha//  Dia: ");
			dia1t=System.console().readLine();
			System.out.print(" // Mes: ");                   //En este bloque pedimos la primera fecha
			mes1t=System.console().readLine();
			
			System.out.println("----------------------------");
			
			System.out.println("Pon una segunda fecha//  Dia: ");
			dia2t=System.console().readLine();            //En este bloque pasamos la segunda fecha
			System.out.print(" // Mes: ");
			mes2t=System.console().readLine();
			
			mes1=Integer.parseInt(mes1t);
			mes2=Integer.parseInt(mes2t);
			dia1=Integer.parseInt(dia1t);
			dia2=Integer.parseInt(dia2t);
			
			
			meses=((mes2-mes1)+1)*30;
			
			dias1=dia1-1;
			dias2=30-dia2;
			tiempodias = meses-dias1-dias2;
			
			System.out.println("El resultado es: "+tiempodias);
			
			
			
			
			
		
			

	}
}