package ejercicio15;
import objetos.*;
import java.util.Scanner;
public class Ejercicio15 {

    public static void main(String[] args) {
        int stockMas;
        int stockMenos;
        double iva;
        Producto producto = new Producto();
        Scanner entrada=new Scanner(System.in);
        
        System.out.print("Cuanto stock quieres augmentar?: (12)");
        stockMas=entrada.nextInt();
        producto.aumentaStock(stockMas);//Llamamos a la funcion y le incrementamos el valor de stockMas
        System.out.print("Cuanto stock quieres disminuir?: (5)");
        stockMenos=entrada.nextInt();
        producto.disminuyeStock(stockMenos);//Le damos a la funcion el valor puesto por pantalla
        System.out.print("");
        System.out.println("LOS DATOS DEL PRODUCTO SON");
        System.out.println("--------------------------------------------------");
        producto.mostrarDatos(); //en esta funcion estan todos los datos del producto
        System.out.println("--------------------------------------------------");
        
        System.out.print("Pon el importe del iva: ");
        iva=entrada.nextDouble();
        producto.ivaProducto(iva);//Aqui ponemos el iva, luego la funcion lo divide entre 100
        System.out.println("El iva impuesto es del: "+producto.ivaProducto(iva));/*llamamos a la funcion para que nos devuelva el iva que 
        hemos puesto pero en este caso el iva ya esta dividido entre 100, luego lo que aremos es aplicarselo
        al precio del producto.
        */
        System.out.println("El precio final con el iva incluido es del: "+producto.aplicarIVA());
        
        
    }
    
}
