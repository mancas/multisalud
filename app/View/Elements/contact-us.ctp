        <section id="contact-us">
            <div class="container">
                <h4 class="featurette-heading pb40">Atención al cliente</h4>
                <?php echo $this->Form->create('Contact', array('role' => 'form', 'class' => 'asynchronous', 'url' => array('controller' => 'pages', 'action' => 'contact', 'admin' => false), 'inputDefaults' => array('label' => false, 'div' => false))); ?>

                <!-- Respond Collapse -->
                <div id="notifications" class="alert mb40 form-notifications">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <span></span>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <?php echo $this->Form->input('Contact.name', array('class' => array('form-control'), 'required' => 'required', 'placeholder' => 'Nombre y apellidos')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $this->Form->input('Contact.email', array('class' => array('form-control'), 'required' => 'required', 'placeholder' => 'Email', 'type' => 'email')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $this->Form->input('Contact.message', array('class' => array('form-control'), 'required' => 'required', 'placeholder' => 'Escribe tu consulta', 'rows' => 10)); ?>
                        </div>

                        <?php 
                            echo $this->Form->button('Enviar', array('class' => array('btn', 'btn-primary'), 'type' => 'submit'));
                            echo $this->Html->image('ajax-loader.gif', array('class' => 'loader'));
                        ?>
                    </div><!-- .col-md-7 -->

                    <div class="col-md-5">
                        <?php echo $this->Html->image('contact-us.jpg', array('class' => 'img-responsive' )); ?>
                    </div><!-- .col-md-5 -->
                </div><!-- .row -->

                <?php echo $this->Form->end(); ?>
            </div><!-- .container -->
        </section><!-- #contact-us -->