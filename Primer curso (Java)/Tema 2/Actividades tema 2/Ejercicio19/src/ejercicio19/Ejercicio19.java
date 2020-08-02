package ejercicio19;
import objetos.*;
public class Ejercicio19 {
   
    public static void main(String[] args) {
        hospital hospitalRibera= new hospital(2343,"Hospital Ribera","Calle del sobre lleno de billetes","9090909",
        "Valencia","46010",400,150);
        
        hospitalRibera.setHabitacionesTotales(500);
        System.out.println("Numero de habitaciones: "+hospitalRibera.getHabitacionesTotales());
        hospitalRibera.ingreso(5);
        System.out.println("Numero de habitaciones ocupadas: "+hospitalRibera.getHabitacionesOcupadas());
        hospitalRibera.alta(5);
        System.out.println("El numero de habitaciones ocupadas es: "+hospitalRibera.getHabitacionesOcupadas());
        hospitalRibera.muestraDatos();
    }
    
}
