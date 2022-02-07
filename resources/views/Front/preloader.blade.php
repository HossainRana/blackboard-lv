
<style>

    /*          Preloader           */

    .preloader{
        position: fixed;
        z-index: 10000;
        height: 100vh;
        width: 100vw;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ffffff;
    }

    .preloader-img-c{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .preloader-img-c img{
        width: 100px;
    }
</style>

<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="preloader-img-c">
        <img src="{{asset('Front/site/images/logo')}}/pre-loader-blackboard-digital.gif">
    </div>
</div>

<script>
    $(function(){
        setTimeout("$('#preloader').fadeOut('slow')", 3000)
    })
</script>