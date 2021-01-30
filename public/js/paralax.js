function parallax(event) {
    let layers =  document.querySelectorAll('.layer');
    for (let i = 0; i < layers.length;i++) {
        let speed = layers[i].getAttribute('data-speed');
        layers[i].style.transform = `translate3d(${(event.clientX * speed) / 10000}px, ${(event.clientY * speed) / 1000}px, 0px)`;
        /*if (scrollY < 620) {
            let speed = layers[0].getAttribute('data-speed');
                let speed2 = layers[1].getAttribute('data-speed');
                let speed3 = layers[2].getAttribute('data-speed');
                layers[0].style.transform = `translate3d(${(event.clientX * speed) / 10000}px, ${(event.clientY * speed) / 1000}px, 0px)`;
                layers[1].style.transform = `translate3d(${(event.clientX * speed2) / 10000}px, ${(event.clientY * speed2) / 1000}px, 0px)`;
                layers[2].style.transform = `translate3d(${(event.clientX * speed3) / 10000}px, ${(event.clientY * speed3) / 1000}px, 0px)`;
            } else
            if (scrollY > 1200 && scrollY < 1530) {
                layers[0].style.transform =  `translate3d(0px, 0px, 0px)`;
                layers[1].style.transform =  `translate3d(0px, 0px, 0px)`;
                layers[2].style.transform =  `translate3d(0px, 0px, 0px)`;
                let speed = layers[3].getAttribute('data-speed');
                let speed2 = layers[4].getAttribute('data-speed');
                let speed3 = layers[5].getAttribute('data-speed');
                layers[3].style.transform = `translate3d(${(event.clientX * speed) / 10000}px, ${(event.clientY * speed) / 10000}px, 0px)`;
                layers[4].style.transform = `translate3d(${(event.clientX * speed2) / 10000}px, ${(event.clientY * speed2) / 10000}px, 0px)`;
                layers[5].style.transform = `translate3d(${(event.clientX * speed3) / 10000}px, ${(event.clientY * speed3) / 10000}px, 0px)`;
        } else
            if (scrollY > 2248 && scrollY < 3000) {
                layers[3].style.transform =  `translate3d(0px, 0px, 0px)`;
                layers[4].style.transform =  `translate3d(0px, 0px, 0px)`;
                layers[5].style.transform =  `translate3d(0px, 0px, 0px)`;
                let speed = layers[6].getAttribute('data-speed');
                let speed2 = layers[7].getAttribute('data-speed');
                let speed3 = layers[8].getAttribute('data-speed');
                let speed4 = layers[9].getAttribute('data-speed');
                let speed5 = layers[10].getAttribute('data-speed');
                let speed6 = layers[11].getAttribute('data-speed');
                let speed7 = layers[12].getAttribute('data-speed');
                let speed8 = layers[13].getAttribute('data-speed');
                layers[6].style.transform = `translate3d(${(event.clientX * speed) / 10000}px, ${(event.clientY * speed) / 10000}px, 0px)`;
                layers[7].style.transform = `translate3d(${(event.clientX * speed2) / 10000}px, ${(event.clientY * speed2) / 10000}px, 0px)`;
                layers[8].style.transform = `translate3d(${(event.clientX * speed3) / 10000}px, ${(event.clientY * speed3) / 10000}px, 0px)`;
                layers[9].style.transform = `translate3d(${(event.clientX * speed4) / 10000}px, ${(event.clientY * speed4) / 10000}px, 0px)`;
                layers[9].style.transform = `translate3d(${(event.clientX * speed4) / 10000}px, ${(event.clientY * speed4) / 10000}px, 0px)`;
                layers[10].style.transform = `translate3d(${(event.clientX * speed5) / 10000}px, ${(event.clientY * speed5) / 10000}px, 0px)`;
                layers[11].style.transform = `translate3d(${(event.clientX * speed6) / 10000}px, ${(event.clientY * speed6) / 10000}px, 0px)`;
                layers[12].style.transform = `translate3d(${(event.clientX * speed7) / 10000}px, ${(event.clientY * speed7) / 10000}px, 0px)`;
                layers[13].style.transform = `translate3d(${(event.clientX * speed8) / 10000}px, ${(event.clientY * speed8) / 10000}px, 0px)`;
            }



*/

    }
}
    document.addEventListener('mousemove',parallax,false );




/*
function parallax(event , classLayer,posScroll) {

    document.querySelectorAll(`.${classLayer}`).forEach( layer => {

        let speed = layer.getAttribute('data-speed');
        if(scrollY < posScroll){
            console.log(layer);
            layer.style.transform = `translate3d(${(event.clientX*speed)/10000}px, ${(event.clientY*speed)/1000}px, 0px)`;
        }else {

            layer.style.transform = `translate3d(0px, 0px, 0px)`;

        }

    });

}
window.onload = function(){
    document.addEventListener('mousemove',parallax(document,"layer",902) );
    document.addEventListener('mousemove',parallax(document,"layer-2",2202) );
}
*/


