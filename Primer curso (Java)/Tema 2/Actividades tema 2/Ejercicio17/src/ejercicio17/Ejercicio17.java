package ejercicio17;
import objetos.*;
import java.util.Scanner;
public class Ejercicio17 {

    public static void main(String[] args) {
        Scanner entrada= new Scanner(System.in);
        String particular;
        double cantidad;
        
        System.out.println("Dime el nombre del particular: ");
        particular=entrada.next();
        Cuenta cuentaParticular1= new Cuenta(particular);
        System.out.println(" ");
        System.out.println("Dime el nombre de la empresa y la cantidad de dinero ");
        System.out.print("Nombre: ");
        particular=entrada.next();
         System.out.print("Cantidad de dinero: ");
         cantidad=entrada.nextDouble();
        Cuenta cuentaEmpresa1=new Cuenta (particular,cantidad);
        System.out.println("");
         System.out.println("DATOS DE CUENTA PERSONAL ");
         System.out.println("--------------------------------------------------");
        cuentaParticular1.datosCuenta();
        System.out.println("");
        System.out.println("DATOS DE CUENTA DE EMPRESA ");
        System.out.println("--------------------------------------------------");
        cuentaEmpresa1.datosCuenta();
        System.out.println("");
        System.out.println("");
        System.out.print("Ingresa 1000 en la cuenta personal");
        cantidad=entrada.nextDouble();
        cuentaParticular1.setCantidad(cantidad);
        System.out.println("");
        System.out.println("");
        System.out.println("Retira 500 de la cuenta de empresa");
        cantidad=entrada.nextDouble();
        cuentaEmpresa1.retirarCantidad(cantidad);
        
        System.out.println("");
        System.out.println("");
        System.out.println("DATOS FINALES");
        System.out.println("-------------------------");
        System.out.println("DATOS DE CUENTA PERSONAL ");
        System.out.println("--------------------------------------------------");
        cuentaParticular1.datosCuenta();
        System.out.println("");
        System.out.println("DATOS DE CUENTA DE EMPRESA ");
        System.out.println("--------------------------------------------------");
        cuentaEmpresa1.datosCuenta();
       
        
        
    }
    
}
