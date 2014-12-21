<div class="invoice">
	<table>
		<tr>
			<th>
				Product
			</th>
			<th>
				Quantity
			</th>
			<th>
				Total
			</th>		
		</tr>
		<?php foreach($model["items"] as &$item){ ?>
			<?php echo renderTemplate($model["itemTemplate"], $item); ?>
		<?php } ?>
	</table>
	<div class="summary">
		<div class="total-quantity">
			<span class="label">Total items:&nbsp;</span>
			<span class="qty"><?= $model["totalQuantity"] ?></span>
		</div>
		<div class="total-price">
			<span class="label">Total cost:&nbsp;</span>
			<span class="price"><?= $model["totalPrice"] ?></span>
		</div>
	</div>
</div>