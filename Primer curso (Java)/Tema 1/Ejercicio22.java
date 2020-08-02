public class Ejercicio22
{

		public static void main (String [] args)
		{

		
		int t,horas,minutos,segundos,resto;
		String datos;
			
				System.out.print("Pon los segundos");
				datos=System.console().readLine();

		t=Integer.parseInt(datos);
	
		horas= t/3600;
		resto= t%3600;
		minutos= resto/60;
		segundos= resto%60;

			System.out.print("Son= "+horas+"H "+minutos+"MIN "+segundos+"SEC");
		}
}