public class Ejercicio23
{

		public static void main (String [] args)
		{

		
		int t,billete200,billete20,sobrante,billete10,resto,dinerosobra;
		String datos;
			
				System.out.print("Pon los euros: ");
				datos=System.console().readLine();
				System.out.println("Tenemos"+datos+" Euros");

		t=Integer.parseInt(datos);
	
		billete200= t/200; //resultado de cuantos billetees de 200 tenemos
		resto= t%200;   //el resto nos dice cuanto dinero sobra
		billete20= resto/20; //nos dice cuantos billetes de 20 tenemos
		sobrante= resto%20; // nos dice cuanto dinero nos sobra
		billete10= resto/10; //nos dice cuantos billetes de 10 tenemos
		dinerosobra=resto%10; //nos dice cuanto nos sobra


			System.out.println("Son= "+billete200+" Billetes de 200"+billete20+" Billetes de 20 "+billete10+" Billetes de 10");
			System.out.println("Sobran "+dinerosobra+" Euros");
		}
}