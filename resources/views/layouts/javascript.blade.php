<script src="{{ asset('admin/assets/js/pace.js')}}"></script>
<script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
<script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
<script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
<script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

<!-- Libs -->
<script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('admin/assets/libs/eve/eve.js')}}"></script>
<script src="{{ asset('admin/assets/libs/flot/flot.js')}}"></script>
<script src="{{ asset('admin/assets/libs/flot/curvedLines.js')}}"></script>
<script src="{{ asset('admin/assets/libs/chart-am4/core.js')}}"></script>
<script src="{{ asset('admin/assets/libs/chart-am4/charts.js')}}"></script>
<script src="{{ asset('admin/assets/libs/chart-am4/animated.js')}}"></script>

<!-- Demo -->
<script src="{{ asset('admin/assets/js/demo.js')}}"></script>
<script src="{{ asset('admin/assets/js/analytics.js')}}"></script>
<script>
    $(document).ready(function() {
        // checkCookie();
        $('#exampleModalCenter').modal();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }
</script>
<script src="{{ asset('admin/assets/js/pages/dashboards_index.js')}}"></script>