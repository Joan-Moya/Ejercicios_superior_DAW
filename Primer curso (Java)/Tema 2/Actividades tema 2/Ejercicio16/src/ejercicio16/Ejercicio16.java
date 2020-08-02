package ejercicio16;
import java.util.Scanner;
import objetos.*;

public class Ejercicio16 {
    public static void main(String[] args) {
        //Creo las variables necesarias
        int numVeces;
        Scanner entrada = new Scanner(System.in);
        //Solicito el numero de claves
        System.out.println("Introduce cuantas claves quieres: ");
        numVeces = entrada.nextInt();
        //Creo un vector de claves de tipo password
        Password[] claves = new Password[numVeces];
        
        //Hago un for para recorrer el array y llenar las posiciones con claves
        for (int cont = 0; cont < numVeces; cont++){
            claves[cont] = new Password();
            System.out.println(""+claves[cont].getPassword());
        }
        
    }  
}
