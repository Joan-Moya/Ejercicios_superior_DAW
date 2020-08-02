package objetos;
public class Libro {
    //aqui ponemos los atributos de este objeto.
    String titulo;
    String autor;
    String editorial;
    int numDeEjemplares;
    int numDePrestados;
    int prestado;
    
    //aqui ponemos el contructor con los valores predefinidos del objeto creado
    public Libro(){
    
        this.titulo="Jobs";
        this.autor="Steve Jobs";
        this.editorial="Apple";
        this.numDeEjemplares=40;
        this.numDePrestados=0;
        this.prestado=0;
}
    
    //creamos los seters y los geters de todos los atrubutos de esta clase.
   public void setTitulo(String valor){
    this.titulo=valor;
}
   public String getTitulo(){
       return this.titulo;
   }
   public void setAutor(String valor){
       this.autor=valor;
   }
   public String getAutor(){
       return autor;
   }
   public void setEditorial(String valor){
       this.editorial=valor;
   }
   public String getEditorial(){
       return editorial;
   }
   public void setEjemplares(int valor){
       this.numDeEjemplares=valor;
   }
   public int getEjemplares(){
       return numDeEjemplares;
   }
   public void setNumPrestados(int valor){
       this.numDePrestados=valor;
   }
   public int getPrestados(){
       return numDePrestados;
   }
   public void setPrestado(int valor){
       this.prestado=valor;
   }
   public int getPrestado(){
       return prestado;
   }
   
   
   
   public boolean prestamo(int cantidad){
   boolean prestamo;
   int operacion;
   
      this.numDeEjemplares-=cantidad; //restamos las unidades que hay por las que queremos llevarnos
      this.numDePrestados+=cantidad;
      if (this.numDeEjemplares<this.numDePrestados){
          prestamo=false;
      }else{
          prestamo=true;
          this.prestado++; //como se ha podido hacer el prestamo le sumamos 1
      }
      return prestamo;
   }//funcion prestamo
   
   public void devolucion(int valor){
       this.numDeEjemplares+=valor;
       this.numDePrestados-=valor;
   }//funcion devolucion
   
   public boolean perdido(int valor){
       boolean realizado;
       
       this.numDeEjemplares-=valor;
       if(numDeEjemplares<0){
           realizado=false;
       }else{
           realizado=true;
       }
       return realizado;
   }//creamos la funcion perdido
   
   public void mostrarDatos(){
       System.out.println(this.titulo);
       System.out.println(this.editorial);
       System.out.println(this.autor);
       System.out.println(this.numDeEjemplares);
       System.out.println(this.numDePrestados);
       System.out.println(this.prestado);
   }//creamos la funcion mostrar datos para que nos de toda la informacion
}


