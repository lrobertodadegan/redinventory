<?php $__env->startSection('css'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="container-fluid">
    <div class="row centro">
        <div class="col-sm-8 centroConteudo">
            <h4>Últimos posts</h4>
            <div class="centroPost">
                <a href="/posts/1">
                    <div class="centroPostTitulo">
                        <h5>Titulo</h5>
                    </div> 
                    <div class="centroPostConteudo">
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                    </div>
            <div class="centroPost">
                <a href="/posts/2">
                    <div class="centroPostTitulo">
                        <h5>Titulo</h5>
                    </div>
                    <div class="centroPostConteudo">
                        <p>texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </a>
            </div>
            <div class="centroPost">
                <a href="/posts/3">
                    <div class="centroPostTitulo">
                        <h5>Titulo</h5>
                    </div>
                    <div class="centroPostConteudo">
                        <p>texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </a>
            </div>
            <div class="centroPost">
                <a href="/posts/4">
                    <div class="centroPostTitulo">
                        <h5>Titulo</h5>
                    </div>
                    <div class="centroPostConteudo">
                        <p>texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </a>
            </div>
            <div class="centroPost">
                <a href="/posts/5">
                    <div class="centroPostTitulo">
                        <h5>Titulo</h5>
                    </div>
                    <div class="centroPostConteudo">
                        <p>texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col centroLateral">
            <div class="centroLateralPosts">
                <h5>Posts</h5>
                <ul>
                    <li>
                        <a href="#">Post 1</a>
                    </li>
                    <li>
                        <a href="#">Post 2</a>
                    </li>
                    <li>
                        <a href="#">Post 3</a>
                    </li>
                    <li>
                        <a href="#">Post 4</a>
                    </li>
                    <li>
                        <a href="#">Post 5</a>
                    </li>
                </ul>
            </div>
            <div class="text-center centroLateralFb">
                <div id="fb-root"></div>
                <div class="fb-page centroLateralFB" data-href="https://www.facebook.com/facebook/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook/">Facebook</a></blockquote></div>
            </div>
            <div class="text-center centroLateralInstagram">
                <iframe src="//instagram.com/p/b6x-uok2_e/embed" height="500px" frameborder=0></iframe>
            </div>
            <div class="text-center centroLateralTwitter">
                <a class="twitter-timeline" height="500px" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;
    
        js = d.createElement(s); js.id = id;
    
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
    
        fjs.parentNode.insertBefore(js, fjs);
    
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>