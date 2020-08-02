public class Ejercicio
{

		public static void main (String [] args)
	{
			int num,num1;
			String numt,variable; //delcaramos numt "t de texto" para guardar ahi el resultado de el system console "que es cuando te pide un numero"
			
			
			numt=System.console().readLine(); //pedimos un numero y lo guardamos en la varialbe numt "que como vemos es string"
			num=Integer.parseInt(numt); //pasamos el resultado de numt "que estring" a int, y ese resultado lo guardamos en num que es una varialbe int
			
			variable= (num<0)?"negativo":"positivo"; //aqui guardamos el resultado del if en variable "que es string" 
			
			// aqui dice: si num es menor a cero ? imprimimo negativo : "los dos puntos es el sino" "positivoo";
		 System.out.print(variable);

	}
}