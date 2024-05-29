<?php
include("template/head.php");
?>
<header>
    <div class="container mt-3">
        <h1>Products</h1>
    </div>
</header>
<div class="container mt-6">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <h3 class="card-header">IBM 5150</h3>
                <div class="card-body">
                    <h5 class="card-title">IBM Product</h5>
                    <h6 class="card-subtitle text-muted">Affordable</h6>
                </div>
                <img src="img/IBM5150.png" class="card-img-top" alt="5150">
                <div class="card-body">
                    <p class="card-text">The IBM Personal Computer (in Spanish, IBM personal computer or IBM personal computer), commonly known as the IBM PC, was the original version and progenitor of the IBM PC compatible hardware platform.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Developer: Philip Donald Estridge</li>
                    <li class="list-group-item">Manufacturer: IBM</li>
                    <li class="list-group-item">Processor: Intel 8088 @ 4.77 MHz</li>
                    <li class="list-group-item">Memory: 16KB ~ 640KB</li>
                    <li class="list-group-item">GPU: MDA & CGA</li>
                    <li class="list-group-item">System: IBM PC DOS</li>
                    <li class="list-group-item">Cost From: US$1,565</li>
                </ul>
                <div class="card-body">
                    <a href="error404.php" class="card-link">Buy product</a>
                </div>
                <div class="card-footer text-muted">August 12, 1981</div>
            </div>
        </div>
    </div>
</div>
<?php
include("template/foot.php");
?>