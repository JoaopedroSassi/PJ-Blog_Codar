<?php
   include_once ('templates/header.php');

   if (isset($_GET['id'])) {
      $post_id = $_GET['id'];
      $current_post;

      foreach ($posts as $post ) {
         if ($post['id'] == $post_id) {
            $current_post = $post;
         }
      }
   }
?>
   <main id="post-container">
      <div class="content-container">
         <h1 id="main-title"><?= $current_post['title'] ?></h1>
         <p id="post-description"><?= $current_post['description'] ?></p>
         <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $current_post['img'] ?>" alt="<?= $current_post['title'] ?>">
         </div>
         <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, praesentium libero nulla ad reiciendis quam? Molestiae magni sint mollitia consequuntur iure ullam sapiente dolore nulla? Quia error optio a odio.
         Quo modi similique facilis ullam totam assumenda, hic, magni esse odio dolore ipsa quod reiciendis aliquam minus cupiditate eius autem nisi unde vel consectetur voluptas libero? Dolorem architecto et cumque.
         Earum voluptate, non nostrum quae ea tempora cum sunt commodi inventore, ab reiciendis optio odit natus iste dolore perspiciatis laudantium, voluptatum ipsa aspernatur! Esse minima itaque hic nobis omnis quae.
         Maiores autem atque, assumenda quia repellendus voluptatibus in illum beatae dolorum? Odio temporibus eius quam eaque, nemo quis expedita, magnam aperiam excepturi voluptate veniam modi ex iure, culpa itaque? Sit?
         Laborum a dolores est ea adipisci soluta provident odio doloribus consectetur autem vero eos rem voluptas, officia, perferendis, vel animi. Similique iure eveniet officia sed velit ut error ullam atque?</p>
         <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, praesentium libero nulla ad reiciendis quam? Molestiae magni sint mollitia consequuntur iure ullam sapiente dolore nulla? Quia error optio a odio.
         Quo modi similique facilis ullam totam assumenda, hic, magni esse odio dolore ipsa quod reiciendis aliquam minus cupiditate eius autem nisi unde vel consectetur voluptas libero? Dolorem architecto et cumque.
         Earum voluptate, non nostrum quae ea tempora cum sunt commodi inventore, ab reiciendis optio odit natus iste dolore perspiciatis laudantium, voluptatum ipsa aspernatur! Esse minima itaque hic nobis omnis quae.
         Maiores autem atque, assumenda quia repellendus voluptatibus in illum beatae dolorum? Odio temporibus eius quam eaque, nemo quis expedita, magnam aperiam excepturi voluptate veniam modi ex iure, culpa itaque? Sit?
         Laborum a dolores est ea adipisci soluta provident odio doloribus consectetur autem vero eos rem voluptas, officia, perferendis, vel animi. Similique iure eveniet officia sed velit ut error ullam atque?</p>
      </div>
      
      <aside id="nav-container">
         <h3 id="tags-title">Tags</h3>
         <ul class="tag-list">
            <?php foreach ($current_post['tags'] as $tag): ?>
               <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
         </ul>
         <h3 id="categories-title">Categorias</h3>
         <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
               <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
         </ul>
      </aside>
   </main>
<?php
   include_once ('templates/footer.php');
?>
