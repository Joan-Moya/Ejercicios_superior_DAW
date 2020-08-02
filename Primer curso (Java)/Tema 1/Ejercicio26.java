public class Ejercicio26
{

		public static void main (String [] args)
	{

		String notat,nota2t;
		double nota,nota2,media,operacion1;
		
			System.out.println("introduce la nota del primer examen: ");
		notat=System.console().readLine();
		nota=Double.parseDouble(notat);
			System.out.println("Que nota quieres sacar en el segundo trimestre? ");
		nota2t=System.console().readLine();
		nota2=Double.parseDouble(nota2t);	
		media=nota+nota2;
		operacion1=nota2-(nota*0.4)/0.6;
		
		
		System.out.println("Para tener un"+nota2+"necesitas tener un"+operacion1+"en el segudo examen");
		

	}
}