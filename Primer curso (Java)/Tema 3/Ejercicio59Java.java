/*
Ejercicio59

Version 1.0

03/10/2017

Joan moya Torremocha

*/
package ejercicio59.java;

import java.util.Scanner;//importamos la libreria de scanner
public class Ejercicio59Java {

    
    public static void main(String[] args) {
        Scanner entrada=new Scanner(System.in);//ponemos la instancia scanner
        
        String marca;
        String modelo;
        double precio;
        //variables
            
            System.out.print("Pon la marca del vehiculo: ");
            marca=entrada.next();
            System.out.print(" ");
            System.out.print("Pon el modelo del vehiculo: ");
            modelo=entrada.next();
            System.out.print(" ");
            System.out.print("Pon el precio del vehiculo: ");
            try {
                 precio=entrada.nextDouble();
            } catch(java.util.InputMismatchException e){
                System.out.println("Se tienen que introducir numeros");
                return;
            }
              
            precio=precio*1.21;//Lo multiplicamos por el iva que queramos
            
            System.out.print(" ");
            System.out.println("El precio del coche con el iva es: "+precio);
            
    }
    
}
