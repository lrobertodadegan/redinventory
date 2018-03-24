
<?php $__env->startSection('css'); ?>

<style>
.contato{
    height:30%;
    color:white;
}
.contato span{
    line-height:100px;
    font-size:2em;
}
.contato a{
    color:white;
    font-size:1em;
}
.contato a:hover{
    text-transform:none;
}
.mapa{
    height:500px;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="container-fluid" style="background-image:url(<?php echo e(asset('imagens/handson2.jpg')); ?>);">
    <div class="row contato">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <span>Nós estamos aqui:</span><br>
            <a  target="_blank" href="https://www.google.com.br/maps/dir//-25.3705086,-49.1860854/@-25.3705286,-49.1881842,17z/data=!4m2!4m1!3e0">Como chegar</a>
        </div>
    </div>
    <div class="row mapa">
        <div id="mapa" style="width: 90%; margin:5%"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="http://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAPS_KEY')); ?>&amp;sensor=false"></script>
<script>
var map;
 
function initialize() {
    var latlng = new google.maps.LatLng(-25.3706512,-49.1859961);

    var options = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("mapa"), options);

    var marker = new google.maps.Marker({
        position: latlng,
        title: "EMPRESA",
        map: map
    });
}
 
initialize();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>