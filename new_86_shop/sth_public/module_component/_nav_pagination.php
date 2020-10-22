<div class="nav-pagination" id="pagination">
    <div class="container">
        <a href="#" class="hidden-mobile"><?php echo $pagination['first'];?></a>
        <ul>
            <li><a href="#"><?php echo $pagination['prev'];?></a></li>
            <li><a href="#" class="active">1</a></li>
            <li class="hidden-mobile"><a href="#">2</a></li>
            <li class="hidden-mobile"><a href="#">3</a></li>
            <li class="hidden-mobile"><a href="#">4</a></li>
            <li class="hidden-mobile"><a href="#">5</a></li>
            <li class="hidden-mobile"><a href="#">6</a></li>
            <li class="hidden-mobile"><a href="#">7</a></li>
            <li class="hidden-mobile"><a href="#">8</a></li>
            <li class="hidden-mobile"><a href="#">9</a></li>
            <li class="hidden-mobile"><a href="#">10</a></li>
            <li><a href="#"><?php echo $pagination['next'];?></a></li>
        </ul>
        <a href="#" class="hidden-mobile"><?php echo $pagination['last'];?></a>
        <p class="total"><?php echo $pagination['total'];?></p>
    </div>
</div>