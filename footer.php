
<footer>
    <div class="container">
      <div class="connect">
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