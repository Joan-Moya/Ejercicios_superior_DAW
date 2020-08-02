package objetos;
public class hospital {
     int codHospital;
    String nombreHospital;
    String direccion;
    String telefono;
    String poblacion;
    String codPostal;
    int habitacionesTotales;
    int habitacionesOcupadas;
    
    
    //CREAMOS EL CONTRUCTOR PARA METER LOS DATOS A LOS ATRIBUTOS
    public hospital(int codHospital, String nombreHospital,String direccion, String telefono, String poblacion,
    String codPostal, int habitacionesTotales, int habitacionesOcupadas){
        
        this.codHospital=codHospital;
        this.nombreHospital=nombreHospital;
        this.direccion=direccion;
        this.telefono=telefono;
        this.poblacion=poblacion;
        this.codPostal=codPostal;
        this.habitacionesTotales=habitacionesTotales;
        this.habitacionesOcupadas=habitacionesOcupadas;
    }
    
    //AHORA VAMOS A HACER LOS GETS PARA QUE NOS DEN LA INFO DE LOS ATRIBUTOS
    
    public void setCodHospital(int hos){
             this.codHospital=hos;
    }
    public int getCodHospital(){
        return this.codHospital;
    }
            public void setNombreHospital(String nombreHos){
                this.nombreHospital=nombreHos;
            }
            public String getNombreHospital(){
                return nombreHospital;
            }
                    public void setDireccion(String dire){
                        this.direccion=dire;
                    }
                    public String getDireccion(){
                        return direccion;
                    }
                            public void setTelefono(String tel){
                               this.telefono=tel;
                           }
                            public String getTelefono(){
                               return telefono;
                           }
                                    public void setPoblacion(String pobl){
                                       this.poblacion=pobl;
                                   }
                                    public String getPoblacion(){
                                       return poblacion;
                                   }
                                            public void setCodPostal(String codPos){
                                              this.codPostal=codPos;
                                          }
                                            public String getCodPostal(){
                                              return codPostal;
                                          }
                                                    public void setHabitacionesTotales(int habT){
                                                      this.habitacionesTotales=habT;
                                                  }
                                                     public int getHabitacionesTotales(){
                                                      return habitacionesTotales;
                                                  }
                                                            public void setHabitacionesOcupadas(int habO){
                                                            this.habitacionesOcupadas=habO;
                                                        }
                                                             public int getHabitacionesOcupadas(){
                                                            return habitacionesOcupadas;
                                                        }   
                                                             
   public boolean ingreso(int numIngreso){
       int ocupadasTotales;
       boolean resultado;
       
       ocupadasTotales=this.habitacionesOcupadas+numIngreso;
       
       if(ocupadasTotales<=this.habitacionesTotales){
           this.habitacionesOcupadas=ocupadasTotales;
           resultado=true;
       }else{
           resultado=false;
            System.out.println("No se ha podido hacer el ingreso");
       }
       return resultado;
   }
   
   public boolean alta(int numAltas){
       boolean resultado;

       int ocupadasTotales=this.habitacionesOcupadas- numAltas;
       if (this.habitacionesOcupadas>=numAltas){
           resultado= true;
           habitacionesOcupadas=ocupadasTotales;
       }else{
           resultado=false;
           System.out.println("No se ha podido realizar el alta");
       }
       return resultado;
   }
   
   public void muestraDatos(){
       System.out.println("El codigo del hospital es: "+this.codHospital);
       System.out.println("El nombre del hospital es: "+this.nombreHospital);
       System.out.println("La direccion del hospital es: "+this.direccion);
       System.out.println("El telefono del hospital es: "+this.telefono);
       System.out.println("La poblacion del hospital es: "+this.poblacion);
       System.out.println("El codigo postal del hospital es: "+this.codPostal);
       System.out.println("El numero de habitaciones totales del hospital es: "+this.habitacionesTotales);
       System.out.println("El numero de habitaciones ocupadas del hospital es: "+this.habitacionesOcupadas);
   }
}
