<footer class="footer">
        <div class="widget">
            <h4 class="widget__title">Pages</h4>
              <ul class="widget__container">
                  
                  <li class="widget__title--content">
                      <a href="contact.html">Contactez moi</a>
                 </li>
                
                <li class="widget__title--content">
                        <a href="index.html">Homepage</a>    
                    </li>
                    
                   
                  <li class="widget__title--content">
                        <a href="projets.html">Projets</a>    
                    </li>
                   
                  
              </ul>     
        </div>
        <div class="widget">
                <h4 class="widget__title">Equipe</h4>
                  <ul>
                      
                      <li class="widget__title--content">
                          <a href="ecole.html">Equipe Oclock</a>
                     </li>                  
                  </ul>     
        </div>
        <div class="widget">
                <h4 class="widget__title">Archives</h4>
                  <ul>
                      <li class="widget__title--content">
                          <a href="#"> 2019</a>    
                      </li>
                  </ul>     
        </div>
    </footer>
    <!-- Layout: Footer -->
    
     <!-- Layout: Overlay -->
     <div class="overlay overlay--hidden">
     <?php
        wp_nav_menu(
            [
                'theme_location'  => 'main-menu',
                'container'       => 'nav',
                'container_class' => 'menu menu--vertical',
                'menu_class'      => 'menu__list'
            ]
        );

        
        ?>
        <button class="overlay__close-button closeOverlay"><i class="fa fa-close"></i></button>
    </div>
    <?php wp_footer(); ?>
</body>
</html>

</body>
</html>