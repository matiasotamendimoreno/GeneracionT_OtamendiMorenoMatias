<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/IMB.ico" type="image/x-icon">
</head>

<body>
<div class="container">
        <h1>Error 404 - Página no encontrada</h1>
        <p>Lo sentimos, la página que buscas no existe.</p>
        <div id="dino-game"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var container = document.getElementById('dino-game');
            container.innerHTML = `
                <div id="runner-container">
                    <div id="canvas-container">
                        <canvas id="runner-canvas" width="800" height="200"></canvas>
                    </div>
                </div>
            `;

            var Runner = function (containerId) {
                this.container = document.getElementById(containerId);
                this.canvas = this.container.querySelector('canvas');
                this.canvasCtx = this.canvas.getContext('2d');
                this.init();
            };

            Runner.prototype = {
                init: function () {
                    this.running = false;
                    this.currentSpeed = 6;
                    this.spritePos = { x: 0, y: 0 };
                    this.tRex = new this.Trex(this.canvas, this.spritePos);
                    this.canvas.width = this.canvas.offsetWidth;
                    this.canvas.height = this.canvas.offsetHeight;
                    this.draw();
                    this.startListening();
                },
                startListening: function () {
                    var self = this;
                    document.addEventListener('keydown', function (e) {
                        if (e.keyCode === 32) {
                            if (!self.running) {
                                self.running = true;
                                self.run();
                            }
                            self.tRex.startJump();
                        }
                    });
                },
                run: function () {
                    var self = this;
                    var fps = 60;
                    var fpsInterval = 1000 / fps;
                    var then = window.performance.now();
                    var startTime = then;
                    var now, elapsed;

                    function animate() {
                        now = window.performance.now();
                        elapsed = now - then;

                        if (elapsed > fpsInterval) {
                            then = now - (elapsed % fpsInterval);
                            self.update();
                            self.draw();
                        }

                        if (self.running) {
                            requestAnimationFrame(animate);
                        }
                    }
                    animate();
                },
                update: function () {
                    this.tRex.update();
                },
                draw: function () {
                    this.canvasCtx.clearRect(0, 0, this.canvas.width, this.canvas.height);
                    this.tRex.draw();
                },
                Trex: function (canvas, spritePos) {
                    this.canvas = canvas;
                    this.canvasCtx = this.canvas.getContext('2d');
                    this.spritePos = spritePos;
                    this.xPos = 50;
                    this.yPos = 140;
                    this.width = 44;
                    this.height = 47;
                    this.groundYPos = this.yPos;
                    this.jumping = false;
                    this.jumpVelocity = 0;
                    this.init();
                }
            };

            Runner.prototype.Trex.prototype = {
                init: function () {
                    this.canvasCtx.fillStyle = '#535353';
                    this.canvasCtx.fillRect(this.xPos, this.yPos, this.width, this.height);
                },
                startJump: function () {
                    if (!this.jumping) {
                        this.jumping = true;
                        this.jumpVelocity = -15;
                    }
                },
                update: function () {
                    if (this.jumping) {
                        this.yPos += this.jumpVelocity;
                        this.jumpVelocity += 1;
                        if (this.yPos > this.groundYPos) {
                            this.yPos = this.groundYPos;
                            this.jumping = false;
                        }
                    }
                },
                draw: function () {
                    this.canvasCtx.clearRect(this.xPos, this.yPos - this.jumpVelocity - 1, this.width, this.height);
                    this.canvasCtx.fillStyle = '#535353';
                    this.canvasCtx.fillRect(this.xPos, this.yPos, this.width, this.height);
                }
            };

            new Runner('runner-container');
        });
    </script>
</body>

</html>