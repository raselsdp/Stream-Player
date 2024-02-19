 <!-- footer start -->

 <footer class="page-footer red darken-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Follow</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2024 Copyright Text
                </div>
            </div>
        </footer>

        <!-- footer end -->

        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://localhost/js/materialize.min.js"></script>
        <script>
            function s_time() {
                document.getElementById("time_desk").style.visibility = "visible";
                document.getElementById("time_mob").style.visibility = "visible";
            }
            function h_time() {
                document.getElementById("time_desk").style.visibility = "hidden";
                document.getElementById("time_mob").style.visibility = "hidden";
            }
            $("#scale-next").click(function () {
                $("#scale-next").toggleClass("scale-out");
            });
            $("#scale-prev").click(function () {
                $("#scale-prev").toggleClass("scale-out");
            });
            $("#scale-next1").click(function () {
                $("#scale-next1").toggleClass("scale-out");
            });
            $("#scale-prev1").click(function () {
                $("#scale-prev1").toggleClass("scale-out");
            });
            $("#scale-next-up").click(function () {
                $("#scale-next-up").toggleClass("scale-out");
            });
            $("#scale-prev-up").click(function () {
                $("#scale-prev-up").toggleClass("scale-out");
            });
            $("#pop_trans").click(function () {
                $("#pop_trans").toggleClass("scale-out");
            });
            $("#pop_trans_r").click(function () {
                $("#pop_trans").toggleClass("scale-in");
            });
            $("#pop_trans1").click(function () {
                $("#pop_trans1").toggleClass("scale-out");
            });
            $("#pop_trans_r").click(function () {
                $("#pop_trans1").toggleClass("scale-in");
            });
            $(document).ready(function () {
                $(".modal").modal();

                $(".modal").modal({
                    dismissible: true,
                    opacity: 0.5,
                    inDuration: 800,
                    outDuration: 700,
                    startingTop: "50%",
                    endingTop: "0%",
                    ready: function (modal, trigger) {
                        document.getElementById("q").focus();
                    },
                    complete: function () {},
                });
                $(".button-collapse").sideNav();
            });
        </script>
        <script>
            [].forEach.call(document.querySelectorAll("img[data-src]"), function (t) {
                t.setAttribute("src", t.getAttribute("data-src")),
                    (t.onload = function () {
                        t.removeAttribute("data-src");
                    });
            });
        </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize the modal
        $('.modal').modal();

        // Handle click event for the search icon
        $('#pop_trans1').on('click', function () {
            // Open the modal
            $('#search_modal').modal('open');
        });

        // Handle click event for the close button inside the modal
        $('#pop_trans_r').on('click', function () {
            // Close the modal
            $('#search_modal').modal('close');
        });
    });
</script>


        <!-- Include Materialize JavaScript -->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var elems = document.querySelectorAll(".sidenav");
                var instances = M.Sidenav.init(elems);

                // Show/hide overlay on sidenav open/close for desktop
                var overlay = document.querySelector(".sidenav-overlay");
                document.querySelector(".sidenav-trigger").addEventListener("click", function () {
                    overlay.style.display = overlay.style.display === "block" ? "none" : "block";
                });
            });
        </script>
    </body>
</html>
