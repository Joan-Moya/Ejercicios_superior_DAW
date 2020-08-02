package ejercicio20;
import objetos.*;
import java.util.Scanner;
public class Ejercicio20 {

    public static void main(String[] args) {
        double sueldo;
        double retencion;
        String dni;
        Scanner entrada=new Scanner(System.in);
        //Creamos las dos instancias
        Medico MedicoDigestivo=new Medico();
        Medico MedicoTraumatologo= new Medico();
        
        /*NO ENTENDIA QUE ERA LO DE LA RETENCION, ASI QUE EL NUMERO QUE SE PONE POR 
        PANTALLA LO HE DIVIDIDO ENTRE 100 PARA QUE SALGA EL PORCENTAJE, Y SI ESTA BIEN LUEGO
        SEIRIA APLICAR ESE PORCENTAJE AL SUELDO QUE PONEMOS POR PANTALLA.
        */
        
        System.out.print("Cambia el sueldo del medico traumatologo: ");
        sueldo=entrada.nextDouble();
        MedicoTraumatologo.setSueldo(sueldo);
        System.out.println("El sueldo del medico traumatologo es de: "+MedicoTraumatologo.getSueldo()+"EU");
        System.out.println("");
        System.out.print("Cambia el DNI del medico digestivo: ");
        dni=entrada.next();
        MedicoDigestivo.setDni(dni);
        System.out.println("El dni del medico digestivo es: "+MedicoDigestivo.getDni());
        System.out.println("");
        System.out.print("Pon la cantidad de retencion del sueldo del medico digestivo: ");
        retencion=entrada.nextDouble();
        MedicoDigestivo.retencionMedico(retencion);
        System.out.println("");
       System.out.print("Pon la cantidad de retencion del sueldo del medico traumatologo: ");
        retencion=entrada.nextDouble();
        MedicoTraumatologo.retencionMedico(retencion);
        System.out.println("");
        System.out.println("LOS DATOS DE LOS MEDICOS SON:");
        System.out.println("----------------------------------------------------");
        System.out.println("-Medico Traumatologo");
        MedicoTraumatologo.mostrarDatos();
        System.out.println("");
        System.out.println("");
        System.out.println("-Medico Digestivo");
        MedicoDigestivo.mostrarDatos();
         
       
    }
    
}
