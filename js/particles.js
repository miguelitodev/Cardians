const canvas = document.getElementById("canvas");
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray;

// pegando a posicao do mouse
let mouse = {
    x: null,
    y: null,
    radius: (canvas.height / 80) * (canvas.width / 80)
}

window.addEventListener('mousemove',
    function(event) {
        mouse.x = event.x;
        mouse.y = event.y;
    }
);

// criando o particle

class Particle {
    constructor(x, y, directionX, directionY, color) {
        this.x = x;
        this.y = y;
        this.directionX = directionX;
        this.directionY = directionY;
        //tamanho das bolinhas
        this.size = 2.2;
        this.color = color;
    }

    //metodo que desenha cada particle
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
        ctx.fillStyle = "#fff";
        ctx.fill();
    }

    //checar a posicao do particle, a posicao do mouse, mover
    // o particle, desenhar o particle
    update() {
        //checar se o particle ainda ta dentro do canvas
        if (this.x > canvas.width || this.x < 0) {
            this.directionX = -this.directionX;
        }
        if (this.y > canvas.height || this.y < 0) {
            this.directionY = -this.directionY;
        }

        //checar detecção de colisão - posição do mouse/posição particle
        let dx = mouse.x - this.x;
        let dy = mouse.y - this.y;
        let distance = Math.sqrt(dx * dx + dy * dy);
        if (distance < mouse.radius + this.size) {
            if (mouse.x < this.x && this.x < canvas.width - this.size * 10) {
                this.x += 2;
            }
            if (mouse.x > this.x && this.x > this.size * 10) {
                this.x -= 2;
            }
            if (mouse.y < this.y && this.y < canvas.height - this.size * 10) {
                this.y += 2;
            }
            if (mouse.y > this.y && this.y > this.size * 10) {
                this.y -= 2;
            }
        }
        //mover particle
        this.x += this.directionX;
        this.y += this.directionY;

        //desenhar particle
        this.draw();
    }
}

//criando o array de particles
function init() {
    particlesArray = [];
    //define o numero de particulas
    let numberOfParticles = (canvas.height * canvas.width) / 9000;
    for (let i = 0; i < numberOfParticles; i++) {
        let size = (Math.random() * 1) + 1;
        let x = (Math.random() * ((innerWidth - size * 3) - (size * 3)) + size * 3);
        let y = (Math.random() * ((innerHeight - size * 3) - (size * 3)) + size * 3);
        //isso aqui muda a velocidade de movimentacao x y
        let directionX = (Math.random() * 5) - 4;
        let directionY = (Math.random() * 5) - 4;
        let color = '#fff';

        particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
    }
}

//CONECTAR AS PARTICULAS
function connect() {
    let opacityValue = 1;
    for (let a = 0; a < particlesArray.length; a++) {
        for (let b = a; b < particlesArray.length; b++) {
            let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x)) +
                ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));
            if (distance < (canvas.width / 7) * (canvas.height / 7)) {
                opacityValue = 0.7 - (distance / 20000);
                ctx.strokeStyle = 'rgba(255, 255, 255, ' + opacityValue + ')';
                ctx.lineWidth = 1
                ctx.beginPath();
                ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                ctx.stroke();
            }
        }
    }
}

// loop da animação
function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, innerWidth, innerHeight);

    for (let i = 0; i < particlesArray.length; i++) {
        particlesArray[i].update();
    }
    connect();
}

window.addEventListener('resize',
    function() {
        canvas.width = innerWidth;
        canvas.height = innerHeight;
        mouse.radius = ((canvas.height / 80) * (canvas.height / 80));
        init();
    }
);

window.addEventListener('mouseout',
    function() {
        mouse.x = undefined;
        mouse.y = undefined;
    }
)

init();
animate();