

    $(document).ready(function() {

        $('input[name="dates"]').daterangepicker({
            opens: 'left',
            locale: {
                format: 'ddd, D MMM'
            }
        });

        $(".owl-carousel:not('.single')").owlCarousel({
            margin: 20,
            nav: true,
            dots:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            },
        })

        $(".owl-carousel.single").owlCarousel({
            nav: true,
            margin:0,
            dots:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2,
                }
            },
        })
        
        if(window.pageYOffset >= 200){
            $(".navbar").addClass("shadow")
            $(".search-field .input-group").prependTo("#search")
        }else{
            $("#search .input-group").prependTo(".search-field .col-9")
            $(".navbar").removeClass("shadow")
        }

        $(document).scroll(function(){
            
            if(window.pageYOffset >= 200){
                $(".navbar").addClass("shadow")
                $(".search-field .input-group").prependTo("#search")
            }else{
                $("#search .input-group").prependTo(".search-field .col-9")
                $(".navbar").removeClass("shadow")
            }
            
        })

    })
    
