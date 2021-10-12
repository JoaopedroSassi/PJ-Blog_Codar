<?php
   include_once ('templates/header.php');
?>
   <div id="main-contact-container">
      <div id="img-contact">
         <img src="img/email.svg" alt="">
      </div>
      <div id="contact-container">
         <h2>Entre em contato!</h2>
         <p>Caso queira entrar em contato, mande uma mensagem!</p>
         <form id="form-contact" action="#" method="POST">
            <div>
               <input type="text" name="nome" placeholder="Digite seu nome...">
            </div>
            <div>
               <input id="email" type="email" name="email" placeholder="Digite seu e-mail...">
            </div>
            <div>
               <textarea name="msg" placeholder="Sua mensagem..."></textarea>
            </div>
            <input class="btn-contact" type="submit" value="Enviar">
         </form>
      </div>
   </div>
<?php
   include_once ('templates/footer.php');
?>
