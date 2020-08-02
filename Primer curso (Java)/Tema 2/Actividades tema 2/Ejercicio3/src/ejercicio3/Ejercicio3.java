package ejercicio3;
import objetos.*;
import java.util.Scanner;
public class Ejercicio3 {

    public static void main(String[] args) {
      double precioOriginal;
      double precioConDescuento;
      Scanner entrada=new Scanner (System.in); //ponemos la entrada del scann
      rebajas misRebajas=new rebajas(); 
      
        System.out.print("Pon el precio original del producto: ");
        precioOriginal=entrada.nextDouble();
        System.out.print("Pon el precio con el descuento: ");
        precioConDescuento=entrada.nextDouble();
        System.out.println("El porcentaje es del: "+misRebajas.calculoPorcentaje(precioOriginal,precioConDescuento));
         
    }
    
   
}

    