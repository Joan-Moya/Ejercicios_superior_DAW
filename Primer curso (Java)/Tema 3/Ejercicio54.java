/*
Ejercicio54

Version 1.0

03/10/2017

Joan moya Torremocha

*/

public class Ejercicio54
{

		public static void main (String [] args)
	{
		
			double baseImponible;
			double tipoDeIva;
			double ivaImpuesto=0;
			String cantidadDeIva="";
			double promoElegida=0;
			double precioTotal;
			String baseImponibleT;
			String cantidadDePromo="";
			String tipoDeIvat="";//ponemos las comillas para decir que introducitemos texto
			String tipoDePromo="";
			//VARIABLES
			
			System.out.println("Pon la base imponible: ");
			baseImponibleT=System.console().readLine();
			baseImponible=Double.parseDouble(baseImponibleT);

			/*como aqui la base imponible ya ha cambiado de su numero original, para seguir haciendo las otras operaciones tenemos que recuperar
			el numero que habiamos puesto en un principio, por eso hemos creado una variable para guardar su contenido para hacer las otras operaciones*/
			
			
			
			//-------------------------------------------------------------	
			
			System.out.println("");
			System.out.println("");
			System.out.println("--------------------------------------------");
			System.out.println("-----QUE PROMOCION QUIERES APLICAR?---------");
			System.out.println("----------MITAD/MENO5/5PORC-----------------");
			System.out.println("--------------------------------------------");
			System.out.println("");
			System.out.println("");
			
			tipoDePromo=System.console().readLine();//introducimos el iva que queremos de los señalados en el programa
			
			
			//AQUI VAMOS A HACER LAS OPERACIONES DE LAS PROMOCIONES
			if(tipoDePromo.equals("mitad")){
				promoElegida=baseImponible/2;//Aqui hacemos la operacion de la promocion correspondiente
				cantidadDePromo="Mitad";//Aqui ponemos que promocion ha sido elegida para luego ponerla
				
			}else if(tipoDePromo.equals("meno5")){
				promoElegida=(baseImponible-5);//Aqui hacemos la operacion de la promocion correspondiente
				cantidadDePromo="Meno5";//Aqui ponemos que promocion ha sido elegida para luego ponerla
				
			}else if(tipoDePromo.equals("5porc")){
				promoElegida=baseImponible-0.95;//Aqui hacemos la operacion de la promocion correspondiente
				cantidadDePromo="5porc";//Aqui ponemos que promocion ha sido elegida para luego ponerla
				
			}

			//Aqui hemos puesto la base imponible y la hemos pasado a double
			
			
			System.out.println("");
			System.out.println("");
			System.out.println("--------------------------------------------");
			System.out.println("--------QUE IVA QUIERES APLICAR?------------");
			System.out.println("----GENERAL/REDUCIDO/SUPER REDUCIDO---------");
			System.out.println("--------------------------------------------");
			System.out.println("");
			System.out.println("");
			tipoDeIvat=System.console().readLine();//introducimos el iva que queremos de los señalados en el programa
			
			
					//AQUI VAMOS A HACER LAS OPERACIONES DEL IVA AL BASE IMPORTE
					if(tipoDeIvat.equals("general")){
						ivaImpuesto=promoElegida*0.21;//Aqui hacemos la operacion por si queremos aplicar el iva general que es el 21%
						cantidadDeIva="21%";//Aqui ponemos la cantidad del iva aplicado para luego mostrarlo.
						
					}else if(tipoDeIvat.equals("reducido")){
						ivaImpuesto=promoElegida*0.10;//Aqui hacemos la operacion por si queremos  aplicar el iva reducido que es el 10%
						cantidadDeIva="10%";//Aqui ponemos la cantidad del iva aplicado para luego mostrarlo.
						
					}else if(tipoDeIvat.equals("super reducido")){
						ivaImpuesto=promoElegida*0.04;//Aqui hacemos la operacion por si queremos aplicar el iva super reducido que es del 4%
						cantidadDeIva="4%";//Aqui ponemos la cantidad del iva aplicado para luego mostrarlo.
						
					}
					
					
					

					
					precioTotal=promoElegida+ivaImpuesto;//sumamos ambos resultados para saber el precio final
					
					System.out.println("");
					System.out.println("");
					System.out.println("Base imponible= "+baseImponible);
					System.out.println("Cod.promo.("+cantidadDePromo+")="+promoElegida);
					System.out.println("IVA ("+cantidadDeIva+")");
					System.out.println("Precio con IVA:"+ivaImpuesto);
					System.out.println("Total: "+precioTotal);
					
					
					
	}
}