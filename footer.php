
<footer>
    <div class="container">
      <div class="connect">
    <svg xmlns="http://www.w3.org/2000/svg" width="673.952" height="727.252" viewBox="0 0 673.952 727.252"><defs><style>.a{fill:rgba(247,230,212,0.22);opacity:0.148;}</style></defs><path class="a" d="M554.858,727.252l-32.93-75-189.287-431.1L118.16,727.252H0l288.054-623.5H0V0H673.952V103.749H378.389l295.562,623.5Z"/></svg>
        
        <h2>
          Connect <br />
          With Us
        </h2>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
      </div>

      <div class="misc">
        <div class="miscOne">
        <h6>menu</h6>
        <?php
          wp_nav_menu( array(
              'menu' => 'footerMenu',
              'menu_class' => 'footerMenuUl',
          ));
          ?>
      </div>
      <div class="miscOne">
        <h6>menu</h6>
        <?php
          wp_nav_menu( array(
              'menu' => 'footerMenu',
              'menu_class' => 'footerMenuUl',
          ));
          ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
  
</body>

</html>