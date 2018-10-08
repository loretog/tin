<?php element( 'header' ); ?>

<?php
	$parts_id = $_GET[ 'parts_id' ];
	$parts = $DB->query( "SELECT * FROM parts WHERE parts_id = $parts_id " ); 
	$part = $parts->fetch_object();
?>

<form method="post"> 
<div class="nikay">
	<input type="hidden" name="action" value="update_parts">	
	<input type="hidden" class="form-control"  name="parts_id" value="<?php echo $parts_id ?>">
	<label>Title: </label>  
	<input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $part->title?>"><br>
	<label>Number: </label>  
	<input type="text" class="form-control" name="number" placeholder="number" value="<?php echo $part->number ?>"><br>

	
	<input type="submit" class="btn btn-primary" value="Update Parts">
	
	<button class="btn btn-primary add-column">Add Column </button> 

	<br>
	<br>
	  


	<div class="parts-columns">
		<?php 
			// kwaon ang tanan nga columns sng amo ni nga part
			$columns = $DB->query( "SELECT * FROM columns WHERE part_id = $parts_id AND parent_id = 0" );
			if( $columns->num_rows ) {
				echo "<div class='column-wrapper'>";
				while( $column = $columns->fetch_object() ) {
					echo "<div class='col-lg-8'><h3>Columns</h3><input type='text' name='column_name[]' class='form-control' value='{$column->title}'><span class='btn btn-xs btn-danger remove-column remove-column' data-column-id='$column->columns_id'>Remove</span><span class='btn btn-xs btn-info add-sub-column' data-parent-id='$column->columns_id' data-part-id='$parts_id'>Sub-column</span></div>";
					echo "<div class='col-lg-4'><h3>Sub-Columns</h3>";
					$subcolumns = $DB->query( "SELECT * FROM columns WHERE parent_id = {$column->columns_id}" );		
					while( $sc = $subcolumns->fetch_object() ) {
						echo "<span class='badge badge-primary'><span class='edit-subcolumn' data-column-id='{$sc->columns_id}'>{$sc->title}</span> <span class='glyphicon glyphicon-remove remove-subcolumn' data-column-id='{$sc->columns_id}'></span></span> ";
					}
					echo "</div>";
				}
				echo "</div>";				
			}
		?>
	</div>
	
	

</div>
</form>

<style type="text/css">
	.edit-subcolumn, .remove-subcolumn { cursor: pointer; }
	.remove-subcolumn:hover { color: red; }
	.edit-subcolumn:hover { text-decoration: underline; }
</style>

<script type="text/javascript">
	jQuery(function($) {
		$( ".add-column" ).click(function() {
            $( ".parts-columns" ).append( "<div class='column-wrapper'><input type='text' name='column_name_x[]' class='form-control'><span class='remove-column'>Remove</span></div>" );

            return false;
        });
		$( document ).on( 'click', '.remove-column', function() {
			$this = $( this );
			column_id = $this.data( 'column-id' );			

			$.ajax({
				"type": "post",
				"data": { "action": "remove_column", "column_id": column_id },
				"success": function( response ) {
					console.log( response );
				}
			});
		});
		$( document ).on( "click", ".add-sub-column", function() {
			title = prompt( "Enter name of Subcolumn", "" );
			if( title ) {
				parent_id = $( this ).data( "parent-id" );
				part_id = $( this ).data( 'part-id' );
				$.ajax({
					"type": "post",
					"data": { "action": "add_subcolumn", "parent_id": parent_id, "part_id": part_id, "title": title },
					"success": function( response ) {
						//console.log( response );
						window.location.reload();
					}
				});
			} else {
				alert( "Please enter name for subcolumn" );
			}
		});
		$( document ).on( 'click', '.edit-subcolumn', function() {
			$this = $( this );
			subcolumn_id = $this.data( 'column-id' );			

			$.ajax({
				"type": "post",
				"data": { "action": "remove_column", "column_id": subcolumn_id },
				"success": function( response ) {
					console.log( response );
				}
			});
		});
	});
</script>

<?php element( 'footer' ); ?>