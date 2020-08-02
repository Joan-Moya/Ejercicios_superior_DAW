/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicio2b;
import java.util.Scanner;
import Objetos.*; //importamos la clase moto
public class Ejercicio2b {     
    
    public static void main(String[]args){
        
        int velocidadIntro;
        Scanner entrada=new Scanner (System.in); //ponemos la entrada del scann
        Moto miMoto = new Moto(); //nueva instancia de el objeto moto
        
        System.out.println("Cuanto quieres acelerar?");
        velocidadIntro=entrada.nextInt();
       miMoto.acelera(velocidadIntro);
       System.out.println("Cuanto quieres frenar?");
       velocidadIntro=entrada.nextInt();
       miMoto.frena(velocidadIntro);
        System.out.println("La velocidad es:"+miMoto.getMoto());
    }
    
}

