<div class="row">
  <div class="col">
    <ul>
      <?php foreach ( $this->data['guestbook']->getData() as $record ): ?>
        <li><?php echo $record->getMessage() ?></li>
      <?php endforeach; ?>
    </ul>
    <form action="send.php" method="post">
      <input type="text" name="guestBookRecord" id="">
      <br>
      <br>
      <button type="submit">Send Record</button>
    </form>
  </div>
</div>