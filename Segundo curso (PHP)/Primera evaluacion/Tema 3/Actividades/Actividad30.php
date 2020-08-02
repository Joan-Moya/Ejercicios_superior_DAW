<?php

        $dia=27;
        $mes="diciembre";
            
            

            if(($mes=="enero" && $dia>=20) || ($mes=="febrero" && $dia<=18)){
                    echo"Tu signo es Acuario";

            }else if(($mes=="febrero" && $dia>=19) || ($mes=="marzo" && $dia<=20)){
                    echo"Tu signo es Piscis";

            }else if(($mes=="marzo" && $dia>=21) || ($mes=="abril" && $dia<=19)){
                    echo"Tu signo es Aries";
                    
            }else if(($mes=="abril" && $dia>=20) || ($mes=="mayo" && $dia<=20)){
                    echo"Tu signo es Tauro";

            }else if(($mes=="mayo" && $dia>=21) || ($mes=="junio" && $dia<=20)){
                    echo"Tu signo es Geminis";

            }else if(($mes=="junio" && $dia>=21) || ($mes=="julio" && $dia<=22)){
                    echo"Tu signo es Cancer";

            }else if(($mes=="julio" && $dia>=23) || ($mes=="agosto" && $dia<=22)){
                    echo"Tu signo es Leo";

            }else if(($mes=="agosto" && $dia>=23) || ($mes=="septiembre" && $dia<=22)){
                    echo"Tu signo es Virgo";

            }else if(($mes=="septiembre" && $dia>=23) || ($mes=="octubre" && $dia<=22)){
                    echo "Tu signo es Libra";

            }else if(($mes=="octubre" && $dia>=23) || ($mes=="noviembre" && $dia<=21)){
                    echo "Tu signo es Escorpio";

            }else if(($mes=="noviembre" && $dia>=22) || ($mes=="diciembre" && $dia<=21)){
                    echo"Tu signo es Sagitario";

            }else if(($mes=="diciembre" && $dia>=22) || ($mes=="enero" && $dia<=19)){
                    echo"Tu signo es Capricornio";

            }
       
            
?>