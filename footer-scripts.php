
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>
 <script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '224706463');
    vgo('setTrackByDefault', true);

    vgo('process');
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6061a311f7ce18270934f245/1f1um9v8s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



<script>
  $(document).ready(function() {   
      if($.cookie("modal_shown") == null) {
        
          $('#myModal').modal('show');
          // var date = new Date();
          // var expiryDate = date.getDate() + 10;
          // var  = date.setDate(date.getDate() + 15);
          // alert(expiryDate);
        //   $.cookie("kailashs", "no");
        // setCookie('modal_shown', 'true', 30);
          $.cookie('modal_shown', 'true', { expires: 15 , path: '/' });
      }
  });
</script>

<!-- Dont delete it -->
<script type="text/javascript">
    function preloadFunc()
    {
          

        $(window).on('keydown', function (event) {
        if (event.keyCode == 123) {
            // alert('Restricted');
            return false;
        }
        else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
            // alert('Restricted')
            return false;
        }
        else if (event.ctrlKey && event.keyCode == 73) {
            // alert('Restricted')
            return false;
        }
    });
    $(document).on("contextmenu", function (e) {
        // alert('Restricted')
        e.preventDefault();
    });
    document.onkeydown = function (e) {
        if (e.ctrlKey &&
            (e.keyCode === 67 ||
                e.keyCode === 86 ||
                e.keyCode === 85 ||
                e.keyCode === 117)) {
            // alert("Restricted")
            return false;
        } else {
            return true;
        }
    };
    $(document).keypress("u", function (e) {
        if (e.ctrlKey) {
            return false;
        }
        else {
            return true;
        }
    });
    }
    window.onpaint = preloadFunc();
</script>