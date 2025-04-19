<script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slick.min.js"></script>
<script src="{{asset('assets')}}/js/swiper.min.js"></script>
<script src="{{asset('assets')}}/js/moment.min.js"></script>
<script src="{{asset('assets')}}/js/daterangepicker.min.js"></script>
<script src="{{asset('assets')}}/js/lightgallery.min.js"></script>
<script src="{{asset('assets')}}/js/YTPlayer.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
<script>
    document.getElementById("chat-button").addEventListener("click", function() {
        document.getElementById("chat-box").style.display = "block";
    });

    document.getElementById("close-chat").addEventListener("click", function() {
        document.getElementById("chat-box").style.display = "none";
    });
</script>