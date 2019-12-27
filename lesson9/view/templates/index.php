  <div class="row">
      <div class="col">
          <h1 class="main-page__header"><?php echo $this->data['mainPage']->getTitle(); ?></h1>
          <img class="main-page__image" src="/img/<?php echo $this->data['mainPage']->getImage(); ?>" alt="Main photo with me">
          <article class="main-page__article"><?php echo $this->data['mainPage']->getText() ?></article>
          <cite class="main-page__author"><?php echo $this->data['mainPage']->getAuthor() ?></cite>
      </div>
  </div>
