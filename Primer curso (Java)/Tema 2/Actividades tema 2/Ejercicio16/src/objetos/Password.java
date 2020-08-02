package objetos;
public class Password {
    String clave="";
    char caracter;
    
        public Password(){
        
            for(int contador=0; contador<8; contador++){
                caracter=(char)(Math.random()*89+33);
                this.clave+=caracter;
            }
        }
        public void setPassword(String num){
            this.clave=num;
        }
        public String getPassword(){ //creamos el metodo get que nos dice el enunciado
            return this.clave;
        }
}
