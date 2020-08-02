/*
Ejercicio18

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio18
{

		public static void main (String [] args)
	{
			int sumaPisitivos=0;
			int num;
			int contador=0; // Esta es la variable que se pone para sumarla y saber en el while cuantos numeros hemos pedido
			int cantidadPositivos=0;
			int sumaPositivos=0;
			int cantidadNegativos=0;
			int sumaNegativos=0;
			double operacionPositivos=0;
			double operacionNegativos=0;
			int cantidadDeCeros=0;
			String numt;
			
			
			do{
				
				
				System.out.println("Pon un numero");
				numt=System.console().readLine();
				num=Integer.parseInt(numt);
				//Aqui hemos pedido un numero y lo hemos convertido a int
				contador++;
				//se ha sumado +1 para contador para saber que ya tenemos un numero puesto
				
				
				
				
				
				
				if(num>0){ //Si numero es mayor a 0..... esto lo hacamos para los numeros positivos
					
					cantidadPositivos++; //Aqui decimos que hemos introducido un numero positivo entonces se le suma 1
					sumaPositivos= sumaPositivos+num;
					
					
					
					
					
					
				}else if(num<0){//sino si los numeros son menores a 0
					
					cantidadNegativos++; //Aqui decimos que hemos introducido un numero negativo entonces se le suma 1
					sumaNegativos= sumaNegativos+num;
					
					
					
					
				}else{
				
				cantidadDeCeros++;
				
				}				
				
			
				
				
				
				
				
				
			}while(contador<=10); //cada vez que se haga el while se suma uno "el contador ya le hemos puesto que es 0"
			
			
			
			
			
			
			
			operacionPositivos= sumaPositivos/cantidadPositivos;
			System.out.println("Resultado numeros positivos: "+operacionPositivos); //Aqui imprimimos la operacion de los numeros positivos
			
			
			operacionNegativos= sumaNegativos/cantidadNegativos;
			System.out.println("Resultado numeros negativos: "+operacionNegativos); //Aqui imprimimos la operacion de los numeros negativos
			
			System.out.println("Ceros que se han puesto: "+cantidadDeCeros); //Aqui imprimimos la operacion de los ceros
		
	}
}