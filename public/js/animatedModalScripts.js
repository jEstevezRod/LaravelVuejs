$(document).ready(function () {


    $("#demo02").animatedModal({
        modalTarget: 'lightSpeedIn',
        animatedIn: 'lightSpeedIn',
        animatedOut: 'bounceOutDown',
        color: '#39BEB9',
        beforeOpen: function () {
            $("#lightSpeedIn").css('overflow','hidden');
            var children = $(".thumb");
            var index = 0;

            function addClassNextChild() {
                if (index == children.length) return;
                children.eq(index++).show().velocity("transition.slideRightIn", {
                    opacity: 1,
                    stagger: 450,
                    defaultDuration: 100
                });
                window.setTimeout(addClassNextChild, 100);
            }

            addClassNextChild();
        },
        afterClose: function () {
            $(".thumb").hide();
            $("body").css('overflow','hidden');
        }
    });

    $("#demo03").animatedModal({
        modalTarget: 'teste',
        animatedIn: 'bounceInUp',
        animatedOut: 'bounceOutDown',
        color: '#39BEB9',
        animationDuration: '.5s',
        beforeOpen: function () {
            $("#teste").css('overflow','hidden');
            var children = $(".thumb");
            var index = 0;

            function addClassNextChild() {
                if (index == children.length) return;
                children.eq(index++).show().velocity("transition.slideUpIn", {
                    opacity: 1,
                    stagger: 450,
                    defaultDuration: 100
                });
                window.setTimeout(addClassNextChild, 100);
            }

            addClassNextChild();
        },
        afterClose: function () {
            $(".thumb").hide();
            $("body").css('overflow','hidden');

        }
    });

});
