<!-- pdf card -->
<div class="w3-card w3-white">

  <div class="w3-container w3-center">
    <h3><?php echo e($book->name); ?></h3>
    <img src="https://st2.depositphotos.com/1055089/5923/v/950/depositphotos_59232215-stock-illustration-modern-vector-book-cover-template.jpg" alt="Avatar" style="width:50%">

    <button onclick="document.getElementById('id0<?php echo e($book->id); ?>').style.display='block'" class="w3-button">Open Modal</button>
  </div>

</div>

<!-- The Modal -->
<div id="id0<?php echo e($book->id); ?>" class="w3-modal w3-animate-zoom" style="height: 100%;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id0<?php echo e($book->id); ?>').style.display='none'"
      class="w3-button w3-red w3-display-topright">&times;</span>
      <h3><?php echo e($book->name); ?></h3>
      <embed allow="fullscreen" fetchpriority="auto" src="<?php echo e(Storage::url( $book->url ).'#toolbar=0'); ?>" frameborder="1" style="width: 100%; height: 1000px;"></embed>
    </div>
  </div>
</div><?php /**PATH D:\projects\MobiSchool.com\resources\views/components/lib-card.blade.php ENDPATH**/ ?>