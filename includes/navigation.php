<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">Table info</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">DML</a>
	  </li>	
	  <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "DDL") {?>active<?php }?>" href="DDL.php">DDL</a>
          </li>

	</ul>
</div>
