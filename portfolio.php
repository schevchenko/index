<?php
  //  require_once 'index.php';
?>
<div id="img-container">
    <div id="header-portfolio">
        Мои работы
    </div>

    <div class="portfolio">
        <div class="link" style="cursor: pointer;">
            <p><a href="http://www.vk.com" target="_blank">&rarr; на сайт </a></p>
        </div>
        <a href="#">
            <img src="/images/tmp.jpg">
        </a>
    </div>
    <div class="portfolio">
        <div class="link" style="cursor: pointer; "></div>
        <a href="#">
            <img src="/images/tmp.jpg">
        </a>
    </div>
    <div class="portfolio">
        <a href="#"></a>
        <img src="/images/tmp.jpg">
    </div>
</div>

<script language="javascript">
        $('.portfolio a').mouseenter(function(){
           // alert($(this.parentNode.children[0].length));
            $(this.parentNode.children[0]).fadeIn('slow', function() {
                $('#footer').text('Zeitgeist');
            });
        });
        $('.link').mouseleave(function(){
            $('.link').fadeOut('slow', function() {
                $('#footer').text('Zeitgeist');
            });
        }) 

</script>