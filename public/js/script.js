

$(document).ready(function () {

    if($(window).width() > 800) {
        var controller = new ScrollMagic.Controller();

        var tl = new TimelineMax({onUpdate: updatePercentage});
        var tl2 = new TimelineMax({onUpdate: updatePercentage2});
        let tlup = new TimelineMax({onUpdate: updatePercentageup});
        var tl3 = new TimelineMax({onUpdate: updatePercentage3});
        var tl4 = new TimelineMax({onUpdate: updatePercentage4});
        var tl5 = new TimelineMax({onUpdate: updatePercentage5});
        var tldl = new TimelineMax({onUpdate: updatePercentagedl});


        tl.to('#text1', 1, {opacity: 1});


        tl2.to('#text2', 1, {opacity: 1});
        tl3.to('#text3', 1, {opacity: 1});
        tl4.to('#text4', 1, {opacity: 1});
        tl5.to('#text5', 1, {opacity: 1});
        tl.to('frame1', 5, {x: '0px', opacity: 1});
        tl2.to('#frame2', 5, {x: '0px', opacity: 1});


        tl3.to('#frame3', 5, {x: '0px', opacity: 1});

        tl4.to($('#frame'), 5, {opacity: 0});
        tl4.to($('#frame2'), 5, {opacity: 0});
        tl4.to($('#frame3'), 5, {opacity: 0});

        let rects = document.querySelectorAll('.rects');
        for (let i = 0; i < rects.length; i++) {
            tl4.to([rects[i]], 5, {x: '0px', opacity: 1});

        }

        tlup.to([$('.raiting__block'), $('.rects'), $('.text2__block'), $('.dots')], 1, {top: '-750px'});


        // tlup.to([$('.rects'),$('.raiting__block')],1,{position: 'absolute'});


        // tlup.to([$('.rectangle-frames')],1,{top:'2000px', opacity: 1});

        tl4.to($('#frame4'), 5, {x: '0px', opacity: 1});


        var scene = new ScrollMagic.Scene({
            triggerElement: '#text1',
            duration: 800
        })


            .setTween(tl)
            .addTo(controller);

        var scene2 = new ScrollMagic.Scene({
            triggerElement: '#text2',
            duration: 800,

        })
            .setPin('#text2')
            .setTween(tl2)

            .addTo(controller);


        var scene3 = new ScrollMagic.Scene({
            triggerElement: '#text3',
            duration: 800
        })

            .setPin('#text3')
            .setTween(tl3)

            .addTo(controller);
        var scene4 = new ScrollMagic.Scene({
            triggerElement: '#text4',

        })
            .setPin('#text4')
            .setTween(tl4)

            .addTo(controller);
        var scene5 = new ScrollMagic.Scene({
            triggerElement: '#text5',

        })
            .setTween(tl5)

            .addTo(controller);


        var phoneScene = new ScrollMagic.Scene({
            triggerElement: '#text1',
            duration: 900
        })

            .setTween(tl)

            .addTo(controller);


        var phoneScene2 = new ScrollMagic.Scene({
            triggerElement: '#text2',
            duration: 800
        })

            .setTween(tl3)

            .addTo(controller);

        var phoneScene3 = new ScrollMagic.Scene({
            triggerElement: '#text3',
            duration: 800
        })

            .setTween(tl3)

            .addTo(controller);
        var phoneScene4 = new ScrollMagic.Scene({
            triggerElement: '#text4',
            duration: 800
        })

            .setTween(tl4)

            .addTo(controller);

        var UpScene = new ScrollMagic.Scene({
            triggerElement: '.download-container',
            duration: 800,
            triggerHook: 1


        })

            .setTween(tlup)

            .addTo(controller);

        function updatePercentage() {
            //percent.innerHTML = (tl.progress() *100 ).toFixed();
            tl.progress();
            // console.log(tl.progress());
        }

        function updatePercentage2() {
            //percent.innerHTML = (tl.progress() *100 ).toFixed();
            tl2.progress();

        }

        function updatePercentage3() {
            //percent.innerHTML = (tl.progress() *100 ).toFixed();
            tl3.progress();

        }

        function updatePercentage4() {
            //percent.innerHTML = (tl.progress() *100 ).toFixed();
            tl4.progress();

        }

        function updatePercentage5() {
            //percent.innerHTML = (tl.progress() *100 ).toFixed();
            tl5.progress();

        }

        function updatePercentagedl() {
            tldl.progress();
        }

        function updatePercentageup() {
            tlup.progress();
        }

    }

});

/*function scroll_dot() {
    let dots = document.querySelectorAll('.dot');
    console.log(scrollY);

    for (let i = 0; i < dots.length;i++ ){
        if(scrollY < 500){
            dots[i].classList.remove('active__dot');
            dots[0].classList.add('active__dot');

        }else if(scrollY > 500 && scrollY <2000){
            dots[i].classList.remove('active__dot');
            dots[1].classList.add('active__dot');
        }else if(scrollY > 2000 && scrollY <3200){
            dots[i].classList.remove('active__dot');
            dots[2].classList.add('active__dot');
        }else if(scrollY > 3220){
            dots[i].classList.remove('active__dot');
            dots[3].classList.add('active__dot');
        }

    }
}*/
/*document.addEventListener("DOMContentLoaded", scroll_dot);*/
/*window.addEventListener('scroll', scroll_dot);*/
