        <hr>
        <footer>
          <p>&copy; Copyright MVC Framework from gibb/BBC
          </br>
          A project by Jerico Lua & Sivakeerthan Vamanarajasekaran</p>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>git
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
        <?php if(isset($extra)){
                echo $extra ;
        }
            ?>
        <?php
        if(!isset($_SESSION)) {
            session_start();
        }
        if(isset($_SESSION['err'])):
        foreach($_SESSION['err'] as $error):?>
        <script type="text/javascript">
            M.toast({html: '<?=$error?>'})
        </script>
        <?php endforeach;
                endif;
                $_SESSION['err'] = null; ?>

  </body>
</html>
