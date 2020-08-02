package objetos;
public class Cuenta {
    String titular;
    double cantidad;
            
            public Cuenta(String titu){
               
                this.titular=titu;
       }
            public Cuenta(String titu, double canti){
                this.titular=titu;
                this.cantidad=canti;
        }
            
            public void setTitular(String titu){
                this.titular=titu;
            }
            public String getTitular(){
                return titular;
            }
            
            public void setCantidad(double cant){
                if (cant==0){
                   
                }else{
                    this.cantidad=cant;
                }
            }
            public double getCantidad(){
                return cantidad;
            }
            public void retirarCantidad(double num){
                if(num<0){
                    this.cantidad=cantidad-cantidad;
                }else{
                    this.cantidad=cantidad-num;
                }
            }
          
            public void datosCuenta(){
                System.out.println("El titular es: "+titular);
                System.out.println("La cantidad es: "+cantidad);
            }
}
