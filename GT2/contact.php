<?php
include("template/head.php");
?>
<header>
    <div class="container mt-6">
        <h1> Contact with "customer service".</h1>
    </div>
</header>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>IBM Buenos Aires</h3>
        </div>
        <img src="img/IBM_Office.png" class="card-img-top" alt="5150">
        <div class="card-body">
            <p id="address">Address: Ing. Butty 275, C1001AFA CABA, Argentina</p>
            <p id="phone">Telephone: +54 11 4319-4000</p>
        </div>
        <div class="card-header">
            <h3>Customer service</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Send</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('address').addEventListener('click', function() {
        copyToClipboard('address');
    });

    document.getElementById('phone').addEventListener('click', function() {
        copyToClipboard('phone');
    });

    function copyToClipboard(elementId) {
        var text = document.getElementById(elementId).innerText;
        var textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        alert('Copiado al portapapeles: ' + text);
    }
</script>
<?php
include("template/foot.php");
?>