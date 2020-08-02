import objetos.*;
import java.util.Scanner;
public class Actividad8 {


    public static void main(String[] args) {
        double valor;
        double valor2;
        Scanner entrada=new Scanner(System.in);
        
        System.out.println("Pon las millas para pasarlas a metros");
        valor=entrada.nextDouble();
        System.out.println("Ahora pon las millas que quieras pasar a kilometros");
        valor2=entrada.nextDouble();
        
            millasAMetros millasAmetros= new millasAMetros();
            System.out.println("Conversion de millas a metros: "+millasAmetros.millasAMetros(valor));
            System.out.println("Conversion de millas a kilometros: "+millasAmetros.millasAKilometros(valor));
            
    }
    
}
