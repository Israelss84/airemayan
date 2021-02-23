<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Cotizador | AireAcondicionadoMayan</title>

	<?php include 'estructura/styles.php'; ?>
    
</head>
<body>

<?php include 'estructura/header.php'; ?>
    
<!--Start service single area-->
<section id="service-single-area">
    <div class="container">
        <div class="sec-title">
            <h1><span>Cotizar</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-12  pull-right">
                <div class="service-single-content">
                    
                    <div class="appoinment-form">
                        
                        <form id="appoinment-form" class="default-form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" value="" placeholder="Nombre*" required="" aria-required="true" type="text">
                                    <input name="email" value="" placeholder="E-mail*" required="" aria-required="true" type="email">
                                    <input name="phone" value="" placeholder="Teléfono*" aria-required="true" type="text">
                                </div>
                                <div class="col-md-6">
                                    <select class="selectmenu" id="ui-id-1" name="servicio" required>
                                        <option disabled="">Seleccione un servicio</option>
                                        <option>Venta de aire acondicionado</option>
                                        <option>Instalación de equipos de climatización</option>
                                        <option>Mantenimiento y Servicios</option>                                       
                                    </select>
                                    <textarea name="message" placeholder="Su Mensaje.." required="" aria-required="true"></textarea>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">                                
                                    <button class="thm-btn bg-1" type="submit" data-loading-text="Por favor espere...">Enviar Cotización</button>
                                </div>
                            </div>   
                        </form>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>    
</section>
<!--End service single area--> 
  
<?php include 'estructura/footer.php'; ?>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php include 'estructura/scripts.php'; ?>

</body>

</html>