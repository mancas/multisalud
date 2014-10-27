<nav class="navbar navbar-fixed-top navbar-default multisalud-navbar" role="navigation">
  <div class="container custom-nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">
        <?php echo $this->Html->image('multisalud-logo.png', array('class' => 'brand')); ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right scrollto">
        <?php
            $path = '#home';
            if ($this->request->pass[0] != 'home') { $path = $this->request->webroot . $path; }
        ?>
        <li><a href="<?php echo $path ?>">Inicio</a></li>

        <?php
            $path = '#our-work';
            if ($this->request->pass[0] != 'home') { $path = $this->request->webroot . $path; }
        ?>
        <li><a href="<?php echo $path ?>">Nosotros</a></li>

        <?php
            $path = '#doctors';
            if ($this->request->pass[0] != 'home') { $path = $this->request->webroot . $path; }
        ?>
        <li class="dropdown"><a class="dropdown-toggle" href="<?php echo $path ?>">Servicios</a>
            <ul class="dropdown-menu sub-menu">
                <li><a href="#psicologia">Psicología</a></li>
                <li><a href="#fisioterapia">Fisioterapia</a></li>
                <li><a href="#nutricion">Nutrición y dietética</a></li>
                <li><a href="#podologia">Podología</a></li>
                <li><a href="#homeopatia">Medicina natural</a></li>
                <li><a href="#acupuntura">Acupuntura</a></li>
                <li><a href="#analisis">Análisis Clínicos</a></li>
                <li><a href="#medicina-general">Medicina General de Familia</a></li>
                <li><a href="#puericultura">Medicina General Puericultura</a></li>
            </ul>
        </li>

        <?php
            $path = '#where-we-are';
            if ($this->request->pass[0] != 'home') { $path = $this->request->webroot . $path; }
        ?>
        <li><a href="<?php echo $path ?>">Dónde estamos</a></li>

        <?php
            $path = '#contact-us';
            if ($this->request->pass[0] != 'home') { $path = $this->request->webroot . $path; }
        ?>
        <li><a href="<?php echo $path ?>">Contacta</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>