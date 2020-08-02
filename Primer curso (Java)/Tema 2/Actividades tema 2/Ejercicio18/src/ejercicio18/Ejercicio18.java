package ejercicio18;
import objetos.*;
import java.util.Scanner;
public class Ejercicio18 {
    public static void main(String[] args) {
        int prestamos;
        int devolucion;
        String editorial;
        Scanner entrada= new Scanner(System.in);
        Libro libroInformatica1= new Libro(); //hacemos una instancia a libro como nos pide el enunciado.
        
        
        System.out.println("Consultamos el titulo del libro.");
        System.out.println(libroInformatica1.getTitulo());
        System.out.println("");
        System.out.println("Cambiamos la editorial por Anaya");
        System.out.print("Cambia el nombre de la editorial: ");
        editorial=entrada.next();
        //ahora añadimos ese valor de la variable de arriba a la funcion set de la editorial
        libroInformatica1.setEditorial(editorial);
        //ahora realizamos los prestamos
        System.out.println("");
       System.out.println("Ahora realizamos 2 prestamos");
       System.out.print("Pon la cantidad de prestamos: ");
       prestamos=entrada.nextInt();
       libroInformatica1.prestamo(prestamos);
       System.out.println("");
       //mostramos el numero de prestados
       System.out.println("Libros prestados por ahora son:"+libroInformatica1.getPrestados());
       System.out.println("");
       System.out.println("Ahora vamos a devolver un libro");
       System.out.print("Pon la cantidad de libros que vas a devolver: ");
       devolucion=entrada.nextInt();
       libroInformatica1.devolucion(devolucion);
       //ahora mostramos los prestamos
      System.out.println("Libros prestados por ahora son:"+libroInformatica1.getPrestados());
      //ahora mostramos los ejemplares que hay
      System.out.println("");
      System.out.println("Hay "+libroInformatica1.getEjemplares()+" ejemplares de los libros");
      System.out.println("");
      System.out.println("AHORA MOSTRAMOS TODOS LOS DATOS");
      System.out.println("-------------------------------------------------------------");
      System.out.println("");
      libroInformatica1.mostrarDatos();
       
      
      
       
       
        
        
    }
    
}
