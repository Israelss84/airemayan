<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Contacto | AireAcondicionadoMayan</title>

	<?php include 'estructura/styles.php'; ?>
    
</head>
<body>

<?php include 'estructura/header.php'; ?>


    
<!--Start contact-->
<section class="contact-area">
    <div class="container">
        <div class="sec-title">
            <h1><span>Contáctanos</span></h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form">                    
                    <form id="contact-form" name="contact_form" class="default-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" value="" placeholder="Nombre*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" value="" placeholder="E-mail*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" value="" placeholder="Teléfono">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="asunto" value="" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Su Mensaje.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">                                
                                <button class="thm-btn bg-1" type="submit" data-loading-text="Por favor espere...">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="right-info-box">
                    <div class="top">
                        <div class="iocn-holder">
                            <span class="flaticon-location"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Dirección</h3>
                            <span>Ciudad de México, México.</span>    
                        </div>
                    </div>
                    <div class="middle">                        
                        <p><span>Dirección 1</span> <br>Avenida Francisco del paso y Troncoso 1113 C, Colonia Los Picos de Iztacalco,
                                                  Delegación Iztacalco ,C.P. 08770</p>
                        <p><span>Dirección 2</span> <br>Calle Libertad Mz 11 Lt 9 Casa 4, Los Héroes Ecatepec 5ta Sección. Estado de México.</p>    
                    </div>
                    <div class="bottom">                        
                        <ul>
                            <li><span>Local:</span> 1038-2834</li>
                            <li><span>Cel:</span> 044 55 5189-3671</li>
                            <li><span>E-mail:</span> contacto@dominio.com </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact-->  

<!--Start Google map area-->
<section class="google-map-area">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="19.5686056" 
        data-map-lng="-99.0499241" 
        data-icon-path="images/resources/map-marker2.png" 
        data-map-title="Aire Acondicionado Mayan México"       
        data-markers='{           
            "marker-1": [19.3903575, -99.1126032, "<h5>Aire Acondicionado Mayan México</h5><p>Avenida Francisco del paso y Troncoso 1113 C, Colonia Los Picos de Iztacalco,  Delegación Iztacalco. Ciudad de México. C.P. 08770.</p>"],
            "marker-2": [19.616937, -99.015729, "<h5>Aire Acondicionado Mayan México</h5><p>Calle Libertad Mz 11 Lt 9 Casa 4, Los Héroes Ecatepec 5ta Sección. Estado de México.</p>"]
        }'>

    </div>
</section>
<!--End Google map area-->   
  
<?php include 'estructura/footer.php'; ?>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php include 'estructura/scripts.php'; ?>

</body>

</html>