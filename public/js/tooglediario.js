    $(document).ready(function(){
        $(".aceite").toggle();
        $(".refrigerante").toggle();
        $(".neumaticos").toggle();
        $(".tipo").toggle();
        $(".asientos").toggle();
        $(".carroceria").toggle();
        $(".correa").toggle();
        $(".equipo").toggle();
        $(".lucesinternas").toggle();
        $(".elucesinternas").toggle();
        $(".lucesexternas").toggle();
        $(".elucesexternas").toggle();
        $(".elucesemexternas").toggle();
        $(".clucesinternas").toggle();
        $(".clucesexternas").toggle();
        $(".clucescruce").toggle();
        $(".cluceseme").toggle();
        $(".reparado").toggle();
        $(".diesel").toggle();
        $(".gas").toggle();

        $('#cnaceitem').on('change', function() {
            if(this.value == "No"){
                $(".aceite").toggle();
            }
            else{
                 $(".aceite").toggle();
            };
        });
        $('#cnrefrigerante').on('change', function() {
            if(this.value == "No"){
                $(".refrigerante").toggle();
            }
            else{
                 $(".refrigerante").toggle();
            };
        });
        $('#airene').on('change', function() {
            if(this.value == "No"){
                $(".neumaticos").toggle();
            }
            else{
                 $(".neumaticos").toggle();
            };
        });
        $('#cncomb').on('change', function() {
            if(this.value == "No"){
                $(".tipo").toggle();
            }
            else{
                 $(".tipo").toggle();
            };
        });
        $('#ceiasientos').on('change', function() {
            if(this.value == "No"){
                $(".asientos").toggle();
            }
            else{
                 $(".asientos").toggle();
            };
        });
        $('#ceecarroceria').on('change', function() {
            if(this.value == "No"){
                $(".carroceria").toggle();
            }
            else{
                 $(".carroceria").toggle();
            };
        });
        $('#ccorrea').on('change', function() {
            if(this.value == "No"){
                $(".correa").toggle();
            }
            else{
                 $(".correa").toggle();
            };
        });
        $('#ceseguridad').on('change', function() {
            if(this.value == "No"){
                $(".equipo").toggle();
            }
            else{
                 $(".equipo").toggle();
            };
        });
        $('#ceflucesi').on('change', function() {
            if(this.value == "No"){
                $(".lucesinternas").toggle();
            }
            else{
                 $(".lucesinternas").toggle();
            };
        });
        $('#celucesi').on('change', function() {
            if(this.value == "No"){
                $(".elucesinternas").toggle();
            }
            else{
                 $(".elucesinternas").toggle();
            };
        });
        $('#celucese').on('change', function() {
            if(this.value == "No"){
                $(".lucesexternas").toggle();
            }
            else{
                 $(".lucesexternas").toggle();
            };
        });
        $('#celucesc').on('change', function() {
            if(this.value == "No"){
                $(".elucesexternas").toggle();
            }
            else{
                 $(".elucesexternas").toggle();
            };
        });
        $('#celucesem').on('change', function() {
            if(this.value == "No"){
                $(".elucesemexternas").toggle();
            }
            else{
                 $(".elucesemexternas").toggle();
            };
        });
        $('#camlucesi').on('change', function() {
            if(this.value == "No"){
                $(".clucesinternas").toggle();
            }
            else{
                 $(".clucesinternas").toggle();
            };
        });
        $('#camlucese').on('change', function() {
            if(this.value == "No"){
                $(".clucesexternas").toggle();
            }
            else{
                 $(".clucesexternas").toggle();
            };
        });
        $('#camlucesc').on('change', function() {
            if(this.value == "No"){
                $(".clucescruce").toggle();
            }
            else{
                 $(".clucescruce").toggle();
            };
        });
        $('#camlucesem').on('change', function() {
            if(this.value == "No"){
                $(".cluceseme").toggle();
            }
            else{
                 $(".cluceseme").toggle();
            };
        });
        $('#frefrigerante').on('change', function() {
            if(this.value == "Si"){
                $(".reparado").toggle();
            }
            else{
                 $(".reparado").toggle();
            };
        });
        $('#combust').on('change', function() {
            if(this.value == "Gas"){
                $(".gas").toggle();
            }
            else{
                 $(".diesel").toggle();
            };
        });
});