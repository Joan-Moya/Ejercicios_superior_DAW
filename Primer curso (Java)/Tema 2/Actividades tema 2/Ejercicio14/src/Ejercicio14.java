import objetos.*;
import java.util.Scanner;
public class Ejercicio14 {
    public static void main(String[] args) {
        String sector;
        proveedor proveedor= new proveedor();
        Scanner entrada= new Scanner(System.in);
        
        System.out.print("Cambia el sector del proveedor: ");
        sector=entrada.next();
        //ahora cambiamos los datos de sector
        proveedor.setSector(sector);
        System.out.println("El sector modificado es:"+proveedor.getSector());
         System.out.print("");
         System.out.print("Los datos totales son ");
         System.out.print("-----------------------------------------------");
         proveedor.DatosAtributos();
         System.out.print("-----------------------------------------------");
        
    }
    
}
