<div class="col">
	<div class="card shadow-sm">
	<?php if ($product["sale"] != 0){ ?>
					<div style="color:red;">SALE</div>
			<?php  } ?>

			<?php if ($product["new"] != 0){ ?>
					<div style="color:red;">НОВИНКА</div>
			<?php  } ?>
			
		
		<img class="bd-placeholder-img card-img-top" src="img/products/<?php echo $product['img']; ?>">
		<div class="card-body">
		
		<p class="card-text"><a href="product-page.php?productId=<?php echo $product['id']; ?>"><?php echo $product['title']; ?></a></p>

		<p class="card-text"><?php echo mb_strimwidth($product["description"], 0, 40, '...');?></p>
		<div class="d-flex justify-content-between align-items-center">
			<div class="btn-group">
				<div><?php echo $product['price'];?>&ensp;</div>
				
			<button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php?id=<?php echo $product["id"]; ?>">Купить</a></button>
			</div>
			<small class="text-muted"><?php echo $product["name"];?></small>
		</div>
		</div>
	</div>
</div>