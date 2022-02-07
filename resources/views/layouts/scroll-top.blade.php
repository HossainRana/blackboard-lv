

<style>
    .scroll-top-container{
        width: 100%;
        height: 100%;
        /*display: none;*/
    }
    .scroll-top{
        height: 100%;
        position: fixed;
        bottom: 20px;
        right: 30px;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        z-index: 9;
        cursor: pointer;
        transform: translateY(-100%);
        transition: all 1s ease-in;
    }
    .scroll-top i{
        color: #ffffff;
        font-size: 1.2rem;
        background-color: #e74a2b7d;
        border-radius: 4px;
        padding: 15px 15px;
    }
    .transitionScroll{
        transform: translateY(0%);
        transition: all 1s ease-in;
    }
    .fold-up{
        transform: translateY(-100%) !important;
        transition: all 1s ease-in;
        height: 100%;
    }
</style>


<div class="scroll-top-container" id="scrollTopClick" >
    <div class="scroll-top">
        <i class="fa fa-arrow-up" aria-hidden="true" onclick="scrollTopbtn()"></i>
    </div>
</div>


<script>
    function scrollTopbtn() {
        $('body,html').animate({scrollTop: 0}, 1600);
    }
</script>