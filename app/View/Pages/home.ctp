
        <div class="container marketing">
            <div class="row">
                <h2 class="featurette-heading">Áreas Sanitarias</h2>
                <div class="col-md-12 mb80">
                    <h3 class="light">
                        PSICOLOGÍA – FISIOTERAPIA – PODOLOGÍA – NUTRICIÓN Y DIETÉTICA – ANÁLISIS CLÍNICOS – ACUPUNTURA – MEDICINA NATURAL – MEDICINA GENERAL DE FAMILIA
                         – <br> MEDICINA GENERAL (PUERICULTURA)
                    </h3>
                </div>
                <div class="col-md-6">
                    <h3 class="featurette-heading">Dónde estamos</h3>
                    <p class="light address">
                        C./Doctor Antonio González Galán, 29<br>
                        Guillena 41210 (Sevilla)<br>
                        (Detrás del Centro Cívico)
                    </p>
                </div><!-- .col-md-4 -->

                <div class="col-md-6">
                    <h3 class="featurette-heading">Llámanos</h3>
                    <p class="light phones">
                        <i class="fa fa-phone"></i>955 78 69 57<br>
                        <i class="fa fa-phone"></i>666 43 37 54<br>
                        <i class="fa fa-phone"></i>646 11 44 88 
                    </p>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->

            <a  id="our-work" href=""></a>
            <hr class="featurette-divider">

            <h2  class="featurette-heading text-left">Centro MultiSalud</h2>
            <div class="row text-left pb40">
                <div class="col-md-12">
                    <?php echo $this->Html->image('programa_palm.jpg', array('class' => 'img-responsive featurette-image pull-right', 'alt' => 'Anciana feliz')); ?>

                    <p class="featurette m0 text-italics">
                        "La salud es lo más importante de nuestra vida. Bien se merece un esfuerzo para conseguirla y conservarla"
                    </p>


                    <p class="featurette m0">
                        Nuestro Equipo Sanitario cuenta con una sólida formación y experiencia nacional e internacional y desde el más sincero compromiso y respeto hacia nuestros pacientes, le ofrece entre otros los siguientes <b>servicios</b>:
                    </p>

                    <div class="col-md-7">
                        <div class="col-md-12">
                            <span class="circle">Psicología</span>
                        </div>
                        <div class="col-md-6">
                            <span class="circle">Fisioterapia</span>
                            <span class="circle">Podología</span>
                            <span class="circle">Acupuntura</span>
                            <span class="circle">Medicina General (De familia)</span>
                        </div>

                        <div class="col-md-6">
                            <span class="circle">Nutrición y Dietética</span>
                            <span class="circle">Análisis Clínicos</span>
                            <span class="circle">Medicina Natural</span>
                            <span class="circle">Medicina General (Puericultura)</span>
                        </div>
                    </div>
                </div><!-- .col-md-12 -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-md-12">
                    <p class="m0 featurette">
                        El Centro Sanitario Multisalud es pionero, en Andalucía, en la aplicación del programa <b>PALM</b> (Programa de Acción Logoterapéutica para Mayores).
                        Gracias a este Programa y bajo la supervisión del <b>profesional sanitario especializado</b>, nuestros mayores van a recuperar y/o mantener su <b>función cognitiva</b>, van a potenciar su <b>autoestima</b> y se va a posibilitar un nuevo contacto con su <b>entorno familiar y social</b> en el que vuelvan a sentirse parte importante de los mismos. Este programa se aplica asimismo a discapacitados físicos, psíquicos y sensoriales.
                    </p><!-- .featurette -->

                    <p class="featurette m0">
                        El principal objetivo es retrasar en nuestros mayores los <b>síntomas psicofísicos</b> de un envejecimiento prematuro como causa de una inactividad general prolongada, el aburrimiento y la falta de sentido de la vida. No sólo conseguimos que nuestros mayores vivan más años sino que tengan una existencia plena y llena de sentido.
                    </p>

                    <p class="featurette m0">
                        Asimismo, nuestro Centro Sanitario, desde el ejercicio de responsabilidad que significa interesarnos por todos los aspectos que puedan incidir sobre la calidad de vida de nuestros pacientes y usuarios, pone a disposición de estos, servicios complementarios entre los que están el <b>asesoramiento deportivo</b> personalizado impartido por un entrenador con título nacional o  el <b>asesoramiento integral</b> en seguros, fundamentalmente de salud y a cargo del correspondiente profesional especializado. 
                    </p>
                </div>
            </div>

            <hr id="doctors" class="featurette-divider">
        </div><!-- .container .marketing -->


        <section>
            <div class="container">
                <h2 id="psicologia" class="featurette-heading pb40">Servicios</h2>

                <?php echo $this->element('doctors-psicologia'); ?>

                <hr id="fisioterapia" class="featurette-divider">

                <?php echo $this->element('doctors-fisioterapia'); ?>

                <hr id="nutricion" class="featurette-divider">

                <?php echo $this->element('doctors-nutricion'); ?>

                <hr id="podologia" class="featurette-divider">

                <?php echo $this->element('doctors-podologia'); ?>

                <hr id="homeopatia" class="featurette-divider">

                <?php echo $this->element('doctors-homeopatia'); ?>

                <hr id="acupuntura" class="featurette-divider">

                <?php echo $this->element('doctors-acupuntura'); ?>

                <hr id="analisis" class="featurette-divider">

                <?php echo $this->element('doctors-analisis'); ?>

                <hr id="medicina-general" class="featurette-divider">

                <?php echo $this->element('doctors-medicina-general'); ?>

                <hr id="puericultura" class="featurette-divider">

                <?php echo $this->element('doctors-medicina-general-puericultura'); ?>

                <hr id="where-we-are" class="featurette-divider">
            </div><!-- .container -->
        </section>


        <section>
            <div class="find-us">
                <div class="container">
                    <div class="row nmb">
                        <div class="col-md-12">
                            <h2>Encuéntranos</h2>
                        </div><!-- .col-md-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .find-us -->

            <div id="map">

            </div>
        </section><!-- #map -->

        <?php echo $this->element('contact-us'); ?>

        <?php echo $this->element('footer'); ?>

    <?php
        echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'scrollTo.min'));
        echo $this->element('google_maps');
        echo $this->element('dropdown-menu');
    ?>

    <script type="text/javascript">
        $('.close').click(function(e) {
            e.preventDefault();
            $(this).parent().slideUp();
        });

        $(".scrollto a").click(function (event) {
            event.preventDefault();
            var target = $(this).attr('href');
            $.scrollTo(target, 600);
        });

        <?php $this->AjaxForm->ajaxFormScript('.asynchronous', '.loader'); ?>
    </script>